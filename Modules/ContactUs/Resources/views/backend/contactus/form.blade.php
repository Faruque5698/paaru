<!-- Form Start -->
<div class="row">

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'mobile';
      $field_lable = label_case($field_name);
      $field_placeholder = 'Contact 1';
      $required = "required";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'phone';
      $field_lable = 'Contact 2';
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'email';
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

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'mail';
      $field_lable = 'Another Email';
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'place';
      $field_lable = 'Address Line  1';
      $field_placeholder = $field_lable;
      $required = "required";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'location';
      $field_lable = 'Address Line 2';
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
      $field_name = 'geo_location';
      $field_lable = 'Geo Location/Google Map';
      $field_placeholder = 'https://www.google.com/maps/place/Bondho+Gate/@24.3699955,88.6033202,13z/data=!4m8!1m2!2m1!1sUdoy+Traders,+Bondho+gate+G.P.O+Rajshahi-6000!3m4!1s0x0:0xcb272335fabcc356!8m2!3d24.3766127!4d88.5887933';
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>

</div>
