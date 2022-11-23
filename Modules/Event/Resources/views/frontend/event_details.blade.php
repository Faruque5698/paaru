@extends('frontend.layouts.master')

@section('title', $event->title)

@section('css')

  @endsection

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('frontend.event_list') }}">Events</a></li>
        <li class="breadcrumb-item active" aria-current="page">Events details</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Section Content -->
<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-wrap committee-list">
          <div class="card">
            <h5 class="card-header">{{ $event->title }}</h5>
            <div class="card-body">

              <div class="row">
                <div class="col-lg-8">
                  <div class="event-img">
                    <img src="{{ asset('assets/images/event/'.$event->image) }}" alt="Event Image">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="event-summary d-flex flex-column justify-content-center p-3">
                    <div class="event-date-time">
                      <p><i class="fa fa-calendar" aria-hidden="true"></i> Event Date : {{ date("d M Y",strtotime($event->date_time))}}</p>
                      <p><i class="fa fa-clock-o" aria-hidden="true"></i> Beginning at: {{ date('h:i A', strtotime($event->date_time)) }}</p>

                      @if($event->ticket_book == 1)
                      <div class="row">

                        <div class="col-10 col-lg-12 offset-4 offset-lg-3 offset-sm-4">
                          <form action="#">
                            <button class="btn btn-success" type="submit">Book Ticket</button>
                          </form>
                        </div>

                      </div>

                      @endif

                    </div>
                    {!! $event->location ? $event->location : '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14538.078184230433!2d88.58550789999998!3d24.36322345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbef06fc9f05fb%3A0xa24b2e60bfa403be!2sVarendra%20Research%20Museum!5e0!3m2!1sen!2sbd!4v1572938546178!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>' !!}
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-sm-10">
                  <div class="event-description">
                    <div class="row">
                      <div class="col-md-6">
                        <h4>Event Description</h4>
                      </div>
                  </div>

                  {!! $event->description !!}
                </div>

              </div>
                <div class="col-sm-2">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Join Event
                  </button>
{{--             New Modal    --}}
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title" style="font-style: italic;font-weight: bolder;" id="exampleModalLabel">Registration</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('frontend.event_confirm')}}" id="event_registration_fom" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="row">
                            <div class="col-sm-12">
                              <label for="">Name <span style="color: red">*</span></label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                              <input type="hidden" class="form-control" id="id" name="id" placeholder="id" value="{{$event->id}}">
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-sm-12">
                              <label for="">Father's Name<span style="color: red">*</span></label>
                              <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Father's Name">
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-sm-12">
                              <label for="">Present Affiliation <span style="color: red">*</span></label>
                              <input type="text" class="form-control" id="present_affiliation" name="present_affiliation" placeholder="Present Affiliation">
                            </div>
                          </div>
                            <div class="row mt-2">
                              <div class="col-sm-12">
                                <label for="">Address <span style="color: red">*</span></label>
                                <textarea class="form-control" id="address" name="address"  rows="4" placeholder="Address"></textarea>
                              </div>
                            </div>
                            <div class="row mt-2">
                              <div class="col-sm-6">
                                <label for="">Phone <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                              </div>
                              <div class="col-sm-6">
                                <label for="">Email <span style="color: red">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                              </div>
                            </div>
                            <div class=" mt-2">
                              <label for="">Passing Year <span style="color: red">*</span></label>
                              <div class="row">
                              <div class="col-sm-3">
                                <input type="radio" name="passing_type" id="passing_type" value="bsc"> Bsc
                              </div>
                              <div class="col-sm-3">
                                <input type="radio" name="passing_type" value="msc"> Msc
                              </div>
                              <div class="col-sm-3">
                                <input type="radio" name="passing_type" value="phd"> MPhil/PhD
                              </div>
                              <div class="col-sm-3">
                                <input type="radio" name="passing_type" value="existing"> Existing
                              </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                  <input type="text" class="form-control mt-2" id="year" name="year" placeholder="Year">

                                </div>
                              <div class="col-sm-6">
                                <input type="text" class="form-control mt-2" id="year_amount" name="year_amount"  placeholder="Year Amount" value="2500" readonly>

                              </div>


                            <div class="col-sm-6">
                              <input type="text" class="form-control mt-2" id="session" name="session_year" required placeholder="Session">

                            </div>
                              <div class="col-sm-6">
                                <input type="text" class="form-control mt-2" id="session_amount" name="session_amount" placeholder="Session Amount" value="0" readonly>

                              </div>

                        </div>
                            <div class=" mt-2" >
                              <label for="">PAARU Membership <span style="color: red">*</span> </label>
                              <div class="row">
                                <div class="col-sm-4">
                                  <input type="radio" name="paaru_type" id="paaru_type" value="existing_life"> Existing Life Member
                                </div>
                                <div class="col-sm-4">
                                  <input type="radio" name="paaru_type" value="new_life"> New Life Member
                                </div>
                                <div class="col-sm-4">
                                  <input type="radio" name="paaru_type" value="new_annual"> New Annual Member
                                </div>
                              </div>
                            </div>
                            
                            <div class="row mt-2" id="sp">
                              <div class="col-sm-12">
                                <label for="">Spouse Name(If Participating Only)</label> <input type="checkbox" name="checkbox" id="checkbox" onclick="checkFunction()" >
                                <div class="row" id="spouse" >
                                <div class="col-sm-8 ">
                                  <input type="text" class="form-control" id="spouse_name" name="spouse_name" placeholder="Spouse Name">

                                </div>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" id="spouse_amount" name="spouse_amount" value="1500" readonly>

                                </div>
                                </div>
                              </div>
                            </div>

                            <div class=" mt-2">
                              <label class=" bold">Child (Above 10 year )</label>
                              <div class="row">
                                <div class="col-sm-6">
                                <input type="number" class="form-control" id="child_number_10" name="child_number_10" value="0" placeholder="Child Number">
                                </div>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="child_10_total_amount" name="child_10_total_amount" placeholder="Child Number" value="0" readonly>
                                </div>
                            </div>

                              <div class=" mt-2">
                                <label class=" bold">Child (From 5 To 10 year )</label>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <input type="number" class="form-control" id="child_number_5_to_10" name="child_number_5_to_10" value="0" placeholder="Child Number">
                                  </div>
                                  <div class="col-sm-6">
                                    <input type="number" class="form-control" id="child_5_to_10_total_amount" name="child_5_to_10_total_amount" placeholder="Child Number" value="0" readonly>
                                  </div>
                                </div>
                              </div>

                              <div class=" mt-2">
                                <label class=" bold">Child (Bellow 5 year )</label>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <input type="number" class="form-control" id="child_number_5" name="child_number_5" value="0" placeholder="Child Number">
                                  </div>
                                  <div class="col-sm-6">
                                    <input type="number" class="form-control" id="child_5_total_amount" name="child_5_total_amount" placeholder="Child Number" value="0" readonly>
                                  </div>
                                </div>
                              </div>

                                <div class="row mt-2 hideit">
                                    <div class="col-sm-6 ">
                                      <label for="">Existing Life Member Fee</label>
                                      <input type="number" class="form-control" id="existing_life_fee" name="existing_life_fee" value="0" placeholder="Child Number" readonly>
                                    </div>
                                    <div class="col-sm-6">
                                      <label for="">Annual Member Fee</label>
                                      <input type="number" class="form-control" id="annual_member_fee" name="annual_member_fee" placeholder="Child Number" value="0" readonly>
                                    </div>
                                </div>

                              <div class="row mt-2">
                                <div class="col-sm-12">
                                  <label for="">Total Amount<span style="color: red"></span></label>
                                  <input type="text" class="form-control" id="total_amount" name="total_amount"  value="" readonly>
                                </div>
                              </div>

{{--                              <div class=" mt-2 hideit">--}}
{{--                                <label for="">Payment Method</label>--}}
{{--                                <div class="row ">--}}
{{--                                <div class="col-sm-6 ">--}}
{{--                                  <input type="radio" class="" id="payment" name="payment" value="cash">--}}
{{--                                  <label for="">Cash Payment</label>--}}

{{--                                </div>--}}
{{--                                <div class="col-sm-6">--}}

{{--                                  <input type="radio" class="" id="payment" name="payment" value="online">--}}
{{--                                  <label for="">Online Payment</label>--}}
{{--                                </div>--}}
{{--                              </div>--}}
{{--                              </div>--}}

                                <div class="mt-3 col-sm-12 text-center">

                                  <button type="submit" class="btn btn-primary col-sm-4">Join</button>

                                </div>
                            </div>

                          </form>
                        </div>
{{--                        <div class="modal-footer">--}}
{{--                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                          <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                        </div>--}}
                      </div>
                    </div>
                  </div>





                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<script
        src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
<script>



  $('input[name="passing_type"]').click(function(e) {
    if(e.target.value === 'bsc') {
      $('#year').show();
      $('#year_amount').show();
    }
    else if(e.target.value === 'msc') {
      $('#year').show();
      $('#year_amount').show();
    }else if(e.target.value === 'phd') {
      $('#year').show();
      $('#year_amount').show();
    } else {
      $('#year').hide();
      $('#year_amount').hide();
    }

    if(e.target.value === 'existing') {
      $('#session').show();
      $('#session_amount').show();
      // $('#sp').hide();
      $('#paru_life').hide();
    }else{
      $('#session').hide();
      $('#session_amount').hide();
      // $('#sp').show();
      $('#paru_life').show();
    }

  })

  $('#year').hide();
  $('#session').hide();
  $('#year_amount').hide();
  $('#session_amount').hide();
  // $('#sp').show();
  $('#paru_life').show();

  // $('input[name="year"]').change(function(e) {
  //   $v = e.target.value();
  //   alert($v);
  // })
</script>

<script>

  // $(function () {
    $('input[name="spouse_name"]').hide();
    $('input[name="spouse_amount"]').hide();

    //show it when the checkbox is clicked
    $('input[name="checkbox"]').on('click', function () {
      if ($(this).prop('checked')) {
        $('input[name="spouse_name"]').show();
        $('input[name="spouse_amount"]').show();
      } else {
        $('input[name="spouse_name"]').hide();
        $('input[name="spouse_amount"]').hide();
      }
    });
  // });

  $('input[name="paaru_type"]').click(function(e) {
    if(e.target.value === 'existing_life') {
      $('.hideit').hide();
      // $('#annual_member_fee').hide();
    }
    else if(e.target.value === 'new_life') {
      $('#existing_life_fee').val(3000);
      $('#annual_member_fee').val(0)
      $('.hideit').show();
    // }else if(e.target.value === 'new_annual') {
    //   $('#year').show();
    } else {
      $('#existing_life_fee').val(0);
      $('#annual_member_fee').val(0)
      $('.hideit').show();
    }

    // $('.hideit').show();



  })

  $('#year').hide();
  $('#session').hide();
</script>

<script>
  // $("#child_10").on("change paste keyup", function() {
  //   alert($(this).val());
  // });
  $('#child_number_10').on('change paste keyup',function (){
      $child_number = $(this).val();
      // console.log($c);
    $total_amount = $child_number * 1000;

    $('#child_10_total_amount').val($total_amount);

  })
</script>

<script>
  // $("#child_10").on("change paste keyup", function() {
  //   alert($(this).val());
  // });
  $('#child_number_5_to_10').on('change paste keyup',function (){
    $child_number = $(this).val();
    // console.log($c);
    $total_amount = $child_number * 500;

    $('#child_5_to_10_total_amount').val($total_amount);

  })
</script>

<script>
  // $("#child_10").on("change paste keyup", function() {
  //   alert($(this).val());
  // });
  $('#child_number_5').on('change paste keyup',function (){
    $child_number = $(this).val();
    // console.log($c);
    $total_amount = $child_number * 0;

    $('#child_0_total_amount').val($total_amount);

  })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
 // console.log( document.getElementsByClassName('error').style.color='red');
  if($('#event_registration_fom'). length > 0){
    $('#event_registration_fom').validate({
      rules:{
          name:{
                required:true,
          },father_name:{
          required:true,

        },present_affiliation:{
          required:true,

        },address:{
          required:true,

        },phone:{
          required:true,

        },email:{
          required:true,

        },paaru_type:{
          required:true,

        },passing_type:{
          required:true,

        },

      },
      messages:{

        name:{
          required:"Enter Your name",
        },father_name:{
          required:'Enter father name',

        },present_affiliation:{
          required:'Enter present affiliation',

        },address:{
          required:'Enter address',

        },phone:{
          required:'Enter phone',

        },email:{
          required:'Enter email',

        },paaru_type:{
          required:"Select PAARU Membership",

        },passing_year:{
          required:"Select You Last Passing Academic Exam",

        },
      }
    })
  }
 // $(".error").css("background-color", "red");
 // document.getElementById('name-error').style.color='red';
</script>

<script>
  $(document).ready(function () {
    $('input[name="passing_type"]').click(function(e) {
      if(e.target.value === 'bsc') {

        $('#year').on('keyup',function (){
          var year = $("#year").val();
          if(year == 2017 || year == 2018 || year == 2019){
            $('#year_amount').val(1500);
          }else{
            $('#year_amount').val(2500);
          }

        })

      }
      else {
        $('#year_amount').val(2500);
      }

      if(e.target.value === 'existing') {
        $('#session_amount').val(200);
      }

    })
  })

</script>

<script>
  $(document).ready(function (){
    // var year_amount= $("#year_amount").val();
    // alert()
  })
</script>

<!-- End Section Content -->
@endsection
