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

        {{ html()->form('POST', route("backend.$module_name.store"))->class('form')->class('form-horizontal')->open() }}

        <!-- Form Start -->
        <div class="row">

          <div class="col-12">
            <div class="form-group">
              @php
              $field_name = 'subject';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "required";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
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
                html()->label("( 0 )")->id('text_count')
              }}

              <textarea name="{{$field_name}}" placeholder="{{$field_placeholder}}" class="form-control" rows="7" cols="50" id="{{$field_name}}" oninput="messageCount()"></textarea>

              <!-- {{
              html()->textarea($field_name)
              ->placeholder($field_placeholder)
              ->class('form-control')
              ->attribute('rows',7)
              ->attributes(["$required"])
            }} -->

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
              <a type="button" class="btn btn-warning" href="{{ route("backend.$module_path.index") }}"><i class="fas fa-reply"></i> Cancel</a>
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

@push('after-scripts')
<script type="text/javascript">

function messageCount() {
  var message = document.getElementById("message").value;
  var sms = 0;

  if(message.length > 159){
    sms = message.length / 159;
    document.getElementById("text_count").innerHTML = "( "+Math.ceil(sms)+" SMS)" ;
  }else{
    document.getElementById("text_count").innerHTML = "( "+message.length+" )" ;
  }
  // console.log(sms);
}

</script>
@endpush
