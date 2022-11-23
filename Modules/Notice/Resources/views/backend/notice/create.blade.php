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
            <div class="form-group">
              @php
              $field_name = 'title';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "required";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              @php
              $field_name = 'date_time';
              $field_lable = 'Select Date';
              $field_placeholder = $field_lable;
              $required = "required";
              @endphp
              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              <div class="input-group date datetime" id="{{$field_name}}" data-target-input="nearest">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
                <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-6">
            <div class="form-group">

              @php
              $field_name = 'pdf_file';
              $field_lable = 'Upload';
              $field_placeholder = $field_lable;
              $required = "required";
              @endphp

              {{
                html()->label($field_lable, $field_name)
              }}

              {!! fielf_required($required) !!}
              {{ html()->file($field_name)->class('form-control')->id($field_name)->attributes(["$required"]) }}

              <p style="color:#FF0000;">
                <strong>NB.</strong> Upload pdf only.
              </p>

            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <iframe src="http://placehold.it/1920x720" width="490" height="200" id="show"></iframe>
              <!-- <img id="show" src="http://placehold.it/180" alt="your image" width="180" height="180"/> -->
            </div>
          </div>

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

<script type="text/javascript">
$(function() {
  $('.datetime').datetimepicker({
    format: 'YYYY-MM-DD',
    icons: {
      time: 'far fa-clock',
      date: 'far fa-calendar-alt',
      up: 'fas fa-arrow-up',
      down: 'fas fa-arrow-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right',
      today: 'far fa-calendar-check',
      clear: 'far fa-trash-alt',
      close: 'fas fa-times'
    }
  });
});
</script>

<!-- script for image place holder -->
<script type="text/javascript">

$(document).ready(function(){

  $("#pdf_file").change(function(){

    showPdf(this);

  });

  function showPdf(input) {

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
