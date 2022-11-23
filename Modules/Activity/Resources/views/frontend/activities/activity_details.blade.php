@extends('frontend.layouts.master')

@section('title',  $activity->title)

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('frontend.activity_list') }}">Activity</a></li>
        <li class="breadcrumb-item active" aria-current="page">Activity Details</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Section Activity AREA -->
<section class="product" id="product">
  <div class="container">

    <div class="row">
      <!-- SINGLE product ITEM -->
      <div class="col-md-12">
        <div class="single_product">
          <div class="product_thumb">
            <a>
              <img src="{{ asset('assets/images/activities/'.$activity->image) }}" alt="" />
            </a>
          </div>
          <!-- product CONTENT -->
          <div class="product_content">
            <div class="content_title">
              <h3>
                <a>{{ $activity->title }}</a>
              </h3>
            </div>
            <div class="product_post_meta">
              <span class="meta_date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $activity->date_time }}</span>
              
              <span class="meta_date" style="float:right;"><i class="fa fa-briefcase" aria-hidden="true"></i> {{ $activity->types->name_bn }}</span>
            </div>
            <div class="product_desc">{!! $activity->description !!}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section Product AREA -->
@endsection
