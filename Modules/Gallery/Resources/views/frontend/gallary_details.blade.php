
@extends('frontend.layouts.master')

@section('title', $gallery->gallery_name)

@section('content')
<style type="text/css">
  .services.titlebar {
    margin-bottom: 20px;
    margin-top: 25px;
    color: white;
    font-size: 20px;
    font-weight: 600;
    font-family: inherit;

  }
  .titlebar {
    background: #546E7A;
    margin-bottom: 10px;
    padding-left: 20px;
    padding-top: 8px;
    padding-bottom: 8px;
    box-shadow: 0px 4px 5px -1px#ccc;
    border-top: 1px solid #546E7A;
  }
  .product {
    padding-top: 8px!important;
  }
</style>
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('frontend.gallery') }}">Gallery</a></li>
        <li class="breadcrumb-item active" aria-current="page">Details</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Section Activity AREA -->
<section class="product" id="product">
  <div class="container">
    <h4 class="titlebar services text-justfy text-center">{{$gallery->gallery_name}}</h4>
    <div>
      <center>
        <img  src="{{ asset('assets/images/gallery/' . $gallery->cover_img) }}" class="img-fluid img-thumbnail" style="max-width:100%" alt="{{ $gallery->gallery_name }}" />

      </center>
    </div>
    @if($gallery->description)
    <div class="card mt-3">
      <div class="card-header text-white" style="background: #546E7A !important">

        <h4 class="services text-justfy text-center" style="color: #fff">Details</h4>
      </div>

      <div class="card-body">
        <div class="text-justify ">
          {!! $gallery->description !!}
        </div>
      </div>
    </div>
    @endif

@if($gallery->photos->count() > 0)
<p class="mt-3"></p>
    <!-- <h3 class="eg-main-title ">আরো ছবি</h3> -->
    <div class="photo-gallery">
      <div class="tz-gallery">
        <!-- <div class="row"> -->


          <div class="panel-body">
            <ul class="row list-unstyled photo_gallery_list" id="lightgallery">
              @foreach($gallery->photos as $key => $photo)
              <li class="col-sm-4" data-src="{{asset('assets/images/photo-gallery/'.$photo->image_path)}}" data-sub-html="<p></p>">
                <a href="#">
                  <div class="gallery_img img-thumbnail">
                    <center>
                    <img class="" src="{{asset('assets/images/photo-gallery/'.$photo->image_path)}}" style="max-width: 100%; height: 214px;" />
                    <div class="caption_icon"><i class="fa fa-search"></i></div>
                    </center>
                  </div>
                </a>
              </li>
              @endforeach

            </ul>
          </div>

        <!-- </div> -->
      </div>
    </div>
    @endif
  </div>
  <!-- End  Gallery -->
</section>
<!-- End Section Product AREA -->
@endsection
