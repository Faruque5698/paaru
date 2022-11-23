@extends('frontend.layouts.master')

@section('title', 'Gallery')

@section('content')
<style type="text/css">
  .tz-gallery .thumbnail {
    padding: 5px, 0px, 0px, 0px;
    margin-bottom: 30px;
    background-color: #fff;
    border-radius: 4px;
    border: none;
    transition: 0.15s ease-in-out;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

center {
    display: block;
    text-align: -webkit-center;
    padding-top: 10px;
}

a, a:hover, a:focus, a:active {
    text-decoration: none;
    /*-webkit-transition-duration: 500ms;*/
    /*transition-duration: 500ms;*/
    /*font-weight: 400;*/
    outline: none;
}
.gallery-cover-image {
    height: 143px;
}
.caption {
  padding: 10px 7px 5px 7px;
  text-align: center;
}
.caption a {
  /*font-size: 18px;*/
/*  padding: 2px 0px 2px 0px;
  background: #00adee;*/
  /*text-align: center;*/
}
.caption a h3 {
  font-size: 18px;
  padding: 2px 0px 2px 0px;
  background: #546E7A;
  color: white;
}
.caption p {
  color: #7b7d7d;
  font-size: 14px;
  /*text-align: center;*/
}
</style>
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Section Activity AREA -->
<section class="product" id="product">
  <div class="container">

    <div class="tz-gallery">
      <div class="row">
      @if($galleries->count() > 0)


@foreach ($galleries as $key => $gallery)
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="thumbnail">
            <center>
                <a href="{{ route('frontend.gallery_details', $gallery) }}">
                    <img class="gallery-cover-image" src="{{asset('assets/images/gallery/' . $gallery->cover_img)}}" alt="Gallery Image" style="max-width:100%;">
                </a>
            </center>
            <div class="caption">
                <a href="{{ route('frontend.gallery_details', $gallery) }}" ><h3>{{$gallery->gallery_name}}</h3></a>
            </div>
        </div>
        </div>
@endforeach


      @endif

      </div>
    </div>
    {{--<div class="row mt-5 activity-pagi">
      <div class="col-sm-12">
        <nav aria-label="Page navigation example">
          {{ $activities->links("pagination::bootstrap-4") }}
        </nav>
      </div>
    </div>--}}
  </div>
</section>
<!-- End Section Product AREA -->
@endsection
