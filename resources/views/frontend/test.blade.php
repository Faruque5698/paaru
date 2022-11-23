@extends('frontend.layouts.master')

@section('content')
<!-- Section Main Slider -->
<section class="main-slider">
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div src="" class="d-block w-100 slider-bg-img" alt="Slider Image"></div>
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <h2>
                <span>We Are Paaru International</span>
              </h2>
              <h4>Let's Make a Better Business</h4>
              <p class="text-center mt-4"><a class="btn btn-outline-warning my-2 my-sm-0" type="submit">Join Now !</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div src="" class="d-block w-100 slider-bg-img sbi-1" alt="Slider Image"></div>
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <h2>
                <span>We Are Paaru International</span>
              </h2>
              <h4>Meet with us to success dream business</h4>
              <p class="text-center mt-4"><a class="btn btn-outline-warning my-2 my-sm-0" type="submit">Donate Now</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div src="" class="d-block w-100 slider-bg-img sbi-2" alt="Slider Image"></div>
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <h2>
                <span>We Are Paaru International</span>
              </h2>
              <h4>Proper Business for success</h4>
              <p class="text-center mt-4"><a class="btn btn-outline-warning my-2 my-sm-0" type="submit">Join Now !</a>
            </div>
          </div>
        </div>
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
          <h2>Our Story</h2>
          <p class="">The name of the association shall be PHYSICS ALUMNI ASSOCIATION, RAJSHAHI UNIVERSITY (PAARU).</p>
          <hr class="title-hr">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 service-des">
        <div class="about-des">
          <!-- <h3>Contrary to popular belief, Lorem Ipsum is not simply random text.</h3> -->
          <p>The objectives of this alumni association are to build active communication network among all the present and ex-students of the Department of Physics through various programs and to contribute in the academic development of the Physics Department and economic development of the country through the dissemination of new concepts in the relevant field.</p>
          <p>To build up relationship among the members of the organization through educational, cultural, social and welfare programs.</p>
          <a href="#service" class="btn mb-3">Read More
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </a>
          <a href="#service" class="btn mb-3">Join Us
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="hidden-xs col-md-6 service-des wow fadeInUp" data-wow-duration="1s">
        <div class="about-image">
          <img src="{{ asset('assets/images/about-img.jpg') }}" alt="About Image">
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
          <h2>Our Activity</h2>
          <p class="">Nullam tincidunt non orci nec aliquet. Donec eget metus in felis mollis fermentum. Nunc mollis
            enim at rhoncus malesuada.</p>
          <hr class="title-hr">
        </div>
      </div>
    </div>
    <div class="row">
      <!-- SINGLE product ITEM -->
      <div class="col-md-4">
        <div class="single_product">
          <div class="product_thumb">
            <a href="single-product.html">
              <img src="{{ asset('assets/images/activities/1.jpg')}}" alt="" />
            </a>
          </div>
          <!-- product CONTENT -->
          <div class="product_content">
            <div class="content_title">
              <h3>
                <a href="single-product.html">Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis
                  et augue. </a>
              </h3>
            </div>
            <div class="product_post_meta">
              <span class="meta_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20 SEP 2019</span>
            </div>
            <div class="product_desc">
              <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et
                dolore magna aliqua. Ut enim asan minim veniam, quis nostrud
              </p>
            </div>
            <div class="product_readmore">
              <a href="single-product.html">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- SINGLE product ITEM -->
      <div class="col-md-4">
        <div class="single_product">
          <div class="product_thumb">
            <a href="single-product.html">
              <img src="{{ asset('assets/images/activities/4.jpg')}}" alt="" />
            </a>
          </div>
          <!-- product CONTENT -->
          <div class="product_content">
            <div class="content_title">
              <h3>
                <a href="single-product.html">Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis
                  et augue. </a>
              </h3>
            </div>
            <div class="product_post_meta">
              <span class="meta_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20 SEP 2019</span>
            </div>
            <div class="product_desc">
              <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et
                dolore magna aliqua. Ut enim asan minim veniam, quis nostrud
              </p>
            </div>
            <div class="product_readmore">
              <a href="single-product.html">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- SINGLE product ITEM -->
      <div class="col-md-4">
        <div class="single_product">
          <div class="product_thumb">
            <a href="single-product.html">
              <img src="{{ asset('assets/images/activities/2.jpg') }}" alt="" />
            </a>
          </div>
          <!-- product CONTENT -->
          <div class="product_content">
            <div class="content_title">
              <h3>
                <a href="single-product.html">Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis
                  et augue. </a>
              </h3>
            </div>
            <div class="product_post_meta">
              <span class="meta_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20 SEP 2019</span>
            </div>
            <div class="product_desc">
              <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et
                dolore magna aliqua. Ut enim asan minim veniam, quis nostrud.
              </p>
            </div>
            <div class="product_readmore">
              <a href="single-product.html">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- SINGLE product ITEM -->
      <div class="col-md-4">
        <div class="single_product">
          <div class="product_thumb">
            <a href="single-product.html">
              <img src="{{ asset('assets/images/activities/5.jpg') }}" alt="" />
            </a>
          </div>
          <!-- product CONTENT -->
          <div class="product_content">
            <div class="content_title">
              <h3>
                <a href="single-product.html">Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis
                  et augue. </a>
              </h3>
            </div>
            <div class="product_post_meta">
              <span class="meta_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20 SEP 2019</span>
            </div>
            <div class="product_desc">
              <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et
                dolore magna aliqua. Ut enim asan minim veniam, quis nostrud.
              </p>
            </div>
            <div class="product_readmore">
              <a href="single-product.html">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- SINGLE product ITEM -->
      <div class="col-md-4">
        <div class="single_product">
          <div class="product_thumb">
            <a href="single-product.html">
              <img src="{{ asset('images/activities/3.jpg') }}" alt="" />
            </a>
          </div>
          <!-- product CONTENT -->
          <div class="product_content">
            <div class="content_title">
              <h3>
                <a href="single-product.html">Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis
                  et augue. </a>
              </h3>
            </div>
            <div class="product_post_meta">
              <span class="meta_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20 SEP 2019</span>
            </div>
            <div class="product_desc">
              <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et
                dolore magna aliqua. Ut enim asan minim veniam, quis nostrud.
              </p>
            </div>
            <div class="product_readmore">
              <a href="single-product.html">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- SINGLE product ITEM -->
      <div class="col-md-4">
        <div class="single_product">
          <div class="product_thumb">
            <a href="single-product.html">
              <img src="{{ asset('assets/images/activities/6.jpg') }}" alt="" />
            </a>
          </div>
          <!-- product CONTENT -->
          <div class="product_content">
            <div class="content_title">
              <h3>
                <a href="single-product.html">Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis
                  et augue. </a>
              </h3>
            </div>
            <div class="product_post_meta">
              <span class="meta_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20 SEP 2019</span>
            </div>
            <div class="product_desc">
              <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et
                dolore magna aliqua. Ut enim asan minim veniam, quis nostrud.
              </p>
            </div>
            <div class="product_readmore">
              <a href="single-product.html">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section Product AREA -->


<!-- Section Services -->
<section id="service">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="section-header">
          <h2>What We Dow</h2>
          <p class="">Nullam tincidunt non orci nec aliquet. Donec eget metus in felis mollis fermentum. Nunc mollis
            enim at rhoncus malesuada.</p>
          <hr class="title-hr">
        </div>
      </div>
    </div>
    <div class="row text-center">

      <div class="col-sm-6 col-md-4 service-wrap">
        <div class="service-box">
          <div class="service-icon">
            <i class="ti-shopping-cart" aria-hidden="true"></i>
          </div>
          <div class="box-content">
            <h3>Suspendisse potenti.</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores.</p>
            <a href="#" class="page-scroll">Learn More
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 service-wrap">
        <div class="service-box">
          <div class="service-icon">
            <i class="ti-layout" aria-hidden="true"></i>
          </div>
          <div class="box-content">
            <h3>Suspendisse potenti.</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores.</p>
            <a href="#" class="page-scroll">Learn More
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 service-wrap">
        <div class="service-box">
          <div class="service-icon">
            <i class="ti-bar-chart" aria-hidden="true"></i>
          </div>
          <div class="box-content">
            <h3>Suspendisse potenti.</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores.</p>
            <a href="#" class="page-scroll">Learn More
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 wow fadeInUp service-wrap" data-wow-duration="1s">
        <div class="service-box">
          <div class="service-icon">
            <i class="ti-ruler-pencil" aria-hidden="true"></i>
          </div>
          <div class="box-content">
            <h3>Suspendisse potenti.</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores.</p>
            <a href="#" class="page-scroll">Learn More
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 wow fadeInUp service-wrap" data-wow-duration="1s">
        <div class="service-box">
          <div class="service-icon">
            <i class="ti-settings" aria-hidden="true"></i>
          </div>
          <div class="box-content">
            <h3>Suspendisse potenti.</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores.</p>
            <a href="#" class="page-scroll">Learn More
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 wow fadeInUp service-wrap" data-wow-duration="1s">
        <div class="service-box">
          <div class="service-icon">
            <i class="ti-shopping-cart-full" aria-hidden="true"></i>
          </div>
          <div class="box-content">
            <h3>Suspendisse potenti.</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores.</p>
            <a href="#" class="page-scroll">Learn More
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section Service -->

<!-- Section Event & Gallery -->
<section class="event-gallery">
  <div class="container">
    <div class="row">

      <!-- Start Event -->
      <div class="col-md-5">
        <h3 class="eg-main-title">Upcomming Events</h3>
        <div class="event-list">
          <!-- event box -->
          <div class="event-box">
            <div class="event-date">
              <span class="e-date">03</span>
              <span class="e-month">OCT</span>
            </div>
            <div class="event-details">
              <h4 class="event-title"><a href="#">Integer aliquet efficitur sem a pulvinar.</a></h4>
              <span class="event-time">
                <i class="fa fa-clock-o" aria-hidden="true"></i> 10.00AM - 18.00PM
              </span>
              <span class="event-time">
                <a href="#" title="Bangladesh Polytechnic Institute"><i class="fa fa-map-marker"
                    aria-hidden="true"></i> Bangladesh Polytechnic Institute</a>
              </span>
              <p class="event-description">Fusce sit amet ornare tortor. Nulla dictum fermentum tellus, id iaculis
                diam pellentesque et.</p>
            </div>
          </div>
          <!-- End event box -->
          <!-- event box -->
          <div class="event-box">
            <div class="event-date">
              <span class="e-date">03</span>
              <span class="e-month">OCT</span>
            </div>
            <div class="event-details">
              <h4 class="event-title"><a href="#">Integer aliquet efficitur sem a pulvinar.</a></h4>
              <span class="event-time">
                <i class="fa fa-clock-o" aria-hidden="true"></i> 10.00AM - 18.00PM
              </span>
              <span class="event-place">
                <a href="#" title="Bangladesh Polytechnic Institute"><i class="fa fa-map-marker"
                    aria-hidden="true"></i> Bangladesh Polytechnic Institute</a>
              </span>
              <p class="event-description">Fusce sit amet ornare tortor. Nulla dictum fermentum tellus, id iaculis
                diam pellentesque et.</p>
            </div>
          </div>
          <!-- end event box -->
          <!-- event box -->
          <div class="event-box">
            <div class="event-date">
              <span class="e-date">03</span>
              <span class="e-month">OCT</span>
            </div>
            <div class="event-details">
              <h4 class="event-title"><a href="#">Integer aliquet efficitur sem a pulvinar.</a></h4>
              <span class="event-time">
                <i class="fa fa-clock-o" aria-hidden="true"></i> 10.00AM - 18.00PM
              </span>
              <span class="event-place">
                <a href="#" title="Bangladesh Polytechnic Institute"><i class="fa fa-map-marker"
                    aria-hidden="true"></i> Bangladesh Polytechnic Institute</a>
              </span>
              <p class="event-description">Fusce sit amet ornare tortor. Nulla dictum fermentum tellus, id iaculis
                diam pellentesque et.</p>
            </div>
          </div>
          <!-- end event box -->
          <!-- event box -->
          <div class="event-box">
            <div class="event-date">
              <span class="e-date">03</span>
              <span class="e-month">OCT</span>
            </div>
            <div class="event-details">
              <h4 class="event-title"><a href="#">Integer aliquet efficitur sem a pulvinar.</a></h4>
              <span class="event-time">
                <i class="fa fa-clock-o" aria-hidden="true"></i> 10.00AM - 18.00PM
              </span>
              <span class="event-place">
                <a href="#" title="Bangladesh Polytechnic Institute"><i class="fa fa-map-marker"
                    aria-hidden="true"></i> Bangladesh Polytechnic Institute</a>
              </span>
              <p class="event-description">Fusce sit amet ornare tortor. Nulla dictum fermentum tellus, id iaculis
                diam pellentesque et.</p>
            </div>
          </div>
          <!-- end event box -->
          <a href="#" class="btn mb-3">All Events
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <!-- End Start Event -->

      <!-- Start Gallery -->
      <div class="col-md-7">
        <h3 class="eg-main-title">Photo Gallery</h3>
        <div class="photo-gallery">
          <div class="tz-gallery">
            <div class="row">


                <div class="panel-body">
                  <ul class="row list-unstyled photo_gallery_list" id="lightgallery">

                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/1.jpg') }}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/1.jpg')}}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>
                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/2.jpg')}}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/2.jpg')}}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>
                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/5.jpg') }}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/5.jpg')}}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>

                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/6.jpg') }}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/6.jpg') }}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>

                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/7.jpg') }}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/7.jpg') }}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>
                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/8.jpg')}}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/8.jpg')}}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>
                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/9.jpg')}}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/9.jpg')}}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>
                    <li class="col-sm-4" data-src="{{asset('assets/images/photo-gallery/10.jpg')}}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{asset('assets/images/photo-gallery/10.jpg')}}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>
                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/12.jpg')}}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/12.jpg')}}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>
                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/13.jpg') }}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/13.jpg') }}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>
                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/14.jpg') }}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/14.jpg') }}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>
                    <li class="col-sm-4" data-src="{{ asset('assets/images/photo-gallery/15.jpg') }}" data-sub-html="<p></p>">
                      <a href="#">
                        <div class="gallery_img">
                          <img class="img-thumbnail" src="{{ asset('assets/images/photo-gallery/15.jpg') }}" />
                          <div class="caption_icon"><i class="fa fa-search"></i></div>
                        </div>
                      </a>
                    </li>

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
