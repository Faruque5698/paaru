@extends ("backend.layouts.app")

<?php
$module_name_singular = str_singular($module_name);
?>

@section ('title', __("labels.backend.$module_name.".strtolower($module_action).".title") . " - " . __("labels.backend.$module_name.".strtolower($module_action).".action"))

@section("content")
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-8">
        <h4 class="card-title mb-0">
          <i class="{{$module_icon}}"></i> {{ __("labels.backend.$module_name.edit.title") }}
          <small class="text-muted">{{ __("labels.backend.$module_name.edit.action") }} </small>
        </h4>
        <div class="small text-muted">
          {{ __("labels.backend.$module_name.edit.sub-title") }}
        </div>
      </div>
      <div class="col-4">
        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
          <button onclick="window.history.back();"class="btn btn-warning ml-1" data-toggle="tooltip" title="Return Back"><i class="fas fa-reply"></i></button>
          <a href="{{route("backend.$module_name.show", $$module_name_singular)}}" class="btn btn-primary ml-1" data-toggle="tooltip" title="{{__('labels.backend.show')}}"><i class="fas fa-tv"></i></a>
        </div>
      </div>
    </div>

    <hr>
    <div class="row mt-4">
      <div class="col">
        {{ html()->modelForm($$module_name_singular, 'PATCH', route("backend.$module_name.update", $permission->id))->class('form-horizontal')->open() }}

        <div class="form-group row">
          {{ html()->label(__("labels.backend.$module_name.fields.name"))->class('col-md-2 form-control-label')->for('name') }}

          <div class="col-md-10">
            {{ html()->text('name')
            ->class('form-control')
            ->placeholder(__('labels.backend.roles.fields.name'))
            ->attribute('maxlength', 191)
            ->required() }}
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <div class="form-group">
              {{ html()->submit($text = icon('fas fa-save')." Save")->class('btn btn-success') }}
            </div>
          </div>

          <div class="col-8">
            <div class="float-right">
              <a href="{{route("backend.$module_name.destroy", $permission)}}" class="btn btn-danger" data-method="DELETE" data-token="{{csrf_token()}}" data-toggle="tooltip" title="{{__('labels.backend.delete')}}"><i class="fas fa-trash-alt"></i></a>
              <a href="{{ route("backend.$module_name.index") }}" class="btn btn-warning" data-toggle="tooltip" title="{{__('labels.backend.cancel')}}"><i class="fas fa-reply"></i> Cancel</a>
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
          Updated: {{$$module_name_singular->updated_at->diffForHumans()}},
          Created at: {{$$module_name_singular->created_at->toCookieString()}}
        </small>
      </div>
    </div>
  </div>
</div>

@endsection
