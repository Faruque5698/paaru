@extends('frontend.layouts.master')

@section('title', 'Contact Us')

@section('content')
<!-- Section Contact -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="section-header">
          <i class="fa fa-handshake-o" aria-hidden="true"></i>
          <h2>Contact Us</h2>
          <p class="">Feel free to drop us a line at  info@paaru.org or please use the contact form so
            that we can inform you in a fast and targeted manner.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row text-center wow fadeInUp" data-wow-duration="1s">
        <div class="col-lg-4 col-md-6">
          <div class="contact-info">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>Call Us</span>
            <p>{{ $contact->mobile }}</p>
            <p>{{ $contact->phone }}</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="contact-info">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <span>Mail Us</span>
            <p>{{ $contact->email }}</p>
            <p>{{ $contact->mail }}</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="contact-info">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>Physics Alumni Association, RU</span>
            <p>Department of Physics</p>
            <p>1st Science Building, Rajshahi University</p>
          </div>
        </div>
      </div>
      <div class="row text-center" data-wow-duration="1s">
        <div class="col-md-12 text-center">
          <form class="form-horizontal contact-form" id="msg-sending-form" action="{{ route('frontend.send_message') }}" method="post">
            @csrf
            <div class="form-group row">
              <div class="col-sm-12 col-md-6">
                <input type="text" name="first_name" class="form-control" placeholder="First Name *"
                required="required">
              </div>
              <div class="col-sm-12 col-md-6 mrt15_992">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name *"
                required="required">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12 col-md-6">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number *"
                required="required">
              </div>
              <div class="col-sm-12 col-md-6 mrt15_992">
                <input type="email" name="email" class="form-control" placeholder="Email ID *"
                required="required">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12 col-md-12">
                <input type="text" name="subject" class="form-control" placeholder="Subject *"
                required="required">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <textarea class="form-control" name="message" rows="3"
                placeholder="Write your message here *" required="required"></textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                @captcha
                <input type="text" id="captcha" name="captcha" autocomplete="off" required>
              </div>

            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <button type="submit" id="msg-sending-btn" class="btn custom_btn">SEND MESSAGE</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Contact -->
  @endsection
  @push('after-scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <!-- END THEME LAYOUT SCRIPTS -->
  @if (session('success'))
  <script type="text/javascript">
  $(document).ready(function(){
    swal("Success!", "{{ session('success') }}", "success");
  });
</script>
@endif
@if (session('error'))
<script type="text/javascript">
$(document).ready(function(){
  swal("Sorry!", "{{ session('error') }}", "error");
});
</script>
@endif
<!-- sweetalert -->
@endpush
