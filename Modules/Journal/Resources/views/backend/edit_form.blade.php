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
      $field_name = 'keywords';
      $field_lable = label_case($field_name);
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>
</div>

<div class="row">

  <div class="col-6">
    <div class="form-group">

      @php
      $field_name = 'abstract';
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

  <div class="col-6">
    <div class="form-group">

      @php
      $field_name = 'authors';
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

  <div class="col-6">
    <div class="form-group">

      @php
      $field_name = 'pdf_file';
      $field_lable = 'Upload';
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{
        html()->label($field_lable, $field_name)
      }}

      {!! fielf_required($required) !!}
      {{ html()->file($field_name)->class('form-control')->attributes(["$required"]) }}

      <p style="color:#FF0000;">
        <strong>NB.</strong>Upload Pdf file only.
      </p>

    </div>
  </div>

  <div class="col-6">
    <div class="form-group">
      @php
      $field_name = 'publication_date';
      $field_lable = 'Date';
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
