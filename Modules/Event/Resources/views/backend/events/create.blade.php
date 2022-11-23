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

        @include ("$module_name::backend.$module_path.form")

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              {{ html()->button($text = "<i class='fas fa-save'></i> " . ucfirst('Save') . "", $type = 'submit')->id('submit')->class('btn btn-success') }}
            </div>
          </div>
          <div class="col-6">
            <div class="float-right">
              <div class="form-group">
                <a type="button" class="btn btn-warning" href="{{ route("backend.$route_path.index") }}"><i class="fas fa-reply"></i> Cancel</a>
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


@push('after-styles')
<!-- Date Time Picker -->
<link rel="stylesheet" href="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/css/tempusdominus-bootstrap-4.min.css') }}" />
@endpush


@push('after-scripts')
<!-- Date Time Picker & Moment Js-->
<script type="text/javascript" src="{{ asset('assets/backend/vendor/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- script for Activity Date Time pick -->
<script type="text/javascript">

$(function() {

  $('.datetime').datetimepicker({
    // change time formate option  hh:mm:ss
    format: 'YYYY-MM-DD hh:mm:ss',
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

  $('.ticketdatetime').datetimepicker({
    // change time formate option  hh:mm:ss
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
<!-- script for Activity Date Time pick -->

<script type="text/javascript" src="{{ asset('assets/backend/plugins/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
CKEDITOR.replace('description', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
</script>

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

    if (picsize > 500000){
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
  var maxwidth = 800;
  var maxheight = 480;

  img.src = _URL.createObjectURL(image);
  img.onload = function() {
    imgwidth = this.width;
    imgheight = this.height;

    if(imgwidth > maxwidth || imgheight > maxheight){
      m = 0;
      $('#dimension_error').slideDown("slow");
    }else{
      m = 1;
      $('#dimension_error').slideUp("slow");
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

<!-- Ticket Buy -->
<script type="text/javascript">
$("#tk_div").css("display", "none");
$( "#ticket_book" ).change(function() {
  if(jQuery('#ticket_book').is(":checked"))
  {
    $("#tk_div").css("display", "");
  } else
  {
    $("#tk_div").css("display", "none");
  }
});
</script>


@endpush
