<!-- Form Start -->
<div class="row">
  <div class="col-4">
    <div class="form-group">
      <button type="button" class="btn btn-primary" id="show_members">Members</button>
    </div>
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
      $field_name = 'm_email';
      $field_lable = "Email";
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
      $field_name = 'm_phone';
      $field_lable = "Phone";
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
        <img id="image" src="{{ asset('assets/images/members/'.$single_member->image) }}" class="user-profile-image img-fluid img-thumbnail" style="max-height:150px; max-width:150px;" />
      </div>
    </div><!--form-group-->
  </div>
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        @php
        $field_name = 're_al_member_content';
        $field_lable = 'Renowned Alumni Member Content';
        $field_placeholder = $field_lable;
        $required = "";
        @endphp

        {{ html()->label($field_lable, $field_name) }}

        {{ html()->textarea($field_name)
          ->id($field_name)
          ->value($single_member->renownedalumnious->re_al_member_content)
          ->placeholder($field_placeholder)
          ->class('form-control')
          ->attributes(["$required"])
          ->attribute('rows',5)
        }}
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        @php
        $field_name = 're_al_member_msg';
        $field_lable = 'Renowned Alumni Member Message';
        $field_placeholder = $field_lable;
        $required = "";
        @endphp

        {{ html()->label($field_lable, $field_name) }}
        {{ html()->textarea($field_name)
          ->id($field_name)
          ->value($single_member->renownedalumnious->re_al_member_msg)
          ->placeholder($field_placeholder)
          ->class('form-control')
          ->attributes(["$required"])
          ->attribute('rows',5)
        }}
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="form-group">
      @php
      $field_name = 'video_url';
      $field_lable = 'Video Link';
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }}
      {{ html()->text($field_name)
        ->id($field_name)
        ->placeholder($field_placeholder)
        ->class('form-control')
        ->attributes(["$required"])
      }}
      <p style="color:#FF0000;">
        <strong>NB.</strong>If you want to change video then copy the youtube link and past it here.
      </p>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    {!! $single_member->video_link !!}
  </div>
</div>
