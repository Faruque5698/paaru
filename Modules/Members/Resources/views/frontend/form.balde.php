<!-- Form Start -->
<div class="row">
  <div class="col-2">
    <div class="form-group">
      @php
      $field_name = 'title';
      $field_lable = label_case($field_name);
      $field_placeholder = "----- Select ----";
      $required = "required";
      $select_options = [
      'Mr'=>'Mr',
      'Ms'=>'Ms',
      'Dr'=>'Dr',
      'Prof'=>'Prof',
      ];
      @endphp
      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}

    </div>
  </div>

  <div class="col-5">
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

  <div class="col-5">
    <div class="form-group">
      @php
      $field_name = 'date_of_birth';
      $field_lable = label_case($field_name);
      $field_placeholder = $field_lable;
      $required = "required";
      @endphp
      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      <div class="input-group date datetime" id="{{$field_name}}" data-target-input="nearest">
        {{ html()->text($field_name)->placeholder($field_placeholder)->id($field_name)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
        <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">

    <div class="form-group">
      @php
      $field_name = 'bachelor_year';
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
      $field_name = 'bachelor_roll';
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

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">If Any</h5>

        <div class="row">
          <div class="col-6">
            <div class="form-group">

              @php
              $field_name = 'masters_year';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            </div>

          </div>
          <div class="col-6">
            <div class="form-group">

              @php
              $field_name = 'masters_roll';
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
              $field_name = 'mphil_year';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            </div>

          </div>
          <div class="col-6">
            <div class="form-group">

              @php
              $field_name = 'mphil_roll';
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
              $field_name = 'phd_year';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            </div>

          </div>
          <div class="col-6">
            <div class="form-group">

              @php
              $field_name = 'phd_roll';
              $field_lable = label_case($field_name);
              $field_placeholder = $field_lable;
              $required = "";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            </div>
          </div>
        </div>

      </div>


    </div>
  </div>

</div>

<div class="row">

  <div class="col-6">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mailing Address</h5>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              @php
              $field_name = 'm_location';
              $field_lable = "Address";
              $field_placeholder = "Address";
              $required = "required";
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
              $field_name = 'm_post_code';
              $field_lable = "Post Code";
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
              $field_name = 'm_district';
              $field_lable = "District";
              $required = "required";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}

              <select name="m_district" class="form-control select2">
                <option value="">{{ 'Select district' }}</option>
                @foreach($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

        </div>


        <div class="row">
          <div class="col-12">
            <div class="form-group">
              @php
              $field_name = 'm_email';
              $field_lable = "Email";
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
              $field_name = 'm_phone';
              $field_lable = "Phone Number";
              $field_placeholder = $field_lable;
              $required = "required";
              @endphp

              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
              {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="col-6">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Permanent Address</h5>


            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  @php
                  $field_name = 'p_location';
                  $field_lable = "Address";
                  $field_placeholder = "Address";
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
                  $field_name = 'p_post_code';
                  $field_lable = "Post Code";
                  $field_placeholder = $field_lable;
                  $required = "";
                  @endphp

                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  @php
                  $field_name = 'p_district';
                  $field_lable = "District";
                  $required = "";
                  @endphp

                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}

                  <select name="p_district" class="form-control select2">
                    <option value="">{{ 'Select district' }}</option>
                    @foreach($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          @php
          $field_name = 'occupation';
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
          $field_name = 'designation';
          $field_lable = label_case($field_name);
          $field_placeholder = $field_lable;
          $required = "";
          @endphp

          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
          {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
      </div>
    </div>

  </div>

</div>

<div class="row">
  <div class="col-6">

    <div class="form-group">

      @php
      $field_name = 'name_of_spouse';
      $field_lable = label_case($field_name);
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>

  </div>

  <div class="col-6">
    <div class="form-group">

      @php
      $field_name = 'no_of_children';
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
      $field_name = 'cat_of_member';
      $field_lable = "Member Types";
      $field_placeholder = $field_lable;
      $required = "required";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}

      <select name="cat_of_member" class="form-control select2" id="cat_of_member">
        <option value="">{{ 'Select Member Type' }}</option>
        @foreach($member_types as $member_type)
        <option value="{{ $member_type->id }}">{{ $member_type->name }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="col-6">
    <div class="form-group">

      @php
      $field_name = 'amount';
      $field_lable = "Amount Payable";
      $field_placeholder = $field_lable;
      $required = "";
      @endphp

      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
      {{ html()->text($field_name)->id('amount_payable')->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
    </div>
  </div>

</div>


<div class="row">
  <div class="col-6">

    <!-- <div class="form-group">
    @php
    $field_name = 'mode_of_payment';
    $field_lable = label_case($field_name);
    $field_placeholder = $field_lable;
    $required = "required";
    @endphp

    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}

    <select name="mode_of_payment" class="form-control select2" id="mode_of_payment">
    <option value="">{{ 'Select' }}</option>
    <option value="Cash">{{ 'Cash' }}</option>
    <option value="Bank Deposit">{{ 'Bank Deposit' }}</option>
    <option value="Check DD">{{ 'Check DD' }}</option>
    <option value="TT">{{ 'TT' }}</option>
  </select>
</div> -->

<div class="form-group">
  @php
  $field_name = 'mode_of_payment';
  $field_lable = label_case($field_name);
  $field_placeholder = $field_lable;
  $required = "required";
  $select_options = [
  'Cash'          =>'Cash',
  'Bank Deposit'  =>'Bank Deposit',
  'Check DD'      =>'Check DD',
  'TT'            =>'TT'
  ];
  @endphp

  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
  {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}

</div>
</div>

<div class="col-6">
  <div class="form-group">
    @php
    $field_name = 'payment_date';
    $field_lable = label_case($field_name);
    $field_placeholder = $field_lable;
    $required = "required";
    @endphp
    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
    <div class="input-group date datetime_payment_date" id="{{$field_name}}" data-target-input="nearest">
      {{ html()->text($field_name)->placeholder($field_placeholder)->id($field_name)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
      <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
        <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
      </div>
    </div>
  </div>
</div>

</div>

<div class="row" id="show_div">
  <div class="col-4">

    <div class="form-group">

      @php
      $field_name = 'transaction_id';
      $field_lable = "Online Transfer No";
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
      $field_name = 'bank_name';
      $field_lable = label_case($field_name);
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
      $field_name = 'branch_name';
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
          {{ html()->file($field_name)->id($field_name)->class('form-control')->attributes(["$required"]) }}

          <p class="text-primary">
            Maximum image dimension is width:350 and height:350.
          </p>


          <p id="format_error" style="display:none; color:#FF0000;">
            Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
          </p>
          <p id="size_error" style="display:none; color:#FF0000;">
            Maximum File Size Limit is 300KB.
          </p>
          <p id="dimension_error" style="display:none; color:#FF0000;">
            Invalid image dimension. Maximum image dimension is width:350px and height:350px.<br>
            <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image" target="_blank">Link -1</a><span class="text-dark"> or </span>
            <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>
          </p>


        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <img id="show" src="{{ asset('assets/images/members/user.png') }}" alt="your image" width="180" height="180"/>
        </div>
      </div>
    </div>
  </div>
  <div class="col-6">

    <div class="row">
      <div class="col-12">
        <div class="form-group">

          @php
          $field_name = 'signature';
          $field_lable = label_case($field_name);
          $field_placeholder = $field_lable;
          $required = "required";
          @endphp

          {{
            html()->label($field_lable, $field_name)
          }}

          {!! fielf_required($required) !!}
          {{ html()->file($field_name)->id($field_name)->class('form-control')->attributes(["$required"]) }}

          <p class="text-primary">
            Maximum image dimension is width:300px and height:80px.
          </p>


          <p id="s_format_error" style="display:none; color:#FF0000;">
            Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
          </p>
          <p id="s_size_error" style="display:none; color:#FF0000;">
            Maximum File Size Limit is 30KB.
          </p>
          <p id="s_dimension_error" style="display:none; color:#FF0000;">
            Invalid image dimension. Maximum image dimension is width:300px and height:80px.<br>
            <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image" target="_blank">Link -1</a><span class="text-dark"> or </span>
            <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>
          </p>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <img id="s_show" src="{{ asset('assets/images/signature/signature.png') }}" alt="your image" width="300" height="80"/>
        </div>
      </div>
    </div>
  </div>
</div>
