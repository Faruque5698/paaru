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
      $field_name = 'date_time';
      $field_lable = 'Events Date';
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


<div class="row">

  <div class="col-4">

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <img id="show" src="{{ $event->image ? asset('assets/images/event/'.$event->image) : 'http://placehold.it/180'}}" alt="your image" width="180" height="180"/>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">

          @php
          $field_name = 'image';
          $field_lable = 'Events photo';
          $field_placeholder = $field_lable;
          $required = "";
          @endphp

          {{
            html()->label($field_lable, $field_name)
          }}

          {!! fielf_required($required) !!}
          {{ html()->file($field_name)->class('form-control')->id($field_name)->attributes(["$required"]) }}

          <p class="text-primary">
            Maximum image dimension is width:800 and height:480.
          </p>

          <p id="format_error" style="display:none; color:#FF0000;">
            Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
          </p>

          <p id="size_error" style="display:none; color:#FF0000;">
            Maximum File Size Limit is 500KB.
          </p>
          <p id="dimension_error" style="display:none; color:#FF0000;">
            Invalid image dimension. Maximum image dimension is width:800 and height:480.
            <a href="https://www.iloveimg.com/crop-image" target="_blank">To crop image</a>
          </p>

        </div>
      </div>

      <div class="col-12">
        <div class="form-group">
          @php
          $field_name = 'ticket_book';
          $field_lable = label_case($field_name);
          $field_placeholder = $field_lable;
          $required = "";
          @endphp

          {{
            html()->label($field_lable, $field_name)
          }}

          <div class="checkbox">
            {{
              html()->checkbox($field_name)->id($field_name)
            }}
          </div>

        </div>
      </div>

    </div>

  </div>

  <div class="col-8">
    <div class="form-group">

      @php
      $field_name = 'description';
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

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'starting_time';
      $field_lable = 'Ticket Book Start Time';
      $field_placeholder = $field_lable;
      $required = "";
      @endphp
      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      <div class="input-group date ticketdatetime" id="{{$field_name}}" data-target-input="nearest">
        {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
        <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
          <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'ending_time';
      $field_lable = 'Ticket Book End Time';
      $field_placeholder = $field_lable;
      $required = "";
      @endphp
      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      <div class="input-group date ticketdatetime" id="{{$field_name}}" data-target-input="nearest">
        {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
        <!-- <input type="text" class="form-control datetimepicker-input" placeholder="Ending Time"> -->
        <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
          <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-4">
    <div class="form-group">
      @php
      $field_name = 'ticket_money';
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
      $field_name = 'place';
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
      $field_name = 'location';
      $field_lable = label_case($field_name);
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}

      <p style="color:#FF0000;">
        <strong>NB.</strong> Copy the embeded google map link and change width=100% and height=450.
      </p>

    </div>
  </div>
</div>

<!-- Form End -->
