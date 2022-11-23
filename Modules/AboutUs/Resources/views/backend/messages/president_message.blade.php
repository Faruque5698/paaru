@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }}
@stop

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.dashboard')!!}"><i class="icon-speedometer"></i> Dashboard</a></li>
<li class="breadcrumb-item active"><i class="{{ $module_icon }}"></i> {{ $module_title }}</li>
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
          {{ title_case($module_title) }} Management Dashboard
        </div>
      </div>
      <!--/.col-->

      <!--/.col-->
    </div>
    <!--/.row-->

    <hr>

    <div class="row mt-4">
      <div class="col">

        {{ html()->modelForm($p_message, 'PATCH', route("backend.pmmessages.update", $p_message->id))->class('form-horizontal')->open() }}

        <!-- Form Start -->
        <div class="row">

          <div class="col-6">
            <div class="form-group">
              @php
              $field_name = 'name';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              {{ html()->text($field_name)->value($member->name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])->disabled() }}
            </div>
          </div>

          <div class="col-6">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <img id="show" src="{{$member->image ? asset('assets/images/members/' . $member->image) : 'http://placehold.it/180'}}" alt="your image" width="180" height="180"/>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">

              @php
              $field_name = 'message';
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
                ->attribute('rows',10)
                ->attributes(["$required"])
              }}

            </div>
          </div>

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

@push ('after-scripts')
<script type="text/javascript" src="{{ asset('assets/backend/plugins/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
CKEDITOR.replace('message', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
</script>
@endpush
