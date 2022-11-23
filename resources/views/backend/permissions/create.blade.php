@extends ('backend.layouts.app')

<?php
$module_name_singular = str_singular($module_name);
?>

@section ('title', __('labels.backend.permissions.create.title') . ' | ' . __('labels.backend.permissions.create.sub-title'))

@section('content')

<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-8">
        <h4 class="card-title mb-0">
          <i class="{{$module_icon}}"></i> {{ __('labels.backend.permissions.index.title') }}
          <small class="text-muted">{{ __('labels.backend.permissions.create.action') }} </small>
        </h4>
        <div class="small text-muted">
          {{ __('labels.backend.permissions.index.sub-title') }}
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

        {{ html()->form('POST', route('backend.permissions.store'))->class('form-horizontal')->open() }}
        <!-- {{ csrf_field() }} -->

        <div class="form-group row">

          {{ html()->label(__('labels.backend.permissions.fields.name'))->class('col-md-2 form-control-label')->for('name') }}

          <div class="col-md-10">
            {{
              html()->text('name')
              ->class('form-control')
              ->placeholder(__('labels.backend.permissions.fields.name'))
              ->attribute('maxlength', 191)
              ->required()
            }}
          </div>

        </div><!--form-group-->


        <div class="row">
          <div class="col">
            {{ form_cancel(route('backend.permissions.index'), __('labels.buttons.general.cancel')) }}
            {{ form_submit(__('labels.buttons.general.create')) }}
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
