@extends('frontend.layouts.master')

@section('title', 'President Message')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">About</li>
        <li class="breadcrumb-item active" aria-current="page">President Message</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Section Content -->
<section id="content">
  <div class="container">
    <div class="row pgs-message">
      <div class="col-sm-12 text-center">
        <div class="content-wrap text-justify">
          <div class="card">
            <h5 class="card-header">President's Message</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <img class="president-img" src="{{ (empty($ps_member) ? asset('assets/images/members/president_demo.png') : asset('assets/images/members/'.$ps_member->image)) }}" alt="President Image" style="float: left">
                  <h3>{{ (empty($ps_member) ? 'Committte Not Created!' : $ps_member->name) }} President of PAARU.</h3>
                  {!! $pm_messages->message !!}
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
