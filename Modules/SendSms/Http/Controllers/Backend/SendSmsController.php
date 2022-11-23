<?php

namespace Modules\SendSms\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\SendSms\Entities\SendSms;

use Modules\Members\Entities\Member;
use Modules\Members\Entities\MemberType;
use Modules\Committee\Entities\Committee;
use Modules\Committee\Entities\AdvisoryCommittee;
use Modules\Committee\Entities\CommitteeTypes;
use phpDocumentor\Reflection\Types\Null_;

class SendSmsController extends Controller
{

    public function __construct()
    {
        // Page Title
        $this->module_title = 'SendSms';

        // module name
        $this->module_name = 'sendsms';

        // directory path of the module
        $this->module_path = 'sendsms';

        // module icon
        $this->module_icon = 'fas fa-comment';

        // module model name, path
        $this->module_model = "Modules\SendSms\Entities\SendSms";
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = $this->module_path;

        $module_action = 'List';

        $sendsms = $module_model::orderBy('id', 'desc')->get();

        $sms_count = $this->getAvailableSMSCount();
        // dd($sms_count);

        $total_available_sms = "Not Show";

        if ($sms_count->status === "SUCCESS") {
            $total_available_sms = $sms_count->balance;
        }

        // dd($total_available_sms);
        return view("$module_name::backend.$module_path.index", compact(
            'sendsms',
            'module_title',
            'module_name',
            'total_available_sms',
            'module_icon',
            'module_model',
            'module_action'
        ));
    }

    public function getAvailableSMSCount()
    {

        $url = "https://smsplus.sslwireless.com/api/v3/balance";

        $params = [
            "api_token" => env('SMS_API_TOKEN'),
            "sid" => env('SMS_SID'),
        ];

        $params = json_encode($params);


        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($params),
            'accept:application/json'
        ));

        $response = curl_exec($ch);
        curl_close($ch);


        // // Convert into associative array
        $newResponse = json_decode($response);
        return $newResponse;


        // $user = env('SMS_USER');
        // $pass = env('SMS_PASS');
        // $sid = env('SMS_SID');

        // $request = "smsbalance";

        // $url = "http://sms.sslwireless.com/pushapi/dynamicplus/server.php";
        // $param = "user=$user&pass=$pass&sid=$sid&request=$request";

        // $crl = curl_init();
        // curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, FALSE);
        // curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, 2);
        // curl_setopt($crl, CURLOPT_URL, $url);
        // curl_setopt($crl, CURLOPT_HEADER, 0);
        // curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($crl, CURLOPT_POST, 1);
        // curl_setopt($crl, CURLOPT_POSTFIELDS, $param);
        // $response = curl_exec($crl);
        // curl_close($crl);

        // // Convert xml string into an object
        // $new = simplexml_load_string($response);

        // // Convert into json
        // $con = json_encode($new);

        // // Convert into associative array
        // $newArr = json_decode($con, true);

        // return $newArr;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = $this->module_path;

        $module_action = 'Create';

        return view("$module_name::backend.$module_path.create", compact(
            'module_path',
            'module_title',
            'module_model',
            'module_name',
            'module_icon',
            'module_action'
        ));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $module_model = $this->module_model;
        $module_name = $this->module_name;


        $module_model::create([
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route("backend.$module_name.index")->with('success', "SMS Created Successfully!");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $sendsms = SendSms::findOrFail($id);

        // cat_of_member =2 means alumni member from Member table
        $alumni_members = Member::where('publication_status', 1)
        ->where(function($q){
            $q->where('cat_of_member', 'like', '%"' . 2 . '"%')->orWhere('cat_of_member',2);
        })->count();

        // cat_of_member = 3 means life member from Member table
        // $life_time_members = Member::where(
        //     array('cat_of_member' => 3, 'publication_status' => 1)
        // )->count();
        $life_time_members = Member::where('cat_of_member', 'like', '%"' . 3 . '"%')->where('publication_status', 1)->count();

        // dd($life_time_members);
        // Total member count
        $total_member = Member::where(array('publication_status' => 1))->count();

        // Total Advisory Committee member
        $advisory_committee = AdvisoryCommittee::all()->count();

        // Total Executive Committee member
        $executive_committee = Committee::all();
        $executive_members = array();
        foreach ($executive_committee as $key => $com) {
            $executive_members[$key++] = $com->member;
        }
        $count_exective_committee = count($executive_members);

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = $this->module_path;

        $module_action = 'Send Sms';

        return view("$module_name::backend.$module_path.send_sms", compact(
            'sendsms',
            'module_path',
            'module_title',
            'module_model',
            'module_name',
            'module_icon',
            'module_action',
            'life_time_members',
            'alumni_members',
            'total_member',
            'advisory_committee',
            'count_exective_committee'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $sms = SendSms::findOrFail($id);

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = $this->module_path;

        $module_action = 'Update';

        return view("$module_name::backend.$module_name.edit", compact(
            'sms',
            'module_action',
            'module_title',
            'module_name',
            'module_icon',
            'module_model',
            'module_path'
        ));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $sms = SendSms::findOrFail($id);

        $module_name = $this->module_name;

        $sms->update([
            'subject' => $request->subject,
            'message' => $request->message,
        ]);


        return redirect()->route("backend.$module_name.index")->with('success', 'SMS Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $sendsms = SendSms::findOrFail($id);

        $sendsms->delete();

        return back()->with('success', 'Deleted Successfully');
    }

    // Custom function
    public function sendMessageToMembers(Request $request)
    {
        $member_type = $request->member;

        $message = $request->message;

        $members = array();
        // check all member types because member type id is between 1 to 4
        if ($member_type < 4) {
            $member_id = intval($member_type);
            Member::where('publication_status',1)
            ->where(function($q) use ($member_id) {
                //$q->whereJsonContains('cat_of_member', $member_type)->orWhere('cat_of_member',$member_type);
                $q->where('cat_of_member', 'like', '%"' . $member_id . '"%')->orWhere('cat_of_member',$member_id);
            })
            ->chunk(100, function ($members) use ($message) {
                if ($members) {
                    foreach ($members as $key => $member) {
                        if ($member->m_phone) {
                            $mobile = $member->m_phone;
                            $this->sendMessage($mobile, $message);
                        }
                    }
                }
            });
        } // For my need member_type 4 means executive committee members
        elseif ($member_type == 4) {

            $executive_committee = Committee::all();

            foreach ($executive_committee as $key => $com) {
                $members[$key++] = $com->member;
            }

            foreach ($members as $key => $ms) {
                // echo $ms->mobile;
                if ($ms->m_phone) {
                    $this->sendMessage($ms->m_phone, $message);
                }
            }
        } // For my need member_type 5 means Advisory committee members
        elseif ($member_type == 5) {

            $advisory_committee = AdvisoryCommittee::all();

            foreach ($advisory_committee as $key => $a_com) {
                $members[$key++] = $a_com->member;
            }

            foreach ($members as $key => $a_com) {
                // echo $ms->mobile;
                if ($a_com->m_phone) {
                    $this->sendMessage($a_com->m_phone, $message);
                }
            }
        } // For my need member_type 6 means all members
        else {
            $all_members = Member::where(array('publication_status' => 1))->chunk(100, function ($members) use ($message) {
                if ($members != NULL) {
                    foreach ($members as $key => $member) {
                        if ($member->m_phone) {
                            $mobile = $member->m_phone;
                            $this->sendMessage($mobile, $message);
                        }
                    }
                }
            });
        }


        return back()->with('success', 'Successfully sent messages.');
    }


    public function sendMessage($phone_number, $message)
    {
        if (strlen($phone_number) == 11) {
            $phone = '88' . $phone_number;
        } else {
            $phone = $phone_number;
        }

        //$DOMAIN = "https://smsplus.sslwireless.com";
        //$SID = "PAARUAPI";
        //$API_TOKEN = "PAARU-1d92f91e-76e1-48cf-bc39-2adf60f16e30";
        //$API_TOKEN = "DesktopIT-b5b257fb-2732-4905-99e9-54d0d206e9db";
        
        $user = env('SMS_USER');
        $pass = env('SMS_PASS');
        $sid = env('SMS_SID');
        $token = env('SMS_API_TOKEN');
        $url =  env('SEND_SMS_URL');

        $messageData = [
            [
                "msisdn" => $phone_number,
                "text" => $message,
                "csms_id" => uniqid(),
            ]
        ];

        $params = [
            "api_token" => $token,
            "sid" => $sid,
            "sms" => $messageData,
        ];

        $params = json_encode($params);
        //$url = trim($DOMAIN, '/') . "/api/v3/send-sms/dynamic";

        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($params),
            'accept:application/json'
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
