@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }}
@stop

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.dashboard')!!}"><i class="icon-speedometer"></i> Dashboard</a></li>
<li class="breadcrumb-item"><a href='{!!route("backend.$module_name.index")!!}'><i class="{{ $module_icon }}"></i> {{ $module_title }}</a></li>
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
          <a href="{{ route("backend.$module_name.index") }}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="{{ $module_title }} List"><i class="fas fa-list-ul"></i> List</a>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <hr>

    <div class="row mt-4">
      <div class="col">

        <form class="" action="{{ route('backend.sliders.update', $slider) }}" method="post" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT') }}

          <!-- Form Start -->
          <div class="row">

            <div class="col-6">
              <div class="col-12">
                <div class="form-group">
                  @php
                  $field_name = 'title';
                  $field_lable = label_case($field_name);
                  $field_placeholder = $field_lable;
                  $required = "required";
                  @endphp

                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  {{ html()->text($field_name)->value($slider->$field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  @php
                  $field_name = 'first_slogan';
                  $field_lable = label_case($field_name);
                  $field_placeholder = $field_lable;
                  $required = "required";
                  @endphp

                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  {{ html()->text($field_name)->value($slider->$field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  @php
                  $field_name = 'second_slogan';
                  $field_lable = label_case($field_name);
                  $field_placeholder = $field_lable;
                  $required = "required";
                  @endphp

                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  {{ html()->text($field_name)->value($slider->$field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                </div>
              </div>

            </div>

            <div class="col-6">
              <div class="form-group">

                @php
                $field_name = 'photo';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $required = "";
                @endphp

                {{
                  html()->label($field_lable, $field_name)
                }}

                {!! fielf_required($required) !!}
                {{ html()->file($field_name)->class('form-control')->attributes(["$required"]) }}

                <p class="text-primary">
                  Maximum image dimension is width:1920 and height:750.
                </p>
                
                <p id="format_error" style="display:none; color:#FF0000;">
                  Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                </p>
                <p id="size_error" style="display:none; color:#FF0000;">
                  Maximum File Size Limit is 1MB.
                </p>
                <p id="dimension_error" style="display:none; color:#FF0000;">
                  Invalid image dimension. Maximum image dimension is width:1920px and height:750px.<br>
                  <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image" target="_blank">Link -1</a><span class="text-dark"> or </span>
                  <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>
                </p>
                <p id="dimension_error1" style="display:none; color:#FF0000;">
                  Invalid image dimension. Minimum image dimension is width:1800px and height:703px .<br>
                  <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image" target="_blank">Link -1</a><span class="text-dark"> or </span>
                  <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>
                </p>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <img id="show" src="{{ $slider->photo ? asset('assets/images/sliders/' . $slider->photo) : 'http://placehold.it/350x300/0000FF/808080'}}" alt="your image" width="490" height="200"/>
                </div>
              </div>
            </div>

          </div>

          <div class="row">

            

          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                {{ html()->button($text = "<i class='fas fa-pen-square'></i> " . ucfirst($module_action) . "", $type = 'submit')->class('btn btn-success') }}
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
        </form>
        <!-- Form End -->

      </div>
    </div>
  </div>

</div>

@stop

{{--@push ('after-scripts')
<script>
  $('input[type="submit"]').prop("disabled", true);
  var a=0;
//binds to onchange event of your input field
$('#photo').bind('change', function() {

  if ($('input:submit').attr('disabled',false)){
    $('input:submit').attr('disabled',true);
  }

  var ext = $('#photo').val().split('.').pop().toLowerCase();
  if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
    $('#format_error').slideDown("slow");
    $('#size_error').slideUp("slow");
    a=0;
  }else{
    var picsize = (this.files[0].size);

    if (picsize > 1000000){
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
@endpush--}}

@push ('after-scripts')
<!-- Date Time Picker & Moment Js-->
<script type="text/javascript" src="{{ asset('assets/backend/vendor/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/js/tempusdominus-bootstrap-4.min.js') }}"></script>



<!-- script for image place holder -->
<script type="text/javascript">

  $(document).ready(function(){

    $("#photo").change(function(){

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


<!-- Image Size Validation -->
<script>
  $('input[type="submit"]').prop("disabled", true);
  var a=0;
//binds to onchange event of your input field
$('#photo').bind('change', function() {

  if ($('input:submit').attr('disabled',false)){
    $('input:submit').attr('disabled',true);
  }

  var ext = $('#photo').val().split('.').pop().toLowerCase();

  if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
    $('#format_error').slideDown("slow");
    $('#size_error').slideUp("slow");
    a=0;
  }else{
    var picsize = (this.files[0].size);

    if (picsize > 1000000){
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

  $('#photo').change(function () {

    var image = $(this)[0].files[0];

    img = new Image();
    var imgwidth = 0;
    var imgheight = 0;
    var minwidth = 1800;
    var minheight = 703;
    var maxwidth = 1920;
    var maxheight = 750;
    var ratio = 2.56;

    img.src = _URL.createObjectURL(image);
    img.onload = function() {
      imgwidth = this.width;
      imgheight = this.height;

      if(imgwidth > maxwidth || imgheight > maxheight){
        m = 0;
        $('#dimension_error').slideDown("slow");
        $('#dimension_error1').slideUp("slow");
      }else{
      // if(2.40 <= (imgwidth/imgheight) && (imgwidth/imgheight) <=2.70 ){
        if(imgwidth > minwidth || imgheight > minheight){
          m = 1;
          $('#dimension_error').slideUp("slow");
          $('#dimension_error1').slideUp("slow");
        }
        else 
        {
          m = 0;
          $('#dimension_error1').slideDown("slow");
          $('#dimension_error').slideUp("slow");
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

@endpush
