<!-- Form Start -->
<div class="row">
  <div class="col-4">
    <div class="form-group">

      @php
      $field_name = 'type_id';
      $field_lable = "Designation";
      $field_placeholder = "-- Select Type --";
      $required = "required";
      $select_options = $types;
      @endphp
      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}

    </div>

    <!-- <div class="form-group">

    @php
    $field_name = 'type_id';
    $field_lable = "Types";
    @endphp

    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}

    <select class="form-control select2" id="type_id">
    <option value="">---- Select-----</option>
    @foreach($c_types as $c_type)
    <option value="{{ $c_type->id }}">{{ $c_type->name}}</option>
    @endforeach
  </select>

</div> -->
</div>

<div class="col-4">
  <div class="form-group">

    @php
    $field_name = 'title';
    $field_lable = "Title";
    $field_placeholder = $field_lable;
    $required = "";
    @endphp

    {{ html()->label($field_lable, $field_name) }}
    {{ html()->text($field_name)->id($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
  </div>
</div>

<div class="col-4">
  <div class="form-group">

    @php
    $field_name = 'name';
    $field_lable = "Name";
    $field_placeholder = $field_lable;
    $required = "";
    @endphp

    {{ html()->label($field_lable, $field_name) }}
    {{ html()->text($field_name)->id($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
  </div>
</div>
</div>

<div class="row">
  <div class="col-6">
    <div class="form-group">
      @php
      $field_name = 'occupation';
      $field_lable = label_case($field_name);
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }}
      {{ html()->text($field_name)->id($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>

  <div class="col-6">
    <div class="form-group">

      @php
      $field_name = 'designation';
      $field_lable = label_case($field_name);
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }}
      {{ html()->text($field_name)->id($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'email';
      $field_lable = label_case($field_name);
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }}
      {{ html()->text($field_name)->id($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}

    </div>
  </div>

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'mobile';
      $field_lable = label_case($field_name);
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }}
      {{ html()->text($field_name)->id($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>

  <div class="col-4">
    <div class="form-group row">

      <div class="col-md-5">
        <img id="image" src="{{ asset('assets/images/members/myimage.jpg') }}" class="user-profile-image img-fluid img-thumbnail" style="max-height:150px; max-width:150px;" />
      </div>
    </div><!--form-group-->
  </div>
</div>


<!-- Form End -->
