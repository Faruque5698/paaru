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
        <table id="datatable" class="table table-bordered table-hover table-responsive-sm text-center">
          <thead>
            <tr>
              <th>SL No.</th>
              <th>Title</th>
              <th>Image</th>
              <th>Created By</th>
              <th>Updated By</th>
              <th>Publication Status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($sliders as $key => $slider)

            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $slider->title }}</td>
              <td><img src="{{ asset('assets/images/sliders/' . $slider->photo) }}" class="img-fluid img-thumbnail" style="max-width:100px;" alt="{{ $slider->title }}"></td>
              <td>{{ $slider->users_created_by ?  $slider->users_created_by->name : ' '}}</td>
              <td>{{ $slider->users_updated_by ?  $slider->users_updated_by->name : ' '}}</td>
              <td>{{ $slider->publication_status > 0 ? 'Published' : 'Unpublished' }}</td>

              <td>

                @if($slider->publication_status == 1)
                <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#unpublishModal{{$slider->id}}" title="Unpublished">
                  <span class="fas fa-arrow-down"></span>
                </a>
                @else
                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#publishModal{{$slider->id}}" title="Published">
                  <span class="fas fa-arrow-up"></span>
                </a>
                @endif

                <a href="#" class="btn btn-primary btn-sm" title="View" data-toggle="modal" data-target="#viewModal{{$slider->id}}">
                  <span class="fas fa-eye"></span>
                </a>

                <a href="{{ route("backend.$module_name.edit", $slider) }}" class="btn btn-success btn-sm" title="Edit">
                  <span class="fas fa-edit"></span>
                </a>

                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$slider->id}}" title="Delete">
                  <span class="fas fa-trash"></span>
                </a>

              </td>
            </tr>

            <!-- View Modal -->
            <div class="modal fade bd-example-modal-lg" id="viewModal{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="viewNoticeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content notice-con-view">
                  <div class="modal-header">
                    <h5 style="color:black" class="modal-title" id="viewModal{{$slider->id}}">{!! str_limit(strip_tags($slider->title), 50) !!}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    @if($slider->photo)
                    <img src="{{asset('assets/images/sliders/'.$slider->photo)}}" width="100%" height="auto" alt="{{ $slider->title }}">
                    @endif
                  </div>

                </div>
              </div>
            </div>

            <!-- published modal  -->
            <div class="modal fade" id="publishModal{{$slider->id}}">
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
                    <form action="{{ route("backend.$module_name.published", $slider) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Published modal  -->

            <!-- Unpublished modal  -->
            <div class="modal fade" id="unpublishModal{{$slider->id}}">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3 class="text-info text-center">Are you sure to Unpublish this!!</h3>
                  </div>
                  <div class="modal-footer">
                    <form action="{{ route("backend.$module_name.unpublished", $slider) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Unpublished modal -->

            <!-- Delete Modal -->
            <div id="deleteModal{{$slider->id}}" class="modal fade">
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
                    <form action="{{ route("backend.$module_name.destroy", $slider) }}" method="POST">
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
    <!-- Content End -->
  </div>

</div>

</div>
@stop
