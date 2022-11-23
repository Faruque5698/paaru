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
      <div class="col">
        <h4 class="card-title mb-0">
          <i class="{{$module_icon}}"></i> {{ __('labels.backend.users.index.title') }}
          <small class="text-muted">{{ __('labels.backend.users.create.action') }} </small>
        </h4>
        <div class="small text-muted">
          {{ __('labels.backend.users.index.sub-title') }}
        </div>
      </div>
      <!--/.col-->
      <div class="col-4">
        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
          <button onclick="window.history.back();"class="btn btn-warning ml-1" data-toggle="tooltip" title="Return Back"><i class="fas fa-reply"></i></button>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <hr>

    <div class="row mt-4 mb-4">
      <div class="col">

        {{ html()->form('POST', route("backend.users.store"))->class('form')->attribute('enctype', 'multipart/form-data')->class('form-horizontal')->open() }}

        <div class="form-group row">
          {{ html()->label(__('labels.backend.users.fields.first_name'))->class('col-md-2 form-control-label')->for('first_name') }}
          <div class="col-md-10">
            {{ html()->text('first_name')
            ->class('form-control')
            ->placeholder(__('labels.backend.users.fields.first_name'))
            ->attribute('maxlength', 191)
            ->required() }}
          </div>
        </div><!--form-group-->
        <div class="form-group row">
          {{ html()->label(__('labels.backend.users.fields.last_name'))->class('col-md-2 form-control-label')->for('last_name') }}
          <div class="col-md-10">
            {{ html()->text('last_name')
            ->class('form-control')
            ->placeholder(__('labels.backend.users.fields.last_name'))
            ->attribute('maxlength', 191)
            ->required() }}
          </div>
        </div><!--form-group-->

        <div class="form-group row">
          {{ html()->label(__('labels.backend.users.fields.email'))->class('col-md-2 form-control-label')->for('email') }}

          <div class="col-md-10">
            {{ html()->email('email')
            ->class('form-control')
            ->placeholder(__('labels.backend.users.fields.email'))
            ->attribute('maxlength', 191)
            ->required() }}
          </div>
        </div><!--form-group-->

        <div class="form-group row">
          {{ html()->label(__('labels.backend.users.fields.password'))->class('col-md-2 form-control-label')->for('password') }}

          <div class="col-md-10">
            {{ html()->password('password')
            ->class('form-control')
            ->placeholder(__('labels.backend.users.fields.password'))
            ->required() }}
          </div>
        </div><!--form-group-->

        <div class="form-group row">
          {{ html()->label(__('labels.backend.users.fields.password_confirmation'))->class('col-md-2 form-control-label')->for('password_confirmation') }}

          <div class="col-md-10">
            {{ html()->password('password_confirmation')
            ->class('form-control')
            ->placeholder(__('labels.backend.users.fields.password_confirmation'))
            ->required() }}
          </div>
        </div><!--form-group-->

        <div class="form-group row">
          {{ html()->label(__('labels.backend.users.fields.image'))->class('col-md-2 form-control-label')->for('password') }}

          <div class="col-md-10">
            <div class="form-group">

              @php
              $field_name = 'avatar';
              $field_lable = "Image";
              $field_placeholder = $field_lable;
              $required = "required";
              @endphp

              {{
                html()->label($field_lable, $field_name)
              }}

              {!! fielf_required($required) !!}
              {{ html()->file($field_name)->id($field_name)->class('form-control')->attributes(["$required"]) }}

              <p class="text-primary">
                Maximum image dimension is width:350 and height:350.
              </p>


              <p id="format_error" style="display:none; color:#FF0000;">
                Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
              </p>
              <p id="size_error" style="display:none; color:#FF0000;">
                Maximum File Size Limit is 300KB.
              </p>
              <p id="dimension_error" style="display:none; color:#FF0000;">
                Invalid image dimension. Maximum image dimension is width:350px and height:350px.<br>
                <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image" target="_blank">Link -1</a><span class="text-dark"> or </span>
                <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>
              </p>


            </div>
          </div>
        </div><!--form-group-->

        <div class="form-group row">
          {{ html()->label(__('labels.backend.users.fields.status'))->class('col-md-2 form-control-label')->for('status') }}

          <div class="col-md-10">
            {{ html()->checkbox('status', true, '1') }}
          </div>
        </div><!--form-group-->

        <div class="form-group row">
          {{ html()->label(__('labels.backend.users.fields.confirmed'))->class('col-md-2 form-control-label')->for('confirmed') }}

          <div class="col-md-10">
            {{ html()->checkbox('confirmed', true, '1') }}
          </div>
        </div><!--form-group-->

        <div class="form-group row">
          {{ html()->label('Abilities')->class('col-md-2 form-control-label') }}

          <div class="col">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Roles</th>
                    <th>Permissions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      @if ($roles->count())
                      @foreach($roles as $role)
                      <div class="card">
                        <div class="card-header">
                          <div class="checkbox">
                            {{ html()->label(html()->checkbox('roles[]', old('roles') && in_array($role->name, old('roles')) ? true : false, $role->name)->id('role-'.$role->id) . ' ' . ucwords($role->name))->for('role-'.$role->id) }}
                          </div>
                        </div>
                        <div class="card-body">
                          @if ($role->id != 1)
                          @if ($role->permissions->count())
                          @foreach ($role->permissions as $permission)
                          <i class="far fa-check-circle mr-1"></i>{{ $permission->name }}
                          @endforeach
                          @else
                          None
                          @endif
                          @else
                          All Permissions
                          @endif
                        </div>
                      </div><!--card-->
                      @endforeach
                      @endif
                    </td>
                    <td>
                      @if ($permissions->count())
                      @foreach($permissions as $permission)
                      <div class="checkbox">
                        {{ html()->label(html()->checkbox('permissions[]', old('permissions') && in_array($permission->name, old('permissions')) ? true : false, $permission->name)->id('permission-'.$permission->id) . ' ' . ucwords($permission->name))->for('permission-'.$permission->id) }}
                      </div>
                      @endforeach
                      @endif
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div><!--form-group-->

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              {{ html()->button($text = "<i class='fas fa-plus-circle'></i> " . ucfirst($module_action) . "", $type = 'submit')->id('submit')->class('btn btn-success') }}
            </div>
          </div>
          <div class="col-6">
            <div class="float-right">
              <div class="form-group">
                <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fas fa-reply"></i> Cancel</button>
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
        <small class="float-right text-muted">

        </small>
      </div>
    </div>
  </div>
</div>

@endsection

@push('after-scripts')
<!-- Image Size Validation -->
<script>
$('input[type="submit"]').prop("disabled", true);
var a=0;
//binds to onchange event of your input field
$('#avatar').bind('change', function() {

  if ($('input:submit').attr('disabled',false)){
    $('input:submit').attr('disabled',true);
  }

  var ext = $('#avatar').val().split('.').pop().toLowerCase();

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

$('#avatar').change(function () {

  var image = $(this)[0].files[0];

  img = new Image();
  var imgwidth = 0;
  var imgheight = 0;
  var maxwidth = 350;
  var maxheight = 350;

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
@endpush
