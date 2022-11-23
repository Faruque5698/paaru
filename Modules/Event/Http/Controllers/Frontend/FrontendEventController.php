<?php

namespace Modules\Event\Http\Controllers\Frontend;

use App\EventPayment;
use App\Models\Notification;
use App\Notifications\EventNotification;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facades\PDF;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
//use LynX39\LaraPdfMerger\Facades\PdfMerger;
use Modules\Event\Entities\Event;
use Shurjomukhi\ShurjopayLaravelPlugin\Http\Controllers\Shurjopay;
//use Dompdf\Dompdf;
//use PDF;
//use Barryvdh\DomPDF\PDF;

class FrontendEventController extends Controller
{
      public function eventList()
//          vai ai function gulo nai
  {
    $events = Event::where(array('publication_status'=>1,'deleted_by'=>NULL))->latest()->paginate(6);

    return view('event::frontend.event',compact('events'));
  }

  public function eventDetails($id)
  {
    $event = Event::findOrFail($id);

    return view('event::frontend.event_details',compact('event'));
  }

  public function eventPayment($id){

          $event_pay = EventPayment::find($id);
//          return $event_pay;

              $info = array(
                  'currency' => "BDT",
                  'amount' => $event_pay->total,
                  'order_id' => ENV('MERCHANT_PREFIX').'-'.'83478756384658',
                  'discsount_amount' => "0",
                  'disc_percent' => "0",
                  'client_ip' => $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']),
                  'customer_name' => $event_pay->name,
                  'customer_phone' => $event_pay->phone,
                  'email' => $event_pay->email,
                  'customer_address' => $event_pay->address,
                  'customer_city' => "N/A",
                  'customer_state' => "N/A",
                  'customer_postcode' => "N/A",
                  'customer_country' => "BD",
                  'value1'=>$event_pay->id,
                  'value2'=>"value2",
                  'value3' =>"value3",
                  'value4' =>"value4"
              );

              $shurjopay_service = new Shurjopay();
              return $shurjopay_service->makePayment($info);


          }




  //ok
  public function update_payment(Request $request){

      $order_id=$request->order_id;
      $shurjopay_service = new Shurjopay();

      $pay_data = $shurjopay_service->verifyPayment($order_id);
//      return  $shurjopay_service->verifyPayment($order_id);

      $event_pay = EventPayment::find($pay_data[0]->value1);
//      return $event_pay;

//      $session =  session()->get('input');

//      return $pay_data[0]->amount;

      if ($pay_data[0]->sp_code == 1000){

          $event_pay->payment_type = 1;
          $event_pay->status = 1;



          \Illuminate\Support\Facades\Notification::route('mail',$event_pay->email)->notify(new EventNotification($event_pay));;

//          Toastr::success('Email Send Successfully', 'Success', ["positionClass" => "toast-top-right"]);
//          return back();

          return "Event Payment Successful";
      }else{
          return "Please Try Again";
      }


      }

      public function event_ticket($id){
        $eventdata = EventPayment::find($id);
//          $pdf = pdf::loadView('pdf.pdf',compact('eventdata'));
//          return $pdf->download();
//          $pdf = Pd::loadview('pdf',$eventdata);
//          return $pdf->download('pakainfo25_04_1992.pdf');

//          $pdf = PDF::loadView('pdf',compact('eventdata'));
//          return $pdf->download();\
          $event = Event::find($eventdata->event_id);


          return view('pdf',compact('eventdata','event'));


      }

      public function event_confirm(Request $request){
          $alldata = $request->all();
//          session()->push('input',$alldata);
          $event_bill = 0;
          $spouse = 0;
          $existing_life_fee = 0;
          $annual_member_fee = 0;
          $total = 0;

          if ($request->passing_type == 'bsc'){
              if ($request->year == '2017' || $request->year == '2018' || $request->year == '2019'){
                  $event_bill = 1500;

                  if ($request->spouse_name != null){
                      $spouse = 1500;
//                      $total = $event_bill+ $spouse ;
                  }
                  if ($request->paaru_type == 'existing_life'){
                      $existing_life_fee = 0;
                      $annual_member_fee = 0;
                  }else{
                      $existing_life_fee=$request->existing_life_fee;
                      $annual_member_fee=$request->annual_member_fee;
                  }

                  $total = $event_bill+ $spouse+$request->child_10_total_amount + $request->child_5_total_amount +$request->child_5_to_10_total_amount+$existing_life_fee+$annual_member_fee;

              }else{
                  $event_bill = 2500;
                  if ($request->spouse_name != null){
                      $spouse = 1500;
//                      $total = $event_bill+ $spouse ;
                  }
                  if ($request->paaru_type == 'existing_life'){
                      $existing_life_fee = 0;
                      $annual_member_fee = 0;
                  }else{
                      $existing_life_fee=$request->existing_life_fee;
                      $annual_member_fee=$request->annual_member_fee;
                  }

                  $total = $event_bill+ $spouse+$request->child_10_total_amount + $request->child_5_total_amount +$request->child_5_to_10_total_amount+$existing_life_fee+$annual_member_fee;


              }
          }else if($request->passing_type == 'existing'){
              $event_bill = 200;
              $total = $event_bill;

          }else{

              $event_bill = 2500;
              if ($request->spouse_name != null){
                  $spouse = 1500;
//                      $total = $event_bill+ $spouse ;
              }
              if ($request->paaru_type == 'existing_life'){
                  $existing_life_fee = 0;
                  $annual_member_fee = 0;
              }else{
                  $existing_life_fee=$request->existing_life_fee;
                  $annual_member_fee=$request->annual_member_fee;
              }

              $total = $event_bill+ $spouse+$request->child_10_total_amount + $request->child_5_total_amount +$request->child_5_to_10_total_amount+$existing_life_fee+$annual_member_fee;

          }


          $pay_event = new EventPayment();

          $pay_event->name = $request->name;
          $pay_event->event_id = $request->id;
          $pay_event->father_name = $request->father_name;
          $pay_event->present_affiliation = $request->present_affiliation;
          $pay_event->address = $request->address;
          $pay_event->phone = $request->phone;
          $pay_event->email = $request->email;
          $pay_event->passing_type = $request->passing_type;
          $pay_event->year = $request->year;
          $pay_event->session = $request->session_year;
          $pay_event->spouse_name = $request->spouse_name;
          $pay_event->paaru_type = $request->paaru_type;
          $pay_event->child_number_10 = $request->child_number_10;
          $pay_event->child_10_total_amount = $request->child_10_total_amount;
          $pay_event->child_number_5_to_10 = $request->child_number_5_to_10;
          $pay_event->child_5_to_10_total_amount = $request->child_5_to_10_total_amount;
          $pay_event->child_number_5 = $request->child_number_5;
          $pay_event->child_5_total_amount = $request->child_5_total_amount;
          $pay_event->existing_life_fee = $request->existing_life_fee;
          $pay_event->annual_member_fee = $request->annual_member_fee;
          $pay_event->total = $total;
//          $pay_event->updated_at = "";
          $pay_event->save();

          $event = Event::findOrFail($request->id);


          return view('event::frontend.confirmation',compact('pay_event','event'));
      }

      public function cash_payment($id){
            $event = EventPayment::find($id);
            $event->payment_type = 0;
            $event->status = 0;
            $event->save();

            return "Registration Successful";
//            return $event;
      }

      public function participant(){
          return view('event::backend.events.participant');

      }
}


