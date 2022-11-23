<?php

namespace Modules\ContactUs\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ContactUs\Entities\Contact;
use Modules\ContactUs\Entities\ContactUs;

use Mail;

class FrontendContactUsController extends Controller
{

  public function contactUs()
  {
    $contact = ContactUs::first();
    return view('contactus::frontend.contact_us',compact('contact'));
  }

  public function messageSent(Request $request) {

    $validatedData = $request->validate([
      'first_name'              =>'required',
      'last_name'               =>'required',
      'phone'                   => 'required|regex:/(01)[0-9]{9}/',
      'email'                   =>'email:rfc,dns',
      'subject'                 =>'required',
      'message'                 =>'required',
      'captcha'                 => 'required|captcha'
    ]);

    $text = $request->message;

    $bad_content_message = array(
      "sex",
      "young lady",
      "porn",
      "ass",
      "Adult dating",
      "Dаting",
      "Butt",
    );

    $bad_content_message_check = false;

    foreach ($bad_content_message as $bcm) {
      if (stristr($text, $bcm) !== FALSE) {
        $bad_content_message_check = true;
      }
    }

    if($bad_content_message_check == true){
      session()->flash('error', "You send bad content of your message!");
      return redirect()->back();
    }
    
    $subject  = $request->subject;
    $email    = $request->email;
    $name     = $request->first_name.' '.$request->last_name;

    $data = [
      'text'          => $text,
      'subject'       => $subject,
      'email'         => $email,
      'name'          => $name,
      'image'         => 'https://paaru.org/assets/frontend/images/logo.png',
    ];


    Mail::send('frontend.mail.contact_us_mail', compact('data'),
    function ($message) use ($email,$name,$subject)
    {
      $message->from(env('MAIL_FROM_ADDRESS'),'Physics Alumni Association Rajshahi University');
      $message->to($email, $name)->subject($subject);
    });

    Contact::create($request->except(['captcha']));

    return redirect()->route('frontend.contact_us')->with('success', "Message send Successfully!");
  }

}
