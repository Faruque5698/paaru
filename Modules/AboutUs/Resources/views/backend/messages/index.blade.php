@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }}
@stop

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.dashboard')!!}"><i class="icon-speedometer"></i> Dashboard</a></li>
<li class="breadcrumb-item active"><i class="{{ $module_icon }}"></i> {{ $module_title }}</li>
@stop

@push ('after-styles')
<!-- Modal CSS -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/custom_css/modal.css') }}">
@endpush

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
              <th>Position</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>

            @foreach($messages as $key=>$msg)

            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $msg->id == 1 ? (empty($ps_member) ? 'Committte Not Created!' : $ps_member->name) : (empty($vps_member) ? 'Committte Not Created!' : $vps_member->name_eng) }}</td>
              <td>{{ $msg->id == 1 ? 'President' : 'General Secretary'  }}</td>
              <td>{!! str_limit(strip_tags($msg->message), 50) !!}</td>
              <td>
                <a href="{{ route("backend.$route_path.edit", $msg->id) }}" class="btn btn-success btn-xs" title="Edit">
                  <span class="fas fa-edit"></span>
                </a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

</div>


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
      "aLengthMenu": [[5, 10, 15, 25, 50, 100 , -1], [5, 10, 15, 25, 50, 100, "All"]],
      "iDisplayLength": 5,
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

@endpush
