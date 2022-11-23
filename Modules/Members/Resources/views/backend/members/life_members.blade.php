@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }}
@stop

@push ('after-styles')
<!-- Modal CSS -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/custom_css/modal.css') }}">
@endpush

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.dashboard')!!}"><i class="icon-speedometer"></i> Dashboard</a>
</li>
<li class="breadcrumb-item active"><i class="{{ $module_icon }}"></i> {{ $module_title }}</li>
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
          {{ title_case($module_title) }} Management Dashboard
        </div>
      </div>
      <!--/.col-->
      <div class="col-4">
        <div class="float-right">
          <div class="btn-group" role="group" aria-label="Toolbar button groups">
            <div class="btn-group" role="group">
            </div>
          </div>
        </div>
      </div>

      <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row mt-4">
      <div class="col">
        <table id="datatable" class="table table-bordered table-hover table-responsive-sm text-center">
          <thead>
            <tr>
              <th>SL No.</th>
              <th>Name</th>
              <th>Passing Year</th>
              <th>Status</th>
              <th>Parru Status</th>
              <th>Contact Info</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>

            @foreach($life_time_members as $key =>$member)

            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $member->name }}</td>
              <td>{{ $member->bachelor_year }}</td>
              <td>{{ $member->occupation }}</td>

              <td>{{-- $member->types->name --}}</td>
              <td>{{ $member->m_phone }}</td>

              <td class="text-center">
                <img
                  src="{{ $member->image ? asset('assets/images/members/'.$member->image) : asset('assets/images/president.png') }}"
                  class="img-fluid img-thumbnail" style="max-width:100px;" alt="Member's Image">
              </td>
              <td>
                <a href="#" class="btn btn-primary btn-xs" title="View" data-toggle="modal" data-target=""
                  data-id="{{ $member->id }}" id="member">
                  <span class="fas fa-eye"></span>
                </a>

              </td>
            </tr>


            <!-- unpublish modal  -->
            <div class="modal fade" id="unpublishModal{{$member->id}}">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3 class="text-info text-center">Are you sure to block this!!</h3>
                  </div>
                  <div class="modal-footer">
                    <form action='{{ route("backend.$module_name.unpublished", $member) }}' method="POST">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- unpublish modal  -->

            <!-- publish modal  -->
            <div class="modal fade" id="publishModal{{$member->id}}">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3 class="text-info text-center">Are you sure to approve this member?</h3>
                  </div>
                  <div class="modal-footer">
                    <form action='{{ route("backend.$module_name.published", $member) }}' method="POST">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- publish modal  -->


            <!-- Delete Modal -->
            <div id="deleteModal{{$member->id}}" class="modal fade">
              <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="icon-box">
                      <i class="fas fa-times"></i>
                    </div>
                    <h4 class="modal-title">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                  </div>
                  <div class="modal-footer">
                    <form action="{{ route('backend.members.destroy', $member) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Delete Modal -->

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<!-- Start Member Details Modal -->
<div class="modal fade member-details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="name">MD. Selim Mahmud</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7">
            <p id="occupation">Instructor</p>
            <p id="designation">Designation</p>
            <p id="m_location">Hatemkhan Kolabagan</p>
            <p id="date_of_birth">Date Of Birth</p>
          </div>
          <div class="col-md-5">
            <img id="member_image" src="{{ asset('assets/images/members/user.png') }}" alt="Member's Image">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover" id="table">
                <tbody>
                  <tr>
                    <td>Title</td>
                    <td id="title">-</td>
                  </tr>
                  <tr>
                    <td>Bachelor year</td>
                    <td id="bachelor_year">-</td>
                  </tr>
                  <tr>
                    <td>Bachelor Roll</td>
                    <td id="bachelor_roll">-</td>
                  </tr>
                  <tr>
                    <td>Masters Year</td>
                    <td id="masters_year">-</td>
                  </tr>
                  <tr>
                    <td>Masters Roll</td>
                    <td id="masters_roll">-</td>
                  </tr>
                  <tr>
                    <td>Mphil Year</td>
                    <td id="mphil_year">-</td>
                  </tr>
                  <tr>
                    <td>Mphil Roll</td>
                    <td id="mphil_roll">-</td>
                  </tr>
                  <tr>
                    <td>PHD Year</td>
                    <td id="phd_year"></td>
                  </tr>
                  <tr>
                    <td>PHD Roll</td>
                    <td id="phd_roll"></td>
                  </tr>
                  <tr>
                    <td>Name Of Spouse</td>
                    <td id="name_of_spouse">-</td>
                  </tr>
                  <tr>
                    <td>No Of Children</td>
                    <td id="no_of_children">-</td>
                  </tr>
                  <tr>
                    <td>Contact</td>
                    <td id="m_phone">01711 XXXYYY</td>
                  </tr>
                  <tr>
                    <td>Location</td>
                    <td id="p_address">-</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td id="m_email">email@domain.com</td>
                  </tr>
                  <tr>
                    <td>Payment By</td>
                    <td id="mode_of_payment">-</td>
                  </tr>
                  <tr>
                    <td>Payment Date</td>
                    <td id="payment_date">-</td>
                  </tr>
                  <tr>
                    <td>Transaction Id</td>
                    <td id="transaction_id">-</td>
                  </tr>
                  <tr>
                    <td>Bank Name</td>
                    <td id="bank_name">-</td>
                  </tr>
                  <tr>
                    <td>Branch Name</td>
                    <td id="branch_name">-</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- End Member Details Modal -->
@stop


@push ('after-styles')
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

<!-- scripts for showing a single member -->
<script type="text/javascript">
  $(document).ready(function(){

  var token = $('meta[name="csrf-token"]').attr('content');

  var app_url = "{{ env("APP_URL") }}";


  $(document).on('click', '#member', function(e){
    e.preventDefault();
    var id = $(this).attr('data-id');

    $.ajax({
      url: "{{ route('backend.members.get_member') }}",
      method: 'POST',
      data: {id:id, _token:token},
      // beforeSend:function(){
      //   console.log(id);
      // },
      success: function(data) {

        console.log(data.district);

        var address = data.m_location+', '+data.m_post_code+', '+data.district;
        var p_address = data.p_location+', '+data.p_post_code+', '+data.p_district;
        var member_image = data.image;

        $('#title').html(data.title)
        $('#name').html(data.name)
        $('#occupation').html(data.occupation)
        $('#designation').html(data.designation)
        $('#date_of_birth').html(data.date_of_birth)
        $('#bachelor_year').html(data.bachelor_year)
        $('#bachelor_roll').html(data.bachelor_roll)
        $('#name_of_spouse').html(data.name_of_spouse)
        $('#m_location').html(address)
        $('#m_phone').html(data.m_phone)
        $('#m_email').html(data.m_email)
        // $("#member_image").attr("src",app_url+"/assets/images/members/"+data.image);
        if (member_image == "") {
          $("#member_image").attr("src",app_url+"/assets/images/president.png");
        }else{
          $("#member_image").attr("src",app_url+"/assets/images/members/"+data.image);
        }
        $("#masters_year").html(data.masters_year)
        $("#masters_roll").html(data.masters_roll)
        $("#mphil_year").html(data.mphil_year)
        $("#mphil_roll").html(data.mphil_roll)
        $("#phd_year").html(data.phd_year)
        $("#phd_roll").html(data.phd_roll)
        $("#p_address").html(data.p_address)
        $("#no_of_children").html(data.no_of_children)
        $("#mode_of_payment").html(data.mode_of_payment)
        $("#payment_date").html(data.payment_date)
        $("#transaction_id").html(data.transaction_id)
        $("#bank_name").html(data.bank_name)
        $("#branch_name").html(data.branch_name)
        
      }
    });

    $(".member-details").modal('show');

  });


});

</script>
<!-- scripts for showing a single member -->

@endpush