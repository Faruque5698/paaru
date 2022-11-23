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

        {{ html()->form('POST', route("backend.$module_name.store"))->class('form')->attribute('enctype', 'multipart/form-data')->class('form-horizontal')->open() }}

        <!-- Form Start -->
        <div class="row">

          <div class="col-6">
            <div class="col-12">
            <div class="form-group">
              @php
              $field_name = 'gallery_name';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "required";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            </div>
          </div>
        <!-- </div> -->
        <div class="col-12">
            <div class="form-group">

              @php
              $field_name = 'cover_img';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "required";
              @endphp

              {{
                html()->label($field_lable, $field_name)
              }}

              {!! fielf_required($required) !!}
              {{ html()->file($field_name)->class('form-control')->id($field_name)->attributes(["$required"]) }}

                <p class="text-primary">
                  Maximum image dimension is height:1200 and width:700.
                </p>
                <p id="format_error" style="display:none; color:#FF0000;">
                  Invalid Image Format! Image Format Must Be JPG, JPEG, PNG.
                </p>
                <p id="size_error" style="display:none; color:#FF0000;">
                  Maximum File Size Limit is 2MB.
                </p>
               

            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <center>
              <img src="http://placehold.it/1200x700"  id="show" style="max-width: 100%;" />
              <!-- <img id="show" src="http://placehold.it/180" alt="your image" width="180" height="180"/> -->
              </center>
            </div>
          </div>

          
        </div>
        <div class="col-6">
          <div class="col-12">
            @php
              $field_name = 'description';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "required";
              @endphp

              {{
                html()->label($field_lable, $field_name)
              }}

              {!! fielf_required($required) !!}

              {{
                html()->textarea($field_name)
                ->placeholder($field_placeholder)
                ->class('form-control')
                ->attribute('rows',7)
                ->attributes(["$required"])
              }}
          </div>
        </div>
</div>
        <div class="row">

          

        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              {{ html()->button($text = "<i class='fas fa-save'></i> " . ucfirst('Save') . "", $type = 'submit')->class('btn btn-success') }}
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
        <!-- Form End -->

      </div>
    </div>
  </div>

</div>

@stop

@push('after-styles')
<!-- Date Time Picker -->
<link rel="stylesheet" href="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/css/tempusdominus-bootstrap-4.min.css') }}" />
@endpush

@push ('after-scripts')
<!-- Date Time Picker & Moment Js-->
<script type="text/javascript" src="{{ asset('assets/backend/vendor/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/js/tempusdominus-bootstrap-4.min.js') }}"></script>


<!-- script for image place holder -->
<script type="text/javascript">

$(document).ready(function(){

  $("#cover_img").change(function(){

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
$('#cover_img').bind('change', function() {

  if ($('input:submit').attr('disabled',false)){
    $('input:submit').attr('disabled',true);
  }

  var ext = $('#cover_img').val().split('.').pop().toLowerCase();

  if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
    $('#format_error').slideDown("slow");
    $('#size_error').slideUp("slow");
    a=0;
  }else{
    var picsize = (this.files[0].size);

    if (picsize > 2000000){
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

@endpush
