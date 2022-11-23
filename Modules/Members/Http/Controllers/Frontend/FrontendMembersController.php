<?php

namespace Modules\Members\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Members\Entities\Member;
use Modules\Members\Entities\MemberType;
use Modules\Members\Http\Requests\MemberRequest;
use Modules\Members\Entities\RenownedAlumniMembers;
use Modules\Members\Entities\RenownedAlumniMembersMoreImage;

use Devfaysal\BangladeshGeocode\Models\District;

use Auth;
use Mail;
use Illuminate\Support\Facades\Validator;

class FrontendMembersController extends Controller
{
  public function __construct()
  {
    // Page Title
    $this->module_title = 'Members';

    // module name
    $this->module_name = 'members';

    // directory path of the module
    $this->module_path = 'members';

    // module icon
    $this->module_icon = 'fas fa-file-alt';

    // module model name, path
    $this->module_model = "Modules\Members\Entities\Member";
  }

  public function allMembers()
  {


    $members = Member::whereNotNull('cat_of_member')->where('publication_status', 1)->latest()->get();


    return view("members::frontend.all_members", compact('members'));
  }
  public function lifeMembers()
  {
    // Member type =2 means life member
    $life_time_members = Member::where(array('cat_of_member' => 3, 'publication_status' => 1))->latest()->paginate(10);

    // dd($life_time_members);

    return view('members::frontend.life_members', compact('life_time_members'));
  }

  public function alumniMembers()
  {
    // Member type =3 means alumni member
    $alumni_members = Member::where(array('cat_of_member' => 2, 'publication_status' => 1))->latest()->paginate(10);

    return view('members::frontend.alumni_members', compact('alumni_members'));
  }

  public function renownedAlumniMembers()
  {
    $re_alumni_members = RenownedAlumniMembers::latest()->get();

    // dd($re_alumni_members[0]->members);

    return view('members::frontend.renowned_alumni_members', compact('re_alumni_members'));
  }

  public function show_members($id)
  {

    $members = Member::where('cat_of_member', 'like', '%"' . $id . '"%')->orderBy('bachelor_year')->latest()->paginate(10);
    $member_type = MemberType::findOrFail($id);
    //    $members = Member::where(array(
    //      'cat_of_member'=>$id,
    //      'publication_status'=>1
    //    ))->orderBy('bachelor_year')->latest()->paginate(10);

    return view('members::frontend.show_members', compact('members', 'member_type'));
  }

  public function renownedAlumniMembersDetails($id)
  {
    $re_alumni_members = RenownedAlumniMembers::findOrFail($id);
    // $obj = RenownedAlumniMembersMoreImage::findOrFail($id);
    // dd($obj);
    // dd($re_alumni_members->photos);
    return view('members::frontend.renowned_alumni_members_details', compact(
      're_alumni_members'
    ));
  }

  // Member Add
  public function joinMember()
  {
    $module_name  = $this->module_name;
    $module_title = $this->module_title;
    $module_icon  = $this->module_icon;
    $module_model = $this->module_model;

    $module_action = 'Save';

    $member_types = MemberType::where(array('publication_status' => 1))->get();

    $districts = District::all();

    return view('members::frontend.join_member', compact(
      'districts',
      'member_types',
      'module_action',
      'module_title',
      'module_icon',
      'module_name',
      'module_model'
    ));
  }

  public function memberSave(Request $request)
  {
    Validator::make($request->all(), [
      'g-recaptcha-response' => 'required|captcha'
    ])->validate();


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
      'title'                    => $request->title,
      'name'                     => $request->name,

      'date_of_birth'            => $request->date_of_birth,

      'bachelor_year'            => $request->bachelor_year,
      'bachelor_roll'            => $request->bachelor_roll,
      'masters_year'             => $request->masters_year ? $request->masters_year : '',
      'masters_roll'             => $request->masters_roll ? $request->masters_roll : '',
      'mphil_year'               => $request->mphil_year ? $request->mphil_year : '',
      'mphil_roll'               => $request->mphil_roll ? $request->mphil_roll : '',
      'phd_year'                 => $request->phd_year ? $request->phd_year : '',
      'phd_roll'                 => $request->phd_roll ? $request->phd_roll : '',

      'm_location'               => $request->m_location,
      'm_country'                => $request->m_country,
      'm_post_code'              => $request->m_post_code??NULL,
      'm_district'               => $request->m_district??NULL,
      'm_email'                  => $request->m_email,
      'm_phone'                  => $request->m_phone,

      'p_location'               => $request->p_location ? $request->p_location : '',
      'p_country'               => $request->p_country ? $request->p_country : '',
      'p_post_code'              => $request->p_post_code ? $request->p_post_code : '',
      'p_district'               => $request->p_district ? $request->p_district : NULL,

      'occupation'               => $request->occupation,
      'designation'              => $request->designation ? $request->designation : '',

      'name_of_spouse'           => $request->name_of_spouse ? $request->name_of_spouse : '',
      'no_of_son'                => $request->no_of_son ? $request->no_of_son : NULL,
      'no_of_daughter'           => $request->no_of_daughter ? $request->no_of_daughter : NULL,

      'cat_of_member'           => $request->cat_of_member,

      'amount'                  => $request->amount,
      'mode_of_payment'         => $request->mode_of_payment ? $request->mode_of_payment : '',

      'payment_date'            => $request->payment_date,
      'transaction_id'          => $request->transaction_id ? $request->transaction_id : '',
      'bank_name'               => $request->bank_name ? $request->bank_name : '',
      'branch_name'             => $request->branch_name ? $request->branch_name : '',


      'created_by'               => NULL,
      'updated_by'               => NULL,
      'image'                    => isset($fileName) ? $fileName : '',
      'signature'                => isset($fileNameSignature) ? $fileNameSignature : '',
    ]);

    //Send SMS on Member phone number
    if ($request->m_phone != NULL) {
      //   $this->sendRegistrationMessage($request->m_phone);
    }

    if ($member_email = $request->m_email) {
      //initilize user name,phone number,and email
      $member_name  = $request->name;
      $member_phone = $request->m_phone;
      // Send Success Email
      $data = [
        'text'       => 'Congratulations, Your member registration process completely approved.',
        'email'      => $member_email,
        'name'       => $member_name,
        'image'      => 'https://paaru.org/assets/frontend/images/logo.png',
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
    return redirect()->route('frontend.join_member')->with('success', "Member Created Successfully!");
  }
  // End Member Add

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

    $url = "http://sms.sslwireless.com/pushapi/dynamic/server.php";
    $time = time();
    $message = "Congratulations, Your member registration process completely approved. User creadential has been sent to your email.";
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
    $message = "Your registration process is completed and sending for approval!";
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

  // ajax call
  public function get_renowned_alumni_member(Request $request)
  {
    $renowned_alumni_members = RenownedAlumniMembers::findOrFail($request->id);

    $member = $renowned_alumni_members->member;

    $member->date_of_birth = date("d-M-Y", strtotime($member->date_of_birth));

    $member->district = $member->district;

    return response()->json($member);
  }

  public function get_single_member(Request $request)
  {

    //$member = Member::findOrFail($request->id);
    $member = Member::where("id",$request->id)->with('getDistrict','getPDistrict')->firstOrFail();
    $member->date_of_birth = date("d-M-Y", strtotime($member->date_of_birth));
    $member->district = $member->district;

    return response()->json($member);
  }
}
