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
<li class="breadcrumb-item"><a href='{!!route("backend.$route_path.index")!!}'><i class="{{ $module_icon }}"></i> {{ $module_title }}</a></li>
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
          <a href="{{ route("backend.$route_path.index") }}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="{{ $module_title }} List"><i class="fas fa-list-ul"></i> List</a>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <hr>

    <div class="row mt-4">
      <div class="col">

        {{ html()->modelForm($single_member)->class('form-horizontal')->open() }}

        @include ("$module_name::backend.$module_path.edit_form")

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              {{ html()->button($text = "<i class='fas fa-save'></i> " . ucfirst($module_action) . "", $type = 'submit')->id('submit')->class('btn btn-success') }}
            </div>
          </div>
          <div class="col-6">
            <div class="float-right">
              <div class="form-group">
                <a type="button" class="btn btn-warning" href="{{ route("backend.$route_path.index") }}"><i class="fas fa-reply"></i> Cancel</a>
              </div>
            </div>
          </div>
        </div>

        {{ html()->form()->close() }}

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
      <h5 class="modal-title">Select Member</h5>
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

@stop


@push ('after-styles')
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="{{ asset('assets/backend/vendor/datatable/datatables.min.css') }}">
@endpush


@push ('after-scripts')
<!-- DataTables Core and Extensions -->
<script type="text/javascript" src="{{ asset('assets/backend/vendor/datatable/datatables.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/backend/plugins/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
CKEDITOR.replace('re_al_member_content', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
CKEDITOR.replace('re_al_member_msg', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
</script>


<script type="text/javascript">
$(function () {

  $("#datatable").DataTable(
    {
      "aaSorting": [[ 0, "asc" ]],
      "aLengthMenu": [[10, 15, 25, 50, 100 , -1], [10, 15, 25, 50, 100, "All"]],
      "iDisplayLength": 10,
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

  var re_alumni_members = {!! json_encode($re_alumni_members->toArray()) !!};

  var single_member = {!! json_encode($single_member->toArray()) !!};

  var re_alumni_members_id = re_alumni_members.id;

  var  member_id ='';

  var re_al_member_content = '';
  var re_al_member_msg = '';
  var video_link = '';

  // store the csrf token
  var token = $("input[name='_token']").val();

  // When change the committee types this function will fire
  $("#show_members").click(function(){
    $(".member-details").modal('show');
  });

  // When click the select button this function will fire
  $(document).on('click', '#member', function(e){
    e.preventDefault();

    // get the single member id
    member_id = $(this).attr('data-id');
    // console.log(member_id);

    // hide the modal
    $(".member-details").modal('hide');

    //Send the ajax request to get the single member
    $.ajax({
      url: "{{ route('backend.renowned_alumni_members.get_re_alumni_member') }}",
      method: 'POST',
      data: {member_id:member_id, _token:token},
      beforeSend:function(){
        // console.log(member_id);
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


        if(data.renownedalumnious != null ){
          CKEDITOR.instances['re_al_member_content'].setData(data.renownedalumnious.re_al_member_content);
          CKEDITOR.instances['re_al_member_msg'].setData(data.renownedalumnious.re_al_member_msg);
          $('#video_link').val(data.renownedalumnious.video_link);
        }else{
          CKEDITOR.instances['re_al_member_content'].setData('');
          CKEDITOR.instances['re_al_member_msg'].setData('');
          $('#video_link').val('');
        }

      }
    });


  });

  // Now save to database
  $(document).on('click', '#submit', function(e){
    e.preventDefault();

    //To receive data from ckeditor..
    re_al_member_content = CKEDITOR.instances['re_al_member_content'].getData();
    re_al_member_msg = CKEDITOR.instances['re_al_member_msg'].getData();

    video_link = document.getElementById("video_url").value;

    if(member_id === ''){
      member_id = single_member.id;
    }

    $.ajax({
      url: "{{ route('backend.renowned_alumni_members.update_re_alumni_member') }}",
      method: 'POST',
      data: {
        member_id:member_id,
        re_alumni_members_id:re_alumni_members_id,
        re_al_member_content:re_al_member_content,
        re_al_member_msg:re_al_member_msg,
        video_link:video_link,
        _token:token
      },
      beforeSend:function(){
        // console.log(member_id);
      },
      success: function(data) {

        // console.log(data);

        if(!$.trim(data)){
          alert("Failed to create committee!!!");
        }else{
          window.location.replace('/admin/renowned_alumni_members');
        }

      },
      error: function (jqXHR, exception) {
        console.log(jqXHR);

      }
    });

  });

});
</script>
<!-- Ajax Scripts -->


@endpush
