@extends('frontend.layouts.master')

@section('title', 'Constitution')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Constitution</li>
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
            <h5 class="card-header">Constitution of Physics Alumni Association Rajshahi University</h5>
            <div class="card-body">
            <div class="row">
              <div class="col-md-12">
              <object data="{{ asset('assets/document/1_PAARU_Constitution.pdf') }}" type="application/pdf" height="1000px" width="100%">
              <p><b>Constitution of Physics Alumni Association Rajshahi University</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('assets/images/organogram.pdf') }}">Download PDF</a>.</p>
              </object>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section Content -->
@endsection
