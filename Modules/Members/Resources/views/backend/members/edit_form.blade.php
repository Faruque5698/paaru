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
                <h5 class="card-title">Mailing Address</h5>
                <div class="row">
                    <div class="col-md-12 my-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="{{$member->m_country??"Bangladesh"}}" onclick="mSelfCountry();" type="radio" name="checked_m_country" id="m_self_country" {{$member->m_country == NULL || $member->m_country == "Bangladesh" ?"checked":""}}  />
                          <label class="form-check-label" for="m_self_country">
                            Bangladesh
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="{{$member->m_country??""}}" name="checked_m_country" id="m_others_country" onclick="mAnotherCountry();" 
                          {{isset($member->m_country) && $member->m_country != "Bangladesh" ?"checked":""}} />
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
                            $field_name = 'm_location';
                            $field_lable = "Address";
                            $field_placeholder = "House/Rode: , Village/Area/Word: , Post Office:";
                            $required = "required";
                            @endphp
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}


                            <textarea class="form-control" name="m_location" placeholder="House/Rode: , Village/Area/Word: , Post Office:" id="m_location" cols="10" required rows="3">{{$member->m_location}}</textarea>
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
                                $id = 'm_district';
                                $field_lable = "District";
                                $required = "required";
                                @endphp
                                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                <select name="m_district" id="m_district" class="form-control select2">
                                    <option value="">{{ 'Select district' }}</option>
                                    @foreach($districts as $district)
    
                                    @php
                                    if($district->id == $member->m_district){
                                    $selected = 'selected';
                                    }else{
                                    $selected = '';
                                    }
                                    @endphp
    
                                    <option value="{{ $district->id }}" {{ $selected }}>{{ $district->name }}</option>
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
                                  <input class="form-check-input" value="{{$member->p_country}}" onclick="pSelfCountry();" type="radio" name="checked_p_country" id="p_self_country" {{isset($member->p_country) && $member->p_country == "Bangladesh" ?"checked":""}}  />
                                  <label class="form-check-label" for="p_self_country">
                                    Bangladesh
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" value="{{$member->p_country??""}}" name="checked_p_country" id="p_others_country" onclick="pAnotherCountry();" {{isset($member->p_country) && $member->p_country != "Bangladesh" ?"checked":""}} />
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
                                    $field_name = 'p_location';
                                    $field_lable = "Address";
                                    $field_placeholder = "House/Rode: , Village/Area/Word: , Post Office:";
                                    $required = "";
                                    @endphp
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}

                                    <textarea name="p_location" id="p_location" class="form-control" placeholder="House/Rode: , Village/Area/Word: , Post Office:" cols="10" rows="3">{{$member->p_location}}</textarea>
                                </div>
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
                                        <select name="p_district" id="p_district" class="form-control select2">
                                            <option value="">{{ 'Select district' }}</option>
                                            @foreach($districts as $district)
                                            @php
                                            if($district->id == $member->p_district){
                                            $selected = 'selected';
                                            }else{
                                            $selected = '';
                                            }
                                            @endphp
                                            <option value="{{ $district->id }}" {{ $selected }}>{{ $district->name }}
                                            </option>
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
                    $field_placeholder = $field_name;
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
            $field_placeholder = 'Number Of Son';
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
            $field_placeholder = 'Number Of Daughter';
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
        <div class="form-group w-100">

            @php
            $field_name = 'cat_of_member';
            $field_lable = "Member Types";
            $field_placeholder = $field_lable;
            $required = "required";
            @endphp



            @php
            $cat_of_member_array = json_decode($member->cat_of_member);

            $cat_of_member_value;
            if(is_array($cat_of_member_array)){
            $cat_of_member_value = $cat_of_member_array ;
            }else{
            $cat_of_member_value[]= (string)$cat_of_member_array;
            }
            @endphp


            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            <select name="cat_of_member[]" class="form-control" id="cat_of_member" multiple="multiple">
                <option value="">{{ 'Select Member Type' }}</option>
                @foreach($member_types as $member_type)


                <option value="{{ $member_type->id }}" @if(in_array((string)$member_type->id, $cat_of_member_value))

                    selected

                    @endif>{{ $member_type->name }}</option>
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

        <div class="form-group">
            @php
            $field_name = 'mode_of_payment';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
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
                    <img id="show"
                        src="{{ $member->image ? asset('assets/images/members/'.$member->image) : asset('assets/images/members/user.png') }}"
                        alt="your image" width="180" height="180" />
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
                    <img id="s_show"
                        src="{{ $member->signature ? asset('assets/images/signatures/'.$member->signature) : asset('assets/images/signatures/signature.jpg') }}"
                        alt="your image" width="300" height="80" />
                </div>
            </div>
        </div>
    </div>
</div>