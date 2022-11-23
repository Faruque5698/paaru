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
      <!-- <div class="col-4">
        <div class="float-right">
          <a href="{{ route('backend.aboutus.create')}}" class="btn btn-success m-1 btn-sm" data-toggle="tooltip" title="Create New"><i class="fas fa-plus-circle"></i> Create</a>
        </div>
      </div> -->

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
              <th>Slogan</th>
              <th>Image</th>
              <th>Created by</th>
              <th>Updated by</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>

            @if($about_us->count() > 0)
            @foreach($about_us as $key=>$about)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ str_limit($about->name, 50).'...' }}</td>
              <td>{{ str_limit($about->slogan,50) }}</td>
              <td>
                <img src="{{ asset('assets/images/aboutus/'.$about->image) }}" class="img-fluid img-thumbnail" style="max-width:100px;" alt="{{ $about->name }}">
              </td>
              <td>{{ $about->users_created_by ?  $about->users_created_by->name : ' ' }}</td>
              <td>{{ $about->users_updated_by ?  $about->users_updated_by->name : 'Not Published Yet' }}</td>
              <td>
                @if($about->publication_status == 1)
                <span class="badge badge-success"> {{ 'Published' }}</span>
                @else
                <span class="badge badge-warning"> {{ 'Unpublished' }}</span>
                @endif
              </td>

              <td class="text-center">
                <a href="{{ route("backend.$route_path.edit", $about->id) }}" class="btn btn-success btn-sm" title="Edit">
                  <span class="fas fa-edit"></span>
                </a>
                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$about->id}}" title="Delete">
                  <span class="fas fa-trash"></span>
                </a>
              </td>

            </tr>

            <!-- Delete Modal -->
            <div id="deleteModal{{$about->id}}" class="modal fade">
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
                    <form action="{{ route("backend.$route_path.destroy", $about->id) }}" method="POST">
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
            @endif

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
      "aaSorting": [[ 0, "asc" ]]
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