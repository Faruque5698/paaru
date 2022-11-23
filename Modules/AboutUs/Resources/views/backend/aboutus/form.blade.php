<!-- Form Start -->
<div class="row">

  <div class="col-6">
    <div class="form-group">
      @php
      $field_name = 'name';
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
      $field_name = 'slogan';
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

  <div class="col-8">
    <div class="form-group">

      @php
      $field_name = 'about_paaru';
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

  <div class="col-4">

    <div class="row">
      <div class="col-12">
        <div class="form-group">

          @php
          $field_name = 'image';
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
            Maximum image dimension is width:800 and height:468.
          </p>


          <p id="format_error" style="display:none; color:#FF0000;">
            Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
          </p>
          <p id="size_error" style="display:none; color:#FF0000;">
            Maximum File Size Limit is 300KB.
          </p>
          <p id="dimension_error" style="display:none; color:#FF0000;">
            Invalid image dimension. Maximum image dimension is width:800px and height:468px.<br>
            <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image" target="_blank">Link -1</a><span class="text-dark"> or </span>
            <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>
          </p>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <img id="show" src="http://placehold.it/800x468" alt="your image" width="100%" />
        </div>
      </div>
    </div>

  </div>

</div>

<div class="row">

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'activity_name';
      $field_lable = label_case($field_name);
      $field_placeholder = $field_lable;
      $required = "required";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>

  <div class="col-8">
    <div class="form-group">
      @php
      $field_name = 'activity_message';
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
        ->attribute('rows',5)
        ->attributes(["$required"])
      }}
    </div>
  </div>

</div>
