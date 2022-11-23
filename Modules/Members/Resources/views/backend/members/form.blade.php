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
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            @endphp
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            <div class="input-group date datetime" id="{{$field_name}}" data-target-input="nearest">
                {{ html()->text($field_name)->placeholder($field_placeholder)->id($field_name)->class('form-control
                datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
                <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
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

    <div class="col-6">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mailing Address</h5>

                <div class="row">
                    <div class="col-md-12 my-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="Bangladesh" onclick="mSelfCountry();" type="radio" name="checked_m_country" id="m_self_country" checked />
                          <label class="form-check-label" for="m_self_country">
                            Bangladesh
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="m_others_country" name="checked_m_country" id="m_others_country" onclick="mAnotherCountry();" />
                          <label class="form-check-label" for="m_others_country">
                            Another Country
                          </label>
                        </div>
                      </div>

                      <input type="hidden" name="fdsf">

                      <div class="col-12">
                        <div class="form-group">
                          @php
                          $field_lable = "Country";
                          $required = "required";
                          @endphp
                          {{ html()->label($field_lable) }} {!! fielf_required($required) !!}

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
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                @php
                                $field_name = 'm_post_code';
                                $id = 'm_post_code';
                                $field_lable = "Post Code";
                                $field_placeholder = $field_lable;
                                $required = "required";
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
    
                                <select name="m_district" class="form-control select2" id="m_district">
                                    <option value="">{{ 'Select district' }}</option>
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

    <div class="col-6">

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
                        <div id="District&PostCode">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        @php
                                        $field_name = 'p_post_code';
                                        $id = 'p_post_code';
                                        $field_lable = "Post Code";
                                        $field_placeholder = $field_lable;
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
    
                                        <select name="p_district" class="form-control select2" id="p_district">
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
    </div>
        
        <div class="row">
            <div class="col-12">
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
                    $field_placeholder = 'designation';
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
    <div class="col-6">

        <div class="form-group">

            @php
            $field_name = 'name_of_spouse';
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

    <div class="col-2">
        <h5 class="card-title text-center mr-5 mt-4">Children</h5>
    </div>
    <div class="col-2">
        <div class="form-group">
            @php
            $field_name = 'no_of_son';
            $field_lable = 'Son';
            $field_placeholder = 'No. Of Son';
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
            $field_placeholder = 'No. Of Daughter';
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

            <select name="cat_of_member[]" class="form-control select2" id="cat_of_member" multiple="multiple">
                <option value="">{{ 'Select Member Type' }}</option>
                @foreach($member_types as $member_type)
                <option value="{{ $member_type->id }}" data-fees="{{$member_type->subcription_fee}}">{{
                    $member_type->name }}</option>
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
        $required = "";
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
                    </p>


                    <p id="format_error" style="display:none; color:#FF0000;">
                        Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                    </p>
                    <p id="size_error" style="display:none; color:#FF0000;">
                        Maximum File Size Limit is 300KB.
                    </p>
                    <p id="dimension_error" style="display:none; color:#FF0000;">
                        Invalid image dimension. Maximum image dimension is width:350px and height:350px.<br>
                        <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image"
                            target="_blank">Link -1</a><span class="text-dark"> or </span>
                        <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>
                    </p>


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
                    </p>


                    <p id="s_format_error" style="display:none; color:#FF0000;">
                        Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                    </p>
                    <p id="s_size_error" style="display:none; color:#FF0000;">
                        Maximum File Size Limit is 30KB.
                    </p>
                    <p id="s_dimension_error" style="display:none; color:#FF0000;">
                        Invalid image dimension. Maximum image dimension is width:300px and height:80px.<br>
                        <span class="text-dark">To crop image : </span><a href="https://www.iloveimg.com/crop-image"
                            target="_blank">Link -1</a><span class="text-dark"> or </span>
                        <a href="https://www.photoresizer.com/" target="_blank">Link -2</a>
                    </p>

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