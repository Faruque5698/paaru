@extends('frontend.layouts.master')

@section('title', 'Join Member')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Join Member</li>
      </ol>
    </nav>
  </div>
</section>
<!-- Section Content -->
<section id="content">
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Please fill up the form with appropriate information</h5>
        <div class="row mt-4">
          <div class="col">
            {{ html()->form('POST', route('frontend.member_save'))->class('form')->attribute('enctype',
            'multipart/form-data')->class('form-horizontal')->open() }}
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
                  {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control
                  select2')->attributes(["$required"]) }}
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
                  {{
                  html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                  }}
                </div>
              </div>
              <div class="col-5">
                <div class="form-group">
                  @php
                  $field_name = 'date_of_birth';
                  $field_lable = 'Date of Birth';
                  $field_placeholder = $field_lable;
                  $required = "required";
                  @endphp
                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  <div class="input-group date datetime" id="{{$field_name}}" data-target-input="nearest">
                    {{ html()->text($field_name)->placeholder($field_placeholder)->id($field_name)->class('form-control
                    datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
                    <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center">Degree Obtained</h5>
                    <div class="row">
                      <div class="col-2">
                        <h5 class="card-title text-center mt-4">Bachelor</h5>
                      </div>
                      <div class="col-5">
                        <div class="form-group">
                          @php
                          $field_name = 'bachelor_year';
                          $field_lable = 'Passing Year';
                          $field_placeholder = 'Passing Year';
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="form-group">
                          @php
                          $field_name = 'bachelor_roll';
                          $field_lable = 'Roll No';
                          $field_placeholder = 'Roll No';
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2">
                        <h5 class="card-title text-center mt-4">Masters</h5>
                      </div>
                      <div class="col-5">
                        <div class="form-group">
                          @php
                          $field_name = 'masters_year';
                          $field_lable = 'Passing Year';
                          $field_placeholder = 'Passing Year';
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="form-group">
                          @php
                          $field_name = 'masters_roll';
                          $field_lable = 'Roll No';
                          $field_placeholder = 'Roll No';
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2">
                        <h5 class="card-title text-center mt-4">MPhill</h5>
                      </div>
                      <div class="col-5">
                        <div class="form-group">
                          @php
                          $field_name = 'mphil_year';
                          $field_lable = 'Passing Year';
                          $field_placeholder = 'Passing Year';
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="form-group">
                          @php
                          $field_name = 'mphil_roll';
                          $field_lable = 'Roll No';
                          $field_placeholder = 'Roll No';
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2">
                        <h5 class="card-title text-center mt-4">PhD</h5>
                      </div>
                      <div class="col-5">
                        <div class="form-group">
                          @php
                          $field_name = 'phd_year';
                          $field_lable = 'Passing Year';
                          $field_placeholder = 'Passing Year';
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="form-group">
                          @php
                          $field_name = 'phd_roll';
                          $field_lable = 'Roll No';
                          $field_placeholder = 'Roll No';
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mt-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title mb-0">Mailing Address</h5>
                    <div class="row">
                      <div class="col-md-12 my-2">
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" value="Bangladesh" onclick="mSelfCountry();" name="checked_m_country" id="m_self_country" checked />
                          <label class="form-check-label" for="m_self_country">
                            Bangladesh
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" value="m_others_country" name="checked_m_country" id="m_others_country" onclick="mAnotherCountry();" />
                          <label class="form-check-label" for="m_others_country">
                            Another Country
                          </label>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          @php
                          $field_name = 'm_country';
                          $field_lable = "Country";
                          $required = "required";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          <select name="m_country" data-placeholder="Select Country" class="form-control select2" required id="m_country">
                           
                          </select>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          @php
                          $field_lable = "Address";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}

                          <textarea class="form-control" name="m_location" placeholder="House/Rode: , Village/Area/Word: , Post Office:" id="m_location" cols="10" required rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                    <div id="postCode&District">
                      <div class="row" >
                        <div class="col-6">
                          <div class="form-group">
                            @php
                            $field_name = 'm_post_code';
                            $field_lable = "Post Code";
                            $field_placeholder = $field_lable;
                            $required = "required";
                            $id = "m_post_code";
                            @endphp
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{
                            html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])->id($id)
                            }}
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
                            <select width="100%" data-placeholder="Select district" name="m_district" required id="m_district" class="form-control select2">
                              <option value=""></option>
                              @foreach($districts as $district)
                              <option value="{{ $district->id }}">{{ $district->name }}</option>
                              @endforeach
                            </select>
                          </div>
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
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
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
                          $required = "";
                          @endphp
                          {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                          {{
                          html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                          }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 mt-4">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Permanent Address</h5>
                        <div class="row">
                          <div class="col-md-12 my-2">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" value="Bangladesh" onclick="pSelfCountry();" type="radio" name="checked_p_country" id="p_self_country"  />
                              <label class="form-check-label" for="p_self_country">
                                Bangladesh
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" value="p_others_country" name="checked_p_country" id="p_others_country" onclick="pAnotherCountry();" />
                              <label class="form-check-label" for="p_others_country">
                                Another Country
                              </label>
                            </div>
                          </div>

                          <div class="col-12">
                            <div class="form-group">
                              @php
                              $field_name = 'p_country';
                              $field_lable = "Country";
                              $required = "";
                              @endphp
                              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                              <select name="p_country" data-placeholder="Select Country" class="form-control select2" id="p_country">
                               
                              </select>
                            </div>
                          </div>

                          <div class="col-12">
                            <div class="form-group">
                              @php
                              $field_lable = "Address";
                              $required = "";
                              @endphp
                              {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                              <textarea name="p_location" id="p_location" class="form-control" placeholder="House/Rode: , Village/Area/Word: , Post Office:" cols="10" rows="3"></textarea>
                            </div>
                          </div>

                    
                        </div>
                        <div id="District&PostCode">
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                @php
                                $field_name = 'p_post_code';
                                $field_lable = "Post Code";
                                $field_placeholder = $field_lable;
                                $id = 'p_post_code';
                                $required = "";
                                @endphp
                                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                {{
                                html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])->id($id)
                                }}
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
                                <select name="p_district" id="p_district" class="form-control select2">
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
                </div>
                <div class="row">
                  <div class="col-12 mt-4">
                    <div class="form-group">
                      @php
                      $field_name = 'occupation';
                      $field_lable = label_case($field_name);
                      $field_placeholder = $field_lable;
                      $required = "";
                      @endphp
                      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                      {{
                      html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                      }}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      @php
                      $field_name = 'designation';
                      $field_lable = 'Designation (if any)';
                      $field_placeholder = 'Designation';
                      $required = "";
                      @endphp
                      {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                      {{
                      html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                      }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mt-4">
                <div class="form-group">
                  @php
                  $field_name = 'name_of_spouse';
                  $field_lable = 'Name of Spouse';
                  $field_placeholder = $field_lable;
                  $required = "";
                  @endphp
                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  {{
                  html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                  }}
                </div>
              </div>
              <div class="col-2">
                <h5 class="card-title text-center mr-5 mt-4">Children</h5>
              </div>
              <div class="col-2">
                <div class="form-group">
                  @php
                  $field_name = 'no_of_son';
                  $field_lable = 'Son';
                  $field_placeholder = 'Number of Son';
                  $required = "";
                  @endphp
                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  {{
                  html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                  }}
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  @php
                  $field_name = 'no_of_daughter';
                  $field_lable = 'Daughter';
                  $field_placeholder = 'Number of Daughter';
                  $required = "";
                  @endphp
                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  {{
                  html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                  }}
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
                  $field_lable = "Amount Payable (tk)";
                  $field_placeholder = $field_lable;
                  $required = "";
                  @endphp
                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  {{
                  html()->text($field_name)->id('amount_payable')->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                  }}
                </div>
              </div>
            </div>
            <div class="row" id="show_div_filter_member">
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
                  $field_lable = 'Mode of Payment';
                  $field_placeholder = $field_lable;
                  $required = "";
                  $select_options = [
                  'Cash' =>'Cash',
                  'Bank Deposit' =>'Bank Deposit',
                  'Check DD' =>'Check DD',
                  'TT' =>'TT'
                  ];
                  @endphp
                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control
                  select2')->attributes(["$required"]) }}
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  @php
                  $field_name = 'payment_date';
                  $field_lable = label_case($field_name);
                  $field_placeholder = $field_lable;
                  $required = "";
                  @endphp
                  {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                  <div class="input-group date datetime_payment_date" id="{{$field_name}}" data-target-input="nearest">
                    {{ html()->text($field_name)->placeholder($field_placeholder)->id($field_name)->class('form-control
                    datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
                    <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
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
                  {{
                  html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                  }}
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
                  {{
                  html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                  }}
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
                  {{
                  html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])
                  }}
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
                      $required = "";
                      @endphp
                      {{
                      html()->label($field_lable, $field_name)
                      }}
                      {!! fielf_required($required) !!}
                      {{ html()->file($field_name)->id($field_name)->class('form-control')->attributes(["$required"]) }}
                      <p class="text-primary">
                        Maximum image dimension is width:350 and height:350.

                      <p id="format_error" style="display:none; color:#FF0000;">
                        Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.

                      <p id="size_error" style="display:none; color:#FF0000;">
                        Maximum File Size Limit is 300KB.

                      <p id="dimension_error" style="display:none; color:#FF0000;">
                        Invalid image dimension. Maximum image dimension is width:350px and height:350px.<br>
                        <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image"
                          target="_blank">Link -1</a><span class="text-dark"> or </span>
                        <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <img id="show" src="{{ asset('assets/images/members/user.png') }}" alt="your image" width="180"
                        height="180" />
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
                      $required = "";
                      @endphp
                      {{
                      html()->label($field_lable, $field_name)
                      }}
                      {!! fielf_required($required) !!}
                      {{ html()->file($field_name)->id($field_name)->class('form-control')->attributes(["$required"]) }}
                      <p class="text-primary">
                        Maximum image dimension is width:300px and height:80px.

                      <p id="s_format_error" style="display:none; color:#FF0000;">
                        Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.

                      <p id="s_size_error" style="display:none; color:#FF0000;">
                        Maximum File Size Limit is 30KB.

                      <p id="s_dimension_error" style="display:none; color:#FF0000;">
                        Invalid image dimension. Maximum image dimension is width:300px and height:80px.<br>
                        <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image"
                          target="_blank">Link -1</a><span class="text-dark"> or </span>
                        <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <img id="s_show" src="{{ asset('assets/images/signatures/signature.jpg') }}" alt="your image"
                        width="300" height="80" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                {!! NoCaptcha::display() !!}

                @error('g-recaptcha-response')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror

              </div>
              <div class="col-6">
                <div class="form-group">
                  {{ html()->button($text = "<i class='fa fa-save'></i> " . ucfirst($module_action) . "", $type =
                  'submit')->class('btn btn-success') }}
                </div>
              </div>
              <div class="col-6">
                <div class="float-right">
                  <div class="form-group">
                    <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i
                        class="fa fa-reply"></i>Cancel</button>
                  </div>
                </div>
              </div>
            </div>
            {{ html()->form()->close() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section Content -->
<!-- Modal  -->
<div class="modal fade instraction_form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title">Please Follow the Following Instruction</h5> -->
        <h5 class="modal-title text-center text-warning"><i class=" glyphicon glyphicon-info-sign"
            aria-hidden="true"></i> Before completing the form, please review the instructions thoroughly.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <h1 class="text-center">PAARU at a Glance</h1><br><br> -->
        <p class="text-justify">
          <b> The name of the association shall be PHYSICS ALUMNI ASSOCIATION, RAJSHAHI UNIVERSITY (PAARU).</b><br><br>

          <b>Objectives:</b> The objectives of this alumni association are to build active communication network among
          all the present and ex-students of the Department of Physics through various programs and to contribute in the
          academic development of the Physics Department and economic development of the country through the
          dissemination of new concepts in the relevant field.<br><br>

          <b> Eligibility of Membership:</b>All membership shall be subject to approval by the office bearers of the
          Association. Membership is open to the following:<br><br>

          a. Any person holding an Honours and/or Masters or M.Phil. or Ph.D. degree from the Department of Physics,
          University of Rajshahi through a hall of residence but presently not attached to the university as a ‘student’
          (except for M.Phil & Ph.D. students), shall be eligible to be a Member of PAARU who shall undertake to abide
          by the rules and regulations as laid down in its constitution.<br><br>

          b. Any faculty members of the Department of Physics, RU, whether he/she has degree in Physics or not, will be
          eligible to be a member of PAARU.<br><br>

          c. Any person who have served the Dept. of Physics and willing to serve the Dept. can be an associate member.
          Associate members have no right to vote and hold the position of office bearer.<br><br>

          d. The Registration fee and yearly subscription payable for the members shall be as follows:<br><br>

          <!-- i. Member/Associate Member: Registration fee Tk. 200.00 (as a yearly subscription fee).<br><br> -->

          i. Life Member: Registration fee Tk 3000.00 for only one time.<br><br>

          ii. Registration fee for ex-students living abroad US $ 100.00 for only one time.<br><br>

          iii. The General Meeting shall have the power to appoint Honorary Member who has contributed valuable services
          for the betterment of the Alumni Association. Honorary Members shall enjoy all privileges of the Association
          except for the right to vote and hold office.<br><br>

          e. All the subscriptions should be payable to:
          <b><strong>Physics Alumni Association RU; DBBL A/C no. 135-151-0240869 Dutch-BanglaBankLtd, Rajshahi Branch,
              Rajshahi</strong></b><br>

          <b>Termination of Membership:</b> A personceases to be a Member of the association<br><br>

          a. by voluntary resignation in writing.<br><br>
          b. by the termination or withdrawal of the application<br><br>
          c. by death<br><br>
          d. Because of unsound mind.<br><br>
          e. Because of convicted of any criminal offense involving moral turpitude.<br><br>
          f. by ceasing to hold the office in the case of ex-officio members.<br><br>
          <b>Continuance of Membership:</b><br><br>

          A member, whose name has been removed from the register of members solely on account of subscription and other
          dues, shall be allowed to be readmitted on paying all such dues to the alumni association.
        </p><br><br>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal  -->
@endsection

@push('after-styles')
<style>
  .error {
    color: red;
  }
</style>
<!-- Custom Error Color -->
<link rel="stylesheet"
  href="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/css/tempusdominus-bootstrap-4.min.css') }}" />
@endpush

@push('after-scripts')
{!! NoCaptcha::renderJs() !!}
<script type="text/javascript" src="{{ asset('assets/backend/vendor/moment/moment.min.js') }}"></script>
<script type="text/javascript"
  src="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script type="text/javascript">
  $(function() {
              $('.datetime').datetimepicker({
                format: 'YYYY-MM-DD',
                icons: {
                  time: 'fa fa-clock',
                  date: 'fa fa-calendar',
                  up: 'fa fa-arrow-up',
                  down: 'fa fa-arrow-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-calendar-check',
                  clear: 'fa fa-trash-alt',
                  close: 'fa fa-times'
                }
              });
            });
</script>
<script type="text/javascript">
  $(function() {
              $('.datetime_payment_date').datetimepicker({
                format: 'YYYY-MM-DD',
                icons: {
                  time: 'fa fa-clock',
                  date: 'fa fa-calendar',
                  up: 'fa fa-arrow-up',
                  down: 'fa fa-arrow-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-calendar-check',
                  clear: 'fa fa-trash-alt',
                  close: 'fa fa-times'
                }
              });
            });
</script>

<!-- Image Size Validation -->
<script>
  $('input[type="submit"]').prop("disabled", true);
            var a = 0;
            //binds to onchange event of your input field
            $('#image').bind('change', function() {

              if ($('input:submit').attr('disabled', false)) {
                $('input:submit').attr('disabled', true);
              }

              var ext = $('#image').val().split('.').pop().toLowerCase();

              if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                $('#format_error').slideDown("slow");
                $('#size_error').slideUp("slow");
                a = 0;
              } else {
                var picsize = (this.files[0].size);

                if (picsize > 300000) {
                  $('#size_error').slideDown("slow");
                  a = 0;
                } else {
                  a = 1;
                  $('#size_error').slideUp("slow");
                }
                $('#format_error').slideUp("slow");
                if (a == 1) {
                  $('input:submit').attr('disabled', false);
                }
              }

            });
</script>
<!-- Image Size Validation -->
<!-- Script for image size validation -->
<script type="text/javascript">
  var _URL = window.URL || window.webkitURL;

          $('#image').change(function() {

            var image = $(this)[0].files[0];

            img = new Image();
            var imgwidth = 0;
            var imgheight = 0;
            var maxwidth = 350;
            var maxheight = 350;

            img.src = _URL.createObjectURL(image);
            img.onload = function() {
              imgwidth = this.width;
              imgheight = this.height;

              if (imgwidth > maxwidth || imgheight > maxheight) {
                m = 0;
                $('#dimension_error').slideDown("slow");
              } else {
                m = 1;
                $('#dimension_error').slideUp("slow");
              }

              if (m == 1) {
                $('#submit').attr('disabled', false);
              } else {
                $('#submit').attr('disabled', true);
              }
            }

          });
</script>
<!-- Script for image size validation -->
<!-- script for image place holder -->
<script type="text/javascript">
  $(document).ready(function() {

          $("#image").change(function() {

            showImage(this);

          });

          function showImage(input) {

            if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function(e) {
                $('#show')
                .attr('src', e.target.result);
              };

              reader.readAsDataURL(input.files[0]);
            }
          }

        });
</script>
<!-- script for image place holder -->
<!-- signature Size Validation -->
<script>
  $('input[type="submit"]').prop("disabled", true);
      var a = 0;
      //binds to onchange event of your input field
      $('#signature').bind('change', function() {

        if ($('input:submit').attr('disabled', false)) {
          $('input:submit').attr('disabled', true);
        }

        var ext = $('#signature').val().split('.').pop().toLowerCase();

        if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
          $('#s_format_error').slideDown("slow");
          $('#s_size_error').slideUp("slow");
          a = 0;
        } else {
          var picsize = (this.files[0].size);

          if (picsize > 30000) {
            $('#s_size_error').slideDown("slow");
            a = 0;
          } else {
            a = 1;
            $('#s_size_error').slideUp("slow");
          }
          $('#s_format_error').slideUp("slow");
          if (a == 1) {
            $('input:submit').attr('disabled', false);
          }
        }

      });
</script>
<!-- signature Size Validation -->
<!-- Script for signature size validation -->
<script type="text/javascript">
  var _URL = window.URL || window.webkitURL;

    $('#signature').change(function() {

      var image = $(this)[0].files[0];

      img = new Image();
      var imgwidth = 0;
      var imgheight = 0;
      var maxwidth = 300;
      var maxheight = 80;

      img.src = _URL.createObjectURL(image);
      img.onload = function() {
        imgwidth = this.width;
        imgheight = this.height;

        if (imgwidth > maxwidth || imgheight > maxheight) {
          m = 0;
          $('#s_dimension_error').slideDown("slow");
        } else {
          m = 1;
          $('#s_dimension_error').slideUp("slow");
        }

        if (m == 1) {
          $('#submit').attr('disabled', false);
        } else {
          $('#submit').attr('disabled', true);
        }
      }

    });
</script>
<!-- Script for signature size validation -->
<!-- script for signature place holder -->
<script type="text/javascript">
  $(document).ready(function() {

    $("#signature").change(function() {

      showImage(this);

    });

    function showImage(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#s_show')
          .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

  });
</script>
<!-- script for signature place holder -->

<!-- script for amount_payable -->
<script type="text/javascript">
  var check_member_type;
  var type_id;

var types = {!! json_encode($member_types) !!}
$("#show_div_filter_member").css("display", "");

$(document).ready(function(){

  $("#cat_of_member").change(function(){
      
      check_member_type = $(this).children("option:selected").val();
      types.forEach(function(type){
      if(type.id == check_member_type){
        // console.log(type.subcription_fee)
        if(type.subcription_fee==0){
          $("#show_div_filter_member").css("display", "none");
        }
        else{
        $("#show_div_filter_member").css("display", "");
      }
      }
    });

    type_id = $(this).children("option:selected").val();

    types.forEach(function(type){
      if(type.id == type_id){
        document.getElementById("amount_payable").value = type.subcription_fee;
      }
    });

  });

});

</script>
<!-- script for amount_payable -->
<!-- Script for show payment details -->
<script type="text/javascript">
  var payment_type;

$(document).ready(function() {

  $("#show_div").css("display", "none");

  $("#mode_of_payment").change(function() {

    payment_type = $(this).children("option:selected").val();

    if (payment_type == "Cash") {
      $("#show_div").css("display", "none");
    } else {
      $("#show_div").css("display", "");
    }

  });

});
</script>
<!-- Script for show payment details -->
<!-- Window on load show modal script -->
<script type="text/javascript">
  $(window).on('load', function() {
  $(".instraction_form").modal('show');
});
</script>

<script>
  //Golbal 
    let isMailingAddress = true;
    let html = "";

  //Start For Mailing Address
    const checked_m_country = document.querySelector('input[name="checked_m_country"]:checked');
    const m_country = document.getElementById("m_country");
    const PCD = document.getElementById("postCode&District");
    const mPpostCode = document.getElementById("m_post_code");
    const mDistrict = document.getElementById("m_district");
    const checked_m_countryValue = checked_m_country.value;
  //End For Mailing Address
  
  //Start For Permanent Address
    const checked_p_country = document.querySelector('input[name="checked_p_country"]:checked');
    const p_country = document.getElementById("p_country");
    const DPC = document.getElementById("District&PostCode");
    const pPpostCode = document.getElementById("p_post_code");
    const pDistrict = document.getElementById("p_district");
    //const checked_p_countryValue = checked_p_country.value;
  //End For Permanent Address
  
    //fetach country data and append data and also selected default bangladesh
    const fetchCountryData = async (checkedM="", checkedP="") =>{

      if(html === ""){
        const resData = await fetch('https://restcountries.com/v2/all');
        const data = await resData.json();
        html += '<option value="">Select</option>';
      
        const countryData = data.forEach((element)=> {
          html +='<option value="'+element.name+'">'+element.name+'</option>';
        });

        m_country.insertAdjacentHTML("beforeend", html);
        p_country.insertAdjacentHTML("beforeend", html);
      }
      //check for Mailing address
      if(isMailingAddress){
        if(checkedM === "Bangladesh"){
        $("#m_country").select2().val("Bangladesh").trigger("change");
        }else{
          $("#m_country").select2().val("").trigger("change");
        }
      }
      
       //check for Permanent Address
      /* if(checkedP === "Bangladesh"){
        $("#p_country").select2().val("Bangladesh").trigger("change");
      }else{
        $("#p_country").select2().val("").trigger("change");
      } */
    }
  
    
    //call fetch country data function
    //fetchCountryData(checked_m_countryValue, checked_p_countryValue);
    fetchCountryData(checked_m_countryValue);
  
  
  // For Mailing Address Start
    //on click call self country thats main Bangladseh
    function mSelfCountry(){
      isMailingAddress = true;
      fetchCountryData(checked_m_countryValue);
      mPpostCode.required=true;
      mDistrict.required=true;
      PCD.style.display = "block";
      $('#m_district').select2({width: '100%'});
    }
  
  
    //on click call another country
    function mAnotherCountry(){
      isMailingAddress = true;
      fetchCountryData();
      mPpostCode.required=false;
      mDistrict.required=false;
      mPpostCode.value="";
      PCD.style.display = "none";
      $("#m_district").select2().val("").trigger("change");
    }
  // For Mailing Address end
  
  // For Permanent Address Start
    //on click call self country thats main Bangladseh
    function pSelfCountry(){
      //fetchCountryData(checked_p_countryValue);
      isMailingAddress = false;
      fetchCountryData();
      DPC.style.display = "block";
      $('#p_district').select2({width: '100%'});
    }
  
  
    //on click call another country
    function pAnotherCountry(){
      isMailingAddress = false;
      fetchCountryData();
      pPpostCode.value="";
      DPC.style.display = "none";
      $("#p_district").select2().val("").trigger("change");
    }
  // For Permanent Address end
   
  </script>
<!-- Window on load show modal -->
@endpush