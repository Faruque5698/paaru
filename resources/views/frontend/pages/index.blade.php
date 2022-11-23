@inject('home_page', 'App\Services\HomePageServices')


@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
<!-- Start Section Main Slider -->
<section class="main-slider">
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach($home_page->four_slider() as $key => $slider)
        <li data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}" class="@if($key == 0) {{ 'active' }} @endif"></li>
        @endforeach
      </ol>
      <div class="carousel-inner">
        @foreach($home_page->four_slider() as $key => $slider)
        <div class="carousel-item @if($key == 0) {{ 'active' }} @endif">
          <div src="" class="d-block w-100 slider-bg-img" alt="Slider Image">
            <img src="{{ asset('assets/images/sliders/'.$slider->photo) }}" alt="Slider Images">
          </div>
          <div class="sldr-img-cover"></div>
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <h2>
                <span>{{ $slider->first_slogan }}</span>
              </h2>
              <h4>
                <span>{{ $slider->second_slogan }}</span>
              </h4>
              <!-- <p class="text-center mt-4"><a href="" class="btn btn-outline-warning my-2 my-sm-0" type="submit">Join Now !</a>
              </p> -->
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span
        class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a
        class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> <span
        class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
      </div>
    </div>
  </section>
  <!-- End Section Main Slider -->
  <!-- Section About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="section-header">
            <h2>About Us</h2>
            <p class="">
              {{ $home_page->about_us()->slogan }}
            </p>
            <hr class="title-hr">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 service-des">
          <div class="about-des">
            <!-- <h3>Contrary to popular belief, Lorem Ipsum is not simply random text.</h3> -->
            <p>
              {!! str_limit(strip_tags($home_page->about_us()->about_bls), 600) !!}
            </p>
            <a href="{{ route('frontend.about') }}" class="btn mb-3">Read More
              <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </a>
            <a href="{{ route('frontend.join_member') }}" class="btn mb-3">Join Us
              <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="hidden-xs col-md-6 service-des wow fadeInUp" data-wow-duration="1s">
          <div class="about-image">
            <img src="{{ asset('assets/images/aboutus/'.$home_page->about_us()->image) }}" alt="About Image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section About -->
<!-- Section Activity AREA -->
  <section class="product" id="product">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="section-header">
            <h2>{{ $home_page->about_us()->activity_name }}</h2>
            <p class="">
              {!! $home_page->about_us()->activity_message !!}
            </p>
            <hr class="title-hr">
          </div>
        </div>
      </div>
      <div class="row">

        @foreach($home_page->activities() as $activity)
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

      </div>
    </div>
  </section>
  <!-- End Section Product AREA -->
<!-- Section Event & Gallery -->
  <section class="event-gallery">
    <div class="container">
      <div class="row">

        <!-- Start Event -->
        <div class="col-md-5">
          <h3 class="eg-main-title">Upcomming Events</h3>
          <div class="event-list">

            @foreach($home_page->events() as $key=>$event)
            <!-- event box -->
            <div class="event-box">
              <div class="event-date">
                <span class="e-date">{{ date("d",strtotime($event->date_time))}}</span>
                <span class="e-month">{{ date("M",strtotime($event->date_time))}}</span>
              </div>
              <div class="event-details">
                <h4 class="event-title"><a href="{{ route('frontend.event_details', $event->id) }}">{{ $event->title }}</a></h4>
                <span class="event-time">
                  <i class="fa fa-clock-o" aria-hidden="true"></i> {{ date('h:i A', strtotime($event->date_time)) }}
                </span>
                <span class="event-time">
                  <a href="{{ route('frontend.event_details', $event->id) }}" title="Bangladesh Polytechnic Institute"><i class="fa fa-map-marker"
                    aria-hidden="true"></i>{{ $event->place }}</a>
                  </span>
                  <p class="event-description">{!! str_limit(strip_tags($event->description), 150) !!}</p>
                </div>
              </div>
              <!-- End event box -->
              @endforeach
              <a href="{{ route('frontend.event_list') }}" class="btn mb-3">All Events
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <!-- End Event -->

          <!-- Start Gallery -->
          <div class="col-md-7">
            <h3 class="eg-main-title">Photo Gallery</h3>
            <div class="photo-gallery">
              <div class="tz-gallery">
                <div class="row">


                  <div class="panel-body">
                    <ul class="row list-unstyled photo_gallery_list" id="lightgallery">
                      @foreach($home_page->recentImage() as $key=>$image)
                    
                      <li class="col-sm-4" data-src="{{asset('assets/images/photo-gallery/'.$image->image_path)}}" data-sub-html="<p></p>">
                        <a href="#">
                          <div class="gallery_img img-thumbnail">
                            <center>
                              <img class="" src="{{asset('assets/images/photo-gallery/'.$image->image_path)}}" style="max-width: 100%; height: 135px;" />
                              <div class="caption_icon"><i class="fa fa-search"></i></div>
                            </center>
                          </div>
                        </a>
                      </li>
                      @endforeach
                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- End  Gallery -->

        </div>
      </div>
    </section>
    <!-- Section Event -->
@endsection
