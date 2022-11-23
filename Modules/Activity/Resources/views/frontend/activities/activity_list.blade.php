@extends('frontend.layouts.master')

@section('title', 'Activity')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Activity</li>
      </ol>
    </nav>
  </div>
</section>
<!-- Section Activity AREA -->
<section class="product" id="product">
  <div class="container">
    <div class="row">
      @if($activities->count() > 0)
      @foreach($activities as $key=>$activity)
      <!-- SINGLE product ITEM -->
      <div class="col-md-4">
        <div class="single_product">
          <div class="product_thumb">
            <a href="{{ route('frontend.activity_details', $activity->id) }}">
              <img src="{{ asset('assets/images/activities/'.$activity->image) }}" alt="" />
            </a>
          </div>
          <!-- product CONTENT -->
          <div class="product_content">
            <div class="content_title">
              <h3>
                <a href="{{ route('frontend.activity_details', $activity->id) }}">{{ $activity->title }} </a>
              </h3>
            </div>
            <div class="product_post_meta">
              <span class="meta_date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $activity->date_time }}</span>
              <span class="meta_date" style="float:right;"><i class="fa fa-briefcase" aria-hidden="true"></i> {{ $activity->types->name_bn }}</span>
            </div>
            <div class="product_desc">
              <p>{!! str_limit(strip_tags($activity->description), 165) !!}</p>
            </div>
            <div class="product_readmore">
              <a href="{{ route('frontend.activity_details', $activity->id) }}">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- SINGLE product ITEM -->
      @endforeach
      @endif
    </div>
    <div class="row mt-5 activity-pagi">
      <div class="col-sm-12">
        <nav aria-label="Page navigation example">
          {{ $activities->links("pagination::bootstrap-4") }}
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- End Section Product AREA -->
@endsection
