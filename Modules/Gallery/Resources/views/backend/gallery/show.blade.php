@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }}
@stop

@push ('after-styles')
<!-- Modal CSS -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/custom_css/modal.css') }}">
@endpush

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.dashboard')!!}"><i class="icon-speedometer"></i> Dashboard</a></li>
<li class="breadcrumb-item"><a href='{!!route("backend.$module_name.index")!!}'><i class="{{ $module_icon }}"></i> {{ $module_title }}</a></li>
<li class="breadcrumb-item active"> {{ $module_action }}</li>
@stop

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
  background: #00adee;
  color: white;
}
.caption p {
  color: #7b7d7d;
  font-size: 14px;
  /*text-align: center;*/
}

.form  {
  position: absolute;
  bottom: 20px;
  right: 10px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  /*background-color: #555;*/
  color: white;
  /*font-size: 16px;*/
  /*padding: 12px 24px;*/
  border: none;
  cursor: pointer;
  /*border-radius: 5px;*/
  text-align: center;
}
</style>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-8">
        <h4 class="card-title mb-0">
          <i class="{{ $module_icon }}"></i> {{ $module_title }} <small class="text-muted">{{ $module_action }}</small>
        </h4>
        <div class="small text-muted">
          {{ title_case($module_title) }} Management Dashboard
        </div>
      </div>
      <!--/.col-->
      <div class="col-4">
        <div class="float-right">
          <a href="{{ route("backend.$module_name.more", $gallery)}}" class="btn btn-success m-1 btn-sm" data-toggle="tooltip" title="Create New"><i class="fas fa-plus-circle"></i> Add</a>
          <a href="{{ route("backend.$module_name.index") }}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="{{ $module_title }} List"><i class="fas fa-list-ul"></i> List</a>

          <div class="btn-group" role="group" aria-label="Toolbar button groups">
            <div class="btn-group" role="group">
              <button id="btnGroupToolbar" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupToolbar">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-eye-slash"></i> View trash
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--/.col-->
    </div>
    <!--/.row-->
    <hr>

    <div>
      <center>
        <img src="{{ asset('assets/images/gallery/' . $gallery->cover_img) }}" class="img-fluid img-thumbnail" style="max-width:100%" alt="{{ $gallery->gallery_name }}">
      </center>
      <hr>
      <div class="text-justify text-center bg-info h4 p-3">
        {{ $gallery->gallery_name }}
      </div>
      <hr>
      <div class="text-justify">
        {!! $gallery->description !!}
      </div>
      <hr>
      <div class="tz-gallery">
      <div class="row">
        @foreach($gallery->photos as $key => $photo)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="thumbnail">
            <center>
                <img class="gallery-cover-image" src="{{asset('assets/images/photo-gallery/'.$photo->image_path)}}" alt="Gallery Image" style="max-width:100%;">
            </center>
            {{--<a class="btn btn-danger btn-sm" title="Delete" href="{{route('backend.gallery.moreImage', $photo)}}">
                  <span class="fas fa-trash"></span>
            </a>--}}
            
            <form class="form" action="{{ route('backend.gallery.moreImage', $photo) }}" method="POST" onsubmit="return confirm('Are you sure to delete this Photo ? ');" style="display: inline-block;">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <!-- <input type="submit" class="btn btn-xs btn-danger" value="a"> -->
              <button type="submit" class="btn btn-danger btn-sm" title="Delete"><span class="fas fa-trash"></span></button>
            </form>
          </div>
        </div>
@endforeach

      </div>
      </div>


    </div>

</div>

</div>
@stop

@push ('after-styles')

@endpush

@push ('after-scripts')


@endpush
