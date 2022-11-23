@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }}
@stop

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.dashboard')!!}"><i class="icon-speedometer"></i> Dashboard</a></li>
<li class="breadcrumb-item"><a href='{!!route("backend.$route_path.index")!!}'><i class="{{ $module_icon }}"></i> {{ $module_title }}</a></li>
<li class="breadcrumb-item active"> {{ $module_action }}</li>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-8">
        <h4 class="card-title mb-0">
          <i class="{{ $module_icon }}"></i> {{ $module_title }} <small class="text-muted">{{ $module_action }}</small>
        </h4>
        <div class="small text-muted">
          {{ title_case($module_name) }} Management Dashboard
        </div>
      </div>
      <!--/.col-->
      <div class="col-4">
        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
          <a href="{{ route("backend.$route_path.index") }}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="{{ $module_title }} List"><i class="fas fa-list-ul"></i> List</a>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <hr>

    <div class="row mt-4">
      <div class="col">

        {{ html()->form('POST', route("backend.$route_path.store"))->class('form')->attribute('enctype', 'multipart/form-data')->class('form-horizontal')->open() }}
        @include ("$module_name::backend.$module_name.form")

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              {{ html()->button($text = "<i class='fas fa-save'></i> " . ucfirst($module_action) . "", $type = 'submit')->class('btn btn-success') }}
            </div>
          </div>
          <div class="col-6">
            <div class="float-right">
              <div class="form-group">
                <a type="button" class="btn btn-warning" href="{{ route("backend.$module_name.index") }}"><i class="fas fa-reply"></i> Cancel</a>
              </div>
            </div>
          </div>
        </div>

        {{ html()->form()->close() }}

      </div>
    </div>
  </div>

  <div class="card-footer">
    <div class="row">
      <div class="col">

      </div>
    </div>
  </div>
</div>

@stop


@push ('after-scripts')
<script type="text/javascript" src="{{ asset('assets/backend/plugins/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
  CKEDITOR.replace('about_bls', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
  CKEDITOR.replace('activity_message', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
</script>


<!-- Image Size Validation -->
<script>
  $('input[type="submit"]').prop("disabled", true);
  var a=0;
//binds to onchange event of your input field
$('#image').bind('change', function() {

  if ($('input:submit').attr('disabled',false)){
    $('input:submit').attr('disabled',true);
  }

  var ext = $('#image').val().split('.').pop().toLowerCase();

  if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
    $('#format_error').slideDown("slow");
    $('#size_error').slideUp("slow");
    a=0;
  }else{
    var picsize = (this.files[0].size);

    if (picsize > 300000){
      $('#size_error').slideDown("slow");
      a=0;
    }else{
      a=1;
      $('#size_error').slideUp("slow");
    }
    $('#format_error').slideUp("slow");
    if (a==1){
      $('input:submit').attr('disabled',false);
    }
  }

});

</script>
<!-- Image Size Validation -->

<!-- Script for image size validation -->
<script type="text/javascript">

  var _URL = window.URL || window.webkitURL;

  $('#image').change(function () {

    var image = $(this)[0].files[0];

    img = new Image();
    var imgwidth = 0;
    var imgheight = 0;
    var minwidth = 684;
    var minheight = 400;
    var maxwidth = 800;
    var maxheight = 468;

    img.src = _URL.createObjectURL(image);
    img.onload = function() {
      imgwidth = this.width;
      imgheight = this.height;

      if(imgwidth > maxwidth || imgheight > maxheight){
        m = 0;
        $('#dimension_error').slideDown("slow");
      }else{
        if(imgwidth > minwidth || imgheight > minheight){
          m = 1;
          $('#dimension_error').slideUp("slow");
        }
        else {
          m = 0;
          $('#dimension_error').slideDown("slow");
        }
      }

      if (m==1){
        $('#submit').attr('disabled',false);
      }else{
        $('#submit').attr('disabled',true);
      }
    }

  });

</script>
<!-- Script for image size validation -->



<!-- script for image place holder -->
<script type="text/javascript">

  $(document).ready(function(){

    $("#image").change(function(){

      showImage(this);

    });

    function showImage(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#show')
          .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

  });

</script>
<!-- script for image place holder -->
@endpush
