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
  <div class="card-header">
    Uplode To <b>{{$gallery->gallery_name}}</b>
  </div>

  <div class="card-body">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <!-- <h1 class="text-center">$news->title</h1><br>                 -->
          <div class="form-group">
            <div class="file-loading">
              <input id="image-file" type="file" name="file" accept="image/*" data-min-file-count="1" multiple>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@push('after-styles')
<!-- More Image -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/moreImage/https _cdnjs.cloudflare.com_ajax_libs_bootstrap-fileinput_4.4.7_css_fileinput.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/backend/css/moreImage/https _maxcdn.bootstrapcdn.com_bootstrap_4.0.0-beta_css_bootstrap.min.css') }}" />
@endpush

@push ('after-scripts')
<!-- Date Time Picker & Moment Js-->
<script type="text/javascript" src="{{ asset('assets/backend/js/moreImage/') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- More Image -->
<script src="{{ asset('assets/backend/js/moreImage/https _code.jquery.com_jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/moreImage/https _cdnjs.cloudflare.com_ajax_libs_bootstrap-fileinput_4.4.7_js_fileinput.js') }}"></script>
<script src="{{ asset('assets/backend/js/moreImage/https _cdnjs.cloudflare.com_ajax_libs_bootstrap-fileinput_4.4.7_themes_fa_theme.js') }}"></script>
<script src="{{ asset('assets/backend/js/moreImage/https _cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/moreImage/https _maxcdn.bootstrapcdn.com_bootstrap_4.0.0-beta_js_bootstrap.min.js') }}"></script>
<script type="text/javascript">
$("#image-file").fileinput({
  theme: 'fa',
  uploadUrl: "{{route('backend.photogallery.upload')}}",
  uploadExtraData: function() {
    return {
      _token: "{{ csrf_token() }}",
      gallery: "{{$gallery->id}}",
    };
  },
  allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
  overwriteInitial: false,
  maxFileSize:2048,
  maxFilesNum: 10
});
</script>


@endpush
