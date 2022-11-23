@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }}
@stop

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.dashboard')!!}"><i class="icon-speedometer"></i> Dashboard</a>
</li>
<li class="breadcrumb-item"><a href='{!!route("backend.$module_name.index")!!}'><i class="{{ $module_icon }}"></i> {{
    $module_title }}</a></li>
<li class="breadcrumb-item active"> {{ $module_action }}</li>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-8">
        <h4 class="card-title mb-0">
          <i class="{{ $module_icon }}"></i> {{ $module_title }} <small class="text-muted">{{ $module_action }}</small>
        </h4>
        <div class="small text-muted">
          Member Management Dashboard
        </div>
      </div>
      <!--/.col-->
      <div class="col-4">
        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
          <a href='{{ route("backend.$module_name.index") }} ' class="btn btn-secondary btn-sm ml-1"
            data-toggle="tooltip" title="{{ $module_title }} List"><i class="fas fa-list-ul"></i> List</a>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <hr>

    <div class="row mt-4">
      <div class="col">

        {{ html()->modelForm($member, 'PATCH', route('backend.members.update', $member))->attribute('enctype',
        'multipart/form-data')->class('form-horizontal')->open() }}

        @include ("members::backend.$module_name.edit_form",["member_types"=>$member_types])

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              {{ html()->button($text = "<i class='fas fa-save'></i> " . ucfirst($module_action) . "", $type =
              'submit')->id('submit')->class('btn btn-success') }}
            </div>
          </div>
          <div class="col-6">
            <div class="float-right">
              <div class="form-group">
                <a type="button" class="btn btn-warning" href="{{ route('backend.members.index') }}"><i
                    class="fas fa-reply"></i> Cancel</a>
              </div>
            </div>
          </div>
        </div>

        {{ html()->form()->close() }}

      </div>
    </div>
  </div>

</div>

@stop

@push('after-styles')
<style>
  .error {
    color: red;
  }
</style>
<!-- Custom Error Color -->
<link rel="stylesheet"
  href="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/css/tempusdominus-bootstrap-4.min.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/backend/plugins/select2/select2.min.css') }}" />

@endpush

@push('after-scripts')
<script type="text/javascript" src="{{ asset('assets/backend/vendor/moment/moment.min.js') }}"></script>
<script type="text/javascript"
  src="{{ asset('assets/backend/vendor/bootstrap-4-datetime-picker/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/plugins/select2/select2.min.js') }}"></script>

<script type="text/javascript">
  $(function() {

  $('.datetime').datetimepicker({
    format: 'YYYY-MM-DD',
    icons: {
      time: 'far fa-clock',
      date: 'far fa-calendar-alt',
      up: 'fas fa-arrow-up',
      down: 'fas fa-arrow-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right',
      today: 'far fa-calendar-check',
      clear: 'far fa-trash-alt',
      close: 'fas fa-times'
    }
  });
});
</script>


<script type="text/javascript">
  $(function() {
  $('.datetime_payment_date').datetimepicker({
    format: 'YYYY-MM-DD',
    icons: {
      time: 'far fa-clock',
      date: 'far fa-calendar-alt',
      up: 'fas fa-arrow-up',
      down: 'fas fa-arrow-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right',
      today: 'far fa-calendar-check',
      clear: 'far fa-trash-alt',
      close: 'fas fa-times'
    }
  });
});
</script>


<!-- Image Size Validation -->
<script>
  $('input[type="submit"]').prop("disabled", true);
var a=0;
//binds to onchange event of your input field
$('#image').bind('change', function() {

  if ($('input:submit').attr('disabled',false)){
    $('input:submit').attr('disabled',true);
  }

  var ext = $('#image').val().split('.').pop().toLowerCase();

  if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
    $('#format_error').slideDown("slow");
    $('#size_error').slideUp("slow");
    a=0;
  }else{
    var picsize = (this.files[0].size);

    if (picsize > 300000){
      $('#size_error').slideDown("slow");
      a=0;
    }else{
      a=1;
      $('#size_error').slideUp("slow");
    }
    $('#format_error').slideUp("slow");
    if (a==1){
      $('input:submit').attr('disabled',false);
    }
  }

});

</script>
<!-- Image Size Validation -->

<!-- Script for image size validation -->
<script type="text/javascript">
  var _URL = window.URL || window.webkitURL;

$('#image').change(function () {

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

    if(imgwidth > maxwidth || imgheight > maxheight){
      m = 0;
      $('#dimension_error').slideDown("slow");
    }else{
      m = 1;
      $('#dimension_error').slideUp("slow");
    }

    if (m==1){
      $('#submit').attr('disabled',false);
    }else{
      $('#submit').attr('disabled',true);
    }
  }

});

</script>
<!-- Script for image size validation -->


<!-- script for image place holder -->
<script type="text/javascript">
  $(document).ready(function(){

  $("#image").change(function(){

    showImage(this);

  });

  function showImage(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
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
var a=0;
//binds to onchange event of your input field
$('#signature').bind('change', function() {

  if ($('input:submit').attr('disabled',false)){
    $('input:submit').attr('disabled',true);
  }

  var ext = $('#signature').val().split('.').pop().toLowerCase();

  if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
    $('#s_format_error').slideDown("slow");
    $('#s_size_error').slideUp("slow");
    a=0;
  }else{
    var picsize = (this.files[0].size);

    if (picsize > 30000){
      $('#s_size_error').slideDown("slow");
      a=0;
    }else{
      a=1;
      $('#s_size_error').slideUp("slow");
    }
    $('#s_format_error').slideUp("slow");
    if (a==1){
      $('input:submit').attr('disabled',false);
    }
  }

});

</script>
<!-- signature Size Validation -->

<!-- Script for signature size validation -->
<script type="text/javascript">
  var _URL = window.URL || window.webkitURL;

$('#signature').change(function () {

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

    if(imgwidth > maxwidth || imgheight > maxheight){
      m = 0;
      $('#s_dimension_error').slideDown("slow");
    }else{
      m = 1;
      $('#s_dimension_error').slideUp("slow");
    }

    if (m==1){
      $('#submit').attr('disabled',false);
    }else{
      $('#submit').attr('disabled',true);
    }
  }

});

</script>
<!-- Script for signature size validation -->

<!-- script for signature place holder -->
<script type="text/javascript">
  $(document).ready(function(){

  $("#signature").change(function(){

    showImage(this);

  });

  function showImage(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
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
{{-- <script type="text/javascript">
  var check_member_type;
var type_id;

var types = {!! json_encode($member_types) !!}

$("#show_div_filter_member").css("display", "");

$(document).ready(function(){

  $("span .select2.select2-container.select2-container--default.select2-container--above").addClass("w-100");

  $("#cat_of_member").change(function(event){
    event.preventDefault();
    let ammou = 0;
    check_member_type = $(this).children("option:selected").val();
    let d = $("#select2-cat_of_member-container").children().length;
    if (d > 0) {
      let VisibleLiTitles = $('#select2-cat_of_member-container li:visible').map(function () {
        return this.title;
      }).get().join('-');
      let arr = VisibleLiTitles.split("-");
      arr.forEach(function (ar) {
        types.forEach(function (type) {
          if (type.name == ar) {
            ammou+=type.subcription_fee;
          }
        });
      });
      document.getElementById("amount_payable").value = ammou;

      if (ammou == 0) {
        $("#show_div_filter_member").css("display", "none");
      } else {
        $("#show_div_filter_member").css("display", "");
      }

    }

    // check_member_type = $(this).children("option:selected").val();
    //
    // types.forEach(function(type){
    //   if(type.id == check_member_type){
    //     // console.log(type.subcription_fee)
    //     if(type.subcription_fee==0){
    //       $("#show_div_filter_member").css("display", "none");
    //     }
    //     else{
    //     $("#show_div_filter_member").css("display", "");
    //   }
    //   }
    // });
    //
    // type_id = $(this).children("option:selected").val();
    //
    // types.forEach(function(type){
    //   if(type.id == type_id){
    //     document.getElementById("amount_payable").value = type.subcription_fee;
    //   }
    // });

  });

});

</script> --}}

<script type="text/javascript">
  $(document).ready(function(){


        $('#cat_of_member').select2({
          placeholder: 'Select...',
          allowClear: true,
          width: "540px",
          // width: "resolve",
        });

  // $("form-control.select2 + span").addClass("w-100");
  // $("form-control.select2 + span.select2.select2-container.select2-container--default.select2-container--focus select2-container--open.select2-container--above").addClass("w-100");
   
    });
</script>
<!-- script for amount_payable -->

<!-- Script for show payment details -->
<script type="text/javascript">
  var payment_type;

$(document).ready(function(){

   $("#show_div").css("display", "none");

  $("#mode_of_payment").change(function(){

    payment_type = $(this).children("option:selected").val();

    if(payment_type == "Cash"){
      $("#show_div").css("display", "none");
    }else{
      $("#show_div").css("display", "");
    }

  });

});

</script>

<script>
  //Golbal 
    let isMailingAddress = true;
    let isPermanentAddress = true;
    let isChecked = true
    let html = "";
    const mailingCountry = "{{$member->m_country}}";
    const permanentCountry = "{{$member->p_country}}";


  //Start For Mailing Address
    const checked_m_country = document.querySelector('input[name="checked_m_country"]:checked');
    const m_country = document.getElementById("m_country");
    const PCD = document.getElementById("postCode&District");
    const mPpostCode = document.getElementById("m_post_code");
    const mDistrict = document.getElementById("m_district");
    let checked_m_countryValue = checked_m_country.value;
  //End For Mailing Address
  console.log(checked_m_countryValue);
  
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

      if(isChecked){
        if(checkedM !=="" && checkedM === "Bangladesh"){
          $("#m_country").select2().val("Bangladesh").trigger("change");
        }else if(checkedM !=="" &&  checkedM !== "Bangladesh"){
          $("#m_country").select2().val(checkedM).trigger("change");
        }

        if(checkedP !=="" && checkedP === "Bangladesh"){
          $("#p_country").select2().val("Bangladesh").trigger("change");
        }else if(checkedP !=="" && checkedP !== "Bangladesh"){
          $("#p_country").select2().val(checkedP).trigger("change");
        }
      }else{
      //check for Mailing address
      if(isMailingAddress){
        if(checkedM !=="" && checkedM === "Bangladesh"){
        $("#m_country").select2().val("Bangladesh").trigger("change");
        }else if(checkedM !=="" &&  checkedM !== "Bangladesh"){
          $("#m_country").select2().val(checkedM).trigger("change");
        }else{
          $("#m_country").select2().val("").trigger("change");
        }
      }
      
       //check for Permanent Address
       if(isPermanentAddress){
        if(checkedP !=="" && checkedP === "Bangladesh"){
        $("#p_country").select2().val("Bangladesh").trigger("change");
        }else if(checkedP !=="" && checkedP !== "Bangladesh"){
        $("#p_country").select2().val(checkedP).trigger("change");
        }else{
          $("#p_country").select2().val("").trigger("change");
        }
      }
    }


    }
  
    
    //call fetch country data function
    //fetchCountryData(checked_m_countryValue, checked_p_countryValue);
    //fetchCountryData(checked_m_countryValue);
  
  
  // For Mailing Address Start
    //on click call self country thats main Bangladseh
    function mSelfCountry(){
      isMailingAddress = true;
      isPermanentAddress = false;
      checked_m_countryValue = "Bangladesh";
      fetchCountryData(checked_m_countryValue,"");
      mPpostCode.required=true;
      mDistrict.required=true;
      PCD.style.display = "block";
      $('#m_district').select2({width: '100%'});
    }
  
  
    //on click call another country
    function mAnotherCountry(){
      isMailingAddress = true;
      isPermanentAddress = false;
      checked_m_countryValue = checked_m_country.value !="Bangladesh"?checked_m_country.value:"";
      console.log(checked_m_countryValue);
      fetchCountryData(checked_m_countryValue,"");
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
      isMailingAddress = false;
      isPermanentAddress = true;
      checked_p_countryValue = "Bangladesh";
      fetchCountryData("", checked_p_countryValue);
      DPC.style.display = "block";
      $('#p_district').select2({width: '100%'});
    }
  
  
    //on click call another country
    function pAnotherCountry(){
      isMailingAddress = false;
      isPermanentAddress = true;
      checked_p_countryValue = checked_p_country?.value??"";
      fetchCountryData("", checked_p_countryValue);
      pPpostCode.value="";
      DPC.style.display = "none";
      $("#p_district").select2().val("").trigger("change");
    }
  // For Permanent Address end

  //function calling depend of country
  
  try{
    if(mailingCountry !=="" && mailingCountry==="Bangladesh"){
      mSelfCountry();
    }else if(mailingCountry !=="" && mailingCountry !=="Bangladesh"){
      mAnotherCountry();
    }else{
      fetchCountryData(checked_m_countryValue);
    }
  }catch(err){
    console.log(err);
  }
  finally{
    $('#m_country').select2({width: '100%'});
    //isChecked = false;
  };

  try{
    if(permanentCountry !=="" && permanentCountry ==="Bangladesh"){
    pSelfCountry();
    }else if(permanentCountry !=="" && permanentCountry !=="Bangladesh"){
      pAnotherCountry();
    }else{
      fetchCountryData(checked_p_countryValue);
    }
  }catch(err){
    console.log(err);
  }
  finally{
    $('#p_country').select2({width: '100%'});
    if(permanentCountry == ""){
      isChecked = false;
    }
    
  };
   
  </script>
<!-- Script for show payment details -->

@endpush