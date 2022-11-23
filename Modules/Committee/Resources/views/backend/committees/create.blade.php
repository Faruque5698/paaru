@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }}
@stop

@push ('after-styles')
<!-- Modal CSS -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/custom_css/modal.css') }}">
@endpush

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.dashboard')!!}"><i class="icon-speedometer"></i> Dashboard</a></li>
<li class="breadcrumb-item"><a href='{!!route("backend.$module_path.index")!!}'><i class="{{ $module_icon }}"></i> {{ $module_title }}</a></li>
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
          {{ title_case($module_name) }} Management Dashboard
        </div>
      </div>
      <!--/.col-->
      <div class="col-4">
        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
          <a href="{{ route("backend.$module_path.index") }}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="{{ $module_title }} List"><i class="fas fa-list-ul"></i> List</a>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <hr>

    <div class="row mt-4">
      <div class="col">

        <form method="post">
          @csrf

          @include ("$module_name::backend.$module_path.form")

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                {{ html()->button($text = "<i class='fas fa-save'></i> " . ucfirst('Save') . "", $type = 'submit')->id('submit')->class('btn btn-success') }}
              </div>
            </div>
            <div class="col-6">
              <div class="float-right">
                <div class="form-group">
                  <a type="button" class="btn btn-warning" href="{{ route('backend.committees.index') }}"><i class="fas fa-reply"></i> Cancel</a>
              </div>
              </div>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>


</div>

<!-- Start Show all members -->
<div class="modal fade member-details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Select member for create execuitive committee</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

      <div class="row">
        <div class="col-sm-12">
          <div class="table-responsive">

            <table id="datatable" class="table table-bordered table-hover table-responsive-sm text-center">
              <thead>
                <tr>
                  <th>SL No.</th>
                  <th>Name</th>
                  <th>Occupation</th>
                  <th>Types</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @if($members->count() > 0)
                @foreach($members as $key=>$member)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $member->name }}</td>
                  <td>{{ $member->occupation }}</td>
                  <td>{{ $member->types->name }}</td>
                  <td>
                    <img src="{{ asset('assets/images/members/' . $member->image) }}" class="img-fluid img-thumbnail" style="max-width:50px; max-height:50px;" alt="{{ $member->name }}">
                  </td>
                  <td>
                    <a href="#" class="btn btn-primary btn-xs" title="Select" data-id="{{ $member->id }}" id="member">Select</a>
                  </td>
                </tr>
                @endforeach
                @endif

              </tbody>

            </table>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
<!-- End Show all members -->

<!-- Committee create Modal -->
<div class="modal fade commitee_modal">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="fas fa-times"></i>
        </div>
        <h4 class="modal-title">You can not create committee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Already have this committe so you cannot create again you can edit.</p>
      </div>
      <div class="modal-footer">
        <a href="{{ route("backend.$module_path.index") }}" class="btn btn-danger">Edit</a>
        <a href="" data-dismiss="modal" class="btn btn-info">Cancel</a>
      </div>
    </div>
  </div>
</div>
<!-- Committee create Modal -->

@stop

@push('after-styles')
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="{{ asset('assets/backend/vendor/datatable/datatables.min.css') }}">
@endpush


@push ('after-scripts')
<!-- DataTables Core and Extensions -->
<script type="text/javascript" src="{{ asset('assets/backend/vendor/datatable/datatables.min.js') }}"></script>

<script type="text/javascript">
$(function () {

  $("#datatable").DataTable(
    {
      "aaSorting": [[ 0, "asc" ]],
      "aLengthMenu": [[10, 15, 25, 50, 100 , -1], [10, 15, 25, 50, 100, "All"]],
      "iDisplayLength": 6,
    }
  );

  $('#table1').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": false,
    "info": true,
    "autoWidth": false
  });
});

</script>

<!-- Ajax Scripts -->
<script type="text/javascript">

$(document).ready(function(){

  var app_url = "{{ env("APP_URL") }}";

  var  type_id ='';
  var  member_id ='';
  // store the csrf token
  var token = $("input[name='_token']").val();

  // When change the committee types this function will fire
  $("#type_id").change(function(){

    // Store the selected member types value
    type_id = $(this).children("option:selected").val();


    // CommitteTypes id 6 that means execuitive member may have multiple member and that checking
    // CommitteTypes id 2 means vice president may have multiple member
    if(type_id < 6 && type_id != 2 && type_id != 4 && type_id != 6){
      // Check selected committee already exist or not
      $.ajax({
        url: "{{ route('backend.committees.committe_check') }}",
        method: 'POST',
        data: {type_id:type_id, _token:token},
        beforeSend:function(){
          // console.log(type_id);
        },
        success: function(data) {
          // data = true means you can't create a committe
          if(data){
            // This modal inform you that you can't create committee already have one
            $(".commitee_modal").modal('show');
          }else{
            // show all members to create committee
            $(".member-details").modal('show');
          }
        }
      });
      // End Check selected committee already exist or not
    }else{
      //Show the modal
      $(".member-details").modal('show');
    }
  });

  // When click the select button this function will fire
  $(document).on('click', '#member', function(e){
    e.preventDefault();
    // console.log(type_id);
    // get the single member id
    member_id = $(this).attr('data-id');
    // console.log(member_id);
    // hide the modal
    $(".member-details").modal('hide');

    //Send the ajax request to get the single member
    $.ajax({
      url: "{{ route('backend.committees.get_single_member') }}",
      method: 'POST',
      data: {member_id:member_id, _token:token},
      beforeSend:function(){
        //console.log(member_id);
      },
      success: function(data) {
        // set this field to form
        $('#title').val(data.title)
        $('#name').val(data.name)
        $('#occupation').val(data.occupation)
        $('#designation').val(data.designation)
        $('#email').val(data.m_email)
        $('#mobile').val(data.m_phone)
        $('#post_code').val(data.m_post_code)
        $('#date_of_birth').val(data.date_of_birth)
        $("#image").attr("src",app_url+"/assets/images/members/"+data.image);
      }
    });

  });

  // Now save to database
  $(document).on('click', '#submit', function(e){
    e.preventDefault();

    $.ajax({
      url: "{{ route('backend.committees.store') }}",
      method: 'POST',
      data: {member_id:member_id, type_id:type_id, _token:token},
      // beforeSend:function(){
      //   console.log(type_id);
      // },
      success: function(data) {

        if(!$.trim(data)){
          alert("Failed to create committee!!!");
        }else{
          window.location.replace('/admin/committees');
        }

      }
    });

  });

});
</script>
<!-- Ajax Scripts -->


@endpush
