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
          <a href="{{ route("backend.$module_name.create")}}" class="btn btn-success m-1 btn-sm" data-toggle="tooltip" title="Create New"><i class="fas fa-plus-circle"></i> Create</a>
        </div>
      </div>

      <!--/.col-->
    </div>
    <!--/.row-->

    <!-- Content Start -->
    <div class="row mt-4">
      <div class="col">
        <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
          <thead>
            <tr>
              <th>SL No</th>
              <th>Gallery Name</th>
              <th>Cover Image</th>
              <th>Created By</th>
              <th>Status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($galleries as $key => $gallery)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{$gallery->gallery_name}}</td>
              <td>
                <center>
                  <img src="{{ asset('assets/images/gallery/' . $gallery->cover_img) }}" class="img-fluid img-thumbnail" style="max-width:65px;" alt="{{ $gallery->gallery_name }}">
                </center>
              </td>
              <td>@if($gallery->updated_by)
                {{$gallery->users_updated_by->name}}
                @else
                {{ $gallery->created_by ? $gallery->users_created_by->name : '' }}
                @endif
              </td>

              <td>
                @if($gallery->status == 1)
                <span class="badge badge-success"> {{ 'Published' }}</span>
                @else
                <span class="badge badge-danger">{{ 'Unpublished' }}</span>
                @endif
              </td>
              <td class="text-center">
                @if($gallery->status == 1)
                <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#unpublishModal{{$gallery->id}}" title="Unpublished">
                  <span class="fas fa-arrow-down"></span>
                </a>
                @else
                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#publishModal{{$gallery->id}}" title="Published">
                  <span class="fas fa-arrow-up"></span>
                </a>
                @endif
                <a href="{{route('backend.gallery.show', $gallery->id)}}" class="btn btn-primary btn-sm" title="View">
                  <span class="fas fa-eye"></span>
                </a>
                <a href="{{ route("backend.$module_name.more", $gallery)}}" class="btn btn-success btn-sm" title="Add Image">
                  <span class="fas fa-images"></span>
                </a>
                <a href="{{ route("backend.gallery.edit", $gallery->id) }}" class="btn btn-success btn-sm" title="Edit">
                  <span class="fas fa-edit"></span>
                </a>

                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$gallery->id}}" title="Delete">
                  <span class="fas fa-trash"></span>
                </a>

              </td>
            </tr>


            <!-- unpublished Modal -->
            <div class="modal fade" id="unpublishModal{{$gallery->id}}">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3 class="text-info text-center">Are you sure to unpublish this!!</h3>
                  </div>
                  <div class="modal-footer">
                    <form action="{{ route("backend.gallery.unpublished", $gallery->id) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- unpublish modal -->

            <!-- published modal -->
            <div class="modal fade" id="publishModal{{$gallery->id}}">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3 class="text-info text-center">Are you sure to Published this!!</h3>
                  </div>
                  <div class="modal-footer">
                    <form action="{{ route("backend.gallery.published", $gallery->id) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Published modal -->


            <!-- Delete Modal -->
            <div id="deleteModal{{$gallery->id}}" class="modal fade">
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
                    <form action="{{ route("backend.gallery.destroy", $gallery->id) }}" method="POST">
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

            <!-- View Modal -->
            <div class="modal fade" id="viewModal{{$gallery->id}}">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                  </div>
                  <div class="modal-footer">
                    <h2>View</h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- View Modal -->
          </td>
          @endforeach
        </tbody>

      </table>
    </div>
  </div>
  <!-- Content End -->
</div>

</div>

</div>
@stop

@push ('after-styles')
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="{{ asset('assets/vendor/datatable/datatables.min.css') }}">
@endpush

@push ('after-scripts')
<!-- DataTables Core and Extensions -->
<script type="text/javascript" src="{{ asset('assets/vendor/datatable/datatables.min.js') }}"></script>

<script type="text/javascript">

$(function () {
  $("#datatable").DataTable(
    {
      "aaSorting": [[ 0, "desc" ]],
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
