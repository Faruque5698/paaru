<?php

namespace Modules\Members\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Members\Http\Requests\MemberRequest;
use Auth;
use File;
use Mail;
use Modules\Members\Entities\Member;
use Modules\Members\Entities\MemberType;
use Devfaysal\BangladeshGeocode\Models\District;


class MembersController extends Controller
{

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Member';

        // module name
        $this->module_name = 'members';

        // directory path of the module
        $this->module_path = 'members';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Members\Entities\Member";
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;

        $module_action = 'List';


        $members = $module_model::whereNotNull('cat_of_member')->latest()->get();


        return view("$module_name::backend.$module_path.index", compact(
            'module_title',
            'module_action',
            'module_name',
            'module_icon',
            'members'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;

        $module_action = 'Create';

        $districts = District::all();

        $member_types = MemberType::where(array('publication_status' => 1))->get();

        $members = $module_model::whereNotNull('cat_of_member')->latest()->get();

        return view("$module_name::backend.$module_path.create", compact(
            'member_types',
            'districts',
            'module_title',
            'module_action',
            'module_name',
            'module_path',
            'members',
            'module_icon'
        ));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //      return $request->all();
        $module_model = $this->module_model;

        $photo = $request->file('image');

        if ($request->file('image')) {
            $fileName = time() . '.' . $photo->getClientOriginalExtension();
            $move = $photo->move('assets/images/members/', $fileName);
        }

        $signature = $request->file('signature');

        if ($request->file('signature')) {
            $fileNameSignature = time() . '.' . $signature->getClientOriginalExtension();
            $move = $signature->move('assets/images/signatures/', $fileNameSignature);
        }

        $module_model::create([
            'title' => $request->title,
            'name' => $request->name,

            'date_of_birth' => $request->date_of_birth,

            'bachelor_year' => $request->bachelor_year,
            'bachelor_roll' => $request->bachelor_roll,
            'masters_year' => $request->masters_year ? $request->masters_year : '',
            'masters_roll' => $request->masters_roll ? $request->masters_roll : '',
            'mphil_year' => $request->mphil_year ? $request->mphil_year : '',
            'mphil_roll' => $request->mphil_roll ? $request->mphil_roll : '',
            'phd_year' => $request->phd_year ? $request->phd_year : '',
            'phd_roll' => $request->phd_roll ? $request->phd_roll : '',

            'm_location' => $request->m_location,
            'm_country'   => $request->m_country,
            'm_post_code' => $request->m_post_code,
            'm_district' => $request->m_district,
            'm_email' => $request->m_email,
            'm_phone' => $request->m_phone,

            'p_location' => $request->p_location ? $request->p_location : '',
            'p_country'   => $request->p_country??NULL,
            'p_post_code' => $request->p_post_code ? $request->p_post_code : '',
            'p_district' => $request->p_district ? $request->p_district : NULL,

            'occupation' => $request->occupation,
            'designation' => $request->designation ? $request->designation : '',

            'name_of_spouse' => $request->name_of_spouse ? $request->name_of_spouse : '',
            'no_of_son' => $request->no_of_son ? $request->no_of_son : NULL,
            'no_of_daughter' => $request->no_of_daughter ? $request->no_of_daughter : NULL,

            'cat_of_member' => json_encode($request->cat_of_member),

            'amount' => $request->amount,
            'mode_of_payment' => $request->mode_of_payment ? $request->mode_of_payment : '',

            'payment_date' => $request->payment_date,
            'transaction_id' => $request->transaction_id ? $request->transaction_id : '',
            'bank_name' => $request->bank_name ? $request->bank_name : '',
            'branch_name' => $request->branch_name ? $request->branch_name : '',


            'created_by' => Auth::user()->id,
            'updated_by' => NULL,
            'image' => isset($fileName) ? $fileName : '',
            'signature' => isset($fileNameSignature) ? $fileNameSignature : '',
        ]);
        // Use to sent message register phone
        if ($request->m_phone != NULL) {
            //   $this->sendRegistrationMessage($request->m_phone);
        }

        if ($member_email = $request->m_email) {
            //initilize user name,phone number,and email
            $member_name = $request->name;
            $member_phone = $request->m_phone;
            // Send Success Email
            $data = [
                'text' => 'Congratulations, Your member registration process completely approved.',
                'email' => $member_email,
                'name' => $member_name,
                'image' => 'http://desktopit.com.bd/wp-content/uploads/2018/07/Desktop-logo.png',
            ];
            Mail::send(
                'members::mail.newUserRegisteredMail',
                compact('data'),
                function ($message) use ($member_email, $member_name) {
                    $message->from(env('MAIL_FROM_ADDRESS'), 'Physics Alumni Association Rajshahi University');
                    $message->to($member_email, $member_name)->subject('Registration Approval Mail');
                }
            );
        }

        session()->flash('success', "Member Created Successfully!");
        return redirect()->route('backend.members.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('members::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(Member $member)
    {


        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;

        $module_action = 'Update';

        $districts = District::all();
        $member_types = MemberType::where(array('publication_status' => 1))->get();



        return view("$module_name::backend.$module_path.edit", compact(
            'districts',
            'member_types',
            'member',
            'module_title',
            'module_name',
            'module_path',
            'module_icon',
            'module_model',
            'module_action'
        ));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, Member $member)
    {
        //      return json_encode($request->cat_of_member, true) ;//$request->all();
        $module_model = $this->module_model;
        $module_name = $this->module_name;

        $photo = $request->file('image');

        if ($request->file('image')) {
            $fileName = time() . '.' . $photo->getClientOriginalExtension();
            $move = $photo->move('assets/images/members/', $fileName);

            if (is_file('assets/images/members/' . $member->image)) {
                unlink('assets/images/members/' . $member->image);
            }
        }

        $signature = $request->file('signature');

        if ($request->file('signature')) {
            $fileNameSignature = time() . '.' . $signature->getClientOriginalExtension();
            $move = $signature->move('assets/images/signatures/', $fileNameSignature);

            if (is_file('assets/images/signatures/' . $member->signature)) {
                unlink('assets/images/signatures/' . $member->signature);
            }
        }

        $pCountry = "";
        if($request->p_country){
            $pCountry = $request->p_country;
        }else if($request->checked_p_country){
            $pCountry = $request->checked_p_country;
        }

        $member->update([
            'title' => $request->title,
            'name' => $request->name,

            'date_of_birth' => $request->date_of_birth,

            'bachelor_year' => $request->bachelor_year,
            'bachelor_roll' => $request->bachelor_roll,
            'masters_year' => $request->masters_year ? $request->masters_year : '',
            'masters_roll' => $request->masters_roll ? $request->masters_roll : '',
            'mphil_year' => $request->mphil_year ? $request->mphil_year : '',
            'mphil_roll' => $request->mphil_roll ? $request->mphil_roll : '',
            'phd_year' => $request->phd_year ? $request->phd_year : '',
            'phd_roll' => $request->phd_roll ? $request->phd_roll : '',

            'm_location' => $request->m_location,
            'm_country'   => $request->m_country,
            'm_post_code' => $request->m_post_code??NULL,
            'm_district' => $request->m_district??NULL,
            'm_email' => $request->m_email,
            'm_phone' => $request->m_phone,
            

            'p_location' => $request->p_location ? $request->p_location : '',
            'p_country'   => $request->p_country??NULL,
            'p_post_code' => $request->p_post_code ? $request->p_post_code : '',
            'p_district' => $request->p_district ? $request->p_district : NULL,

            'occupation' => $request->occupation,
            'designation' => $request->designation ? $request->designation : '',

            'name_of_spouse' => $request->name_of_spouse ? $request->name_of_spouse : '',
            'no_of_son' => $request->no_of_son ? $request->no_of_son : NULL,
            'no_of_daughter' => $request->no_of_daughter ? $request->no_of_daughter : NULL,

            'cat_of_member' => json_encode($request->cat_of_member),

            'amount' => $request->amount,
            'mode_of_payment' => $request->mode_of_payment ? $request->mode_of_payment : '',

            'payment_date' => $request->payment_date,
            'transaction_id' => $request->transaction_id ? $request->transaction_id : '',
            'bank_name' => $request->bank_name ? $request->bank_name : '',
            'branch_name' => $request->branch_name ? $request->branch_name : '',


            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
            'image' => isset($fileName) ? $fileName : $member->image,
            'signature' => isset($fileNameSignature) ? $fileNameSignature : $member->signature,
        ]);

        session()->flash('success', 'Member Updated Successfully');
        return redirect()->route("backend.$module_name.index");
    }

    public function unpublished(Member $member)
    {

        $member->update([
            'publication_status' => 0,
            'updated_by' => Auth::user()->id,
        ]);

        session()->flash('success', 'Member Unpublished Successfully');
        return redirect()->back();
    }

    public function published(Member $member)
    {
        $member->update([
            'publication_status' => 1,
            'updated_by' => Auth::user()->id,
        ]);
        //Send SMS on Member phone number
        if ($member->m_phone != NULL) {
            $this->sendMessage($member->m_phone);
        }

        if ($member_email = $member->m_email) {
            //initilize user name,phone number,and email
            $member_name = $member->name;
            $member_phone = $member->m_phone;
            // Send Success Email
            $data = [
                'text' => 'Congratulations, Your member registration process completely approved.',
                'email' => $member_email,
                'name' => $member_name,
                'image' => 'https://paaru.org/assets/frontend/images/logo.png',
                // 'url'        => 'https://paaru.org/login'
            ];

            Mail::send(
                'members::mail.approvation_mail',
                compact('data'),
                function ($message) use ($member_email, $member_name) {
                    $message->from(env('MAIL_FROM_ADDRESS'), 'Physics Alumni Association');
                    $message->to($member_email, $member_name)->subject('Registration Approval Mail');
                }
            );
        }

        session()->flash('success', "Member Published Successfully!!");

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */

    public function destroy(Member $member)
    {
        // Checking the member is not involved in
        // any committee then can delete the member
        if (empty($member->executive_committee_member) && empty($member->advisory_committee_member)) {

            if (!empty($member->image)) {

                if (File::exists('assets/images/members/' . $member->image)) {
                    unlink('assets/images/members/' . $member->image);
                }
            }

            if (!empty($member->signature)) {

                if (File::exists('assets/images/signatures/' . $member->signature)) {
                    unlink('assets/images/signatures/' . $member->signature);
                }
            }

            $member->delete();

            session()->flash('success', 'The Member Deleted Successfully!');
        } // If the member is involved in a committee then not to delete that member
        else {
            // Check the executive committee has the member
            if (!empty($member->executive_committee_member)) {
                session()->flash(
                    'error',
                    'The member is involved in executive committee as a '
                        . $member->executive_committee_member->executive_committee_type->name
                        . '. You should delete him from that committee first!'
                );
            } // Check advisory committee has the member
            elseif (!empty($member->advisory_committee_member)) {
                session()->flash(
                    'error',
                    'The member is involved in advisory committee. ' .
                        'You should delete him from that committee first!'
                );
            }
        }

        return back();
    }

    public function get_member(Request $request)
    {

        $member = Member::findOrFail($request->id);

        $member->date_of_birth = date("d-M-Y", strtotime($member->date_of_birth));
        $member->district = $member->district;

        return response()->json($member);
    }


    public function get_life_member()
    {
        $module_title = 'Life Member';
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;

        $module_action = 'List';
        /* Here cat_of_member =3 means life member*/

        $life_time_members = Member::where('cat_of_member', 'like', '%"' . 3 . '"%')->where('publication_status', 1)->latest()->get();

        // $life_time_members = Member::where(array(
        //     'cat_of_member' => 3,
        //     'publication_status' => 1
        // ))->latest()->get();


        // dd($life_time_members);
        return view('members::backend.members.life_members', compact(
            'life_time_members',
            'module_title',
            'module_name',
            'module_path',
            'module_icon',
            'module_model',
            'module_action'
        ));
    }

    public function get_alumni_members()
    {
        $module_title = 'Alumni Member';
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;

        $module_action = 'List';
        /* Here cat_of_member =2 means alumni member*/
        // $alumni_members = Member::where(array(
        //     'cat_of_member' => 2,
        //     'publication_status' => 1
        // ))->latest()->get();


        $alumni_members = Member::where('cat_of_member', 'like', '%"' . 2 . '"%')->where('publication_status', 1)->latest()->get();


        return view('members::backend.members.alumni_members', compact(
            'alumni_members',
            'module_title',
            'module_name',
            'module_path',
            'module_icon',
            'module_model',
            'module_action'
        ));
    }

    public function print_member($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = $this->module_path;

        $module_action = 'Print';

        $member = Member::findOrFail($id);
        // dd($member->getDistrict->name);

        // format payment date
        $pay_date = date("d-m-Y", strtotime($member->payment_date));

        //to find type of member
        $types = MemberType::findOrFail($member->cat_of_member);


        return view('members::backend.members.print_member', compact(
            'module_name',
            'module_title',
            'module_path',
            'module_model',
            'module_icon',
            'module_action',
            'module_path',
            'types',
            'pay_date',
            'member'
        ));
    }

    // Custom Methods
    public function sendMessage($m_phone)
    {
       
        if (strlen($m_phone) == 11) {
            $phone = '88' . $m_phone;
        } else {
            $phone = $m_phone;
        }
        
        $user = env('SMS_USER');
        $pass = env('SMS_PASS');
        $sid = env('SMS_SID');
        $token = env('SMS_API_TOKEN');
        $url =  env('SEND_SMS_URL');
        
        //$url = "http://sms.sslwireless.com/pushapi/dynamic/server.php";
        
        $time = time();
        //$message = "Congratulations, Your member registration process completely approved.";
        $message = [
        	[
        		"msisdn" => $phone,
        		"text" => "Congratulations, Your member registration process completely approved.",
        		"csms_id" => uniqid(),
        	]
        ];
        //previous
        //$param = "user=$user&pass=$pass&sms[0][0]= $phone&sms[0][1]=" . urlencode($message) . "&sms[0][2]=$time&sid=$sid";
        
        //current
        $params = [
        	"api_token" => $token,
        	"sid" => $sid,
        	"sms" => $message,
        ];

        $param = json_encode($params);
        //current end

        $crl = curl_init();
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($crl, CURLOPT_URL, $url);
        curl_setopt($crl, CURLOPT_HEADER, 0);
        //curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POST, 1);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $param);
        curl_setopt($crl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($param),
            'accept:application/json'
        ));
        
        $response = curl_exec($crl);
        curl_close($crl);
        return $response;
    
    }

    public function sendRegistrationMessage($m_phone)
    {
        if (strlen($m_phone) == 11) {
            $phone = '88' . $m_phone;
        } else {
            $phone = $m_phone;
        }

        $user = env('SMS_USER');
        $pass = env('SMS_PASS');
        $sid = env('SMS_SID');

        $url = "http://sms.sslwireless.com/pushapi/dynamic/server.php";
        $time = time();
        $message = "Congratulations, Your member registration process successfully completed.After 24 hours left we will confirm you about your activation.";
        $param = "user=$user&pass=$pass&sms[0][0]= $phone&sms[0][1]=" . urlencode($message) . "&sms[0][2]=$time&sid=$sid";
        $crl = curl_init();
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($crl, CURLOPT_URL, $url);
        curl_setopt($crl, CURLOPT_HEADER, 0);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($crl, CURLOPT_POST, 1);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $param);
        $response = curl_exec($crl);
        curl_close($crl);
    }

    public function get_renowned_alumni_members()
    {
        return view('members::backend.members.renowned_alumni_member');
    }
}
