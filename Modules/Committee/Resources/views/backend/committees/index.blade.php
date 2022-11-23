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
          <a href="{{ route("backend.$module_path.create") }}" class="btn btn-success m-1 btn-sm" data-toggle="tooltip" title="Create New"><i class="fas fa-plus-circle"></i> Create</a>
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
              <th>Position</th>
              <th>SL No.</th>
              <th>Name</th>
              <th>Occupation</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>

            <!-- Check CommitteTypes exist or not -->
            @if($committe_types->count() > 0)
            <!-- Take each CommitteTypes separately -->
            @foreach($committe_types as $key => $type)
            <!-- Check every CommitteTypes has members or not  -->
            @if($type->members->count() > 1)
            <!-- use rowspan for show CommitteTypes better  -->
            @php $isRowSpan = True; @endphp
            <!-- take members of each CommitteTypes where single CommitteTypes has many members  -->
            @foreach($type->members as $index=>$member)
            <tr>
              @if($isRowSpan)
              <td rowspan="{{ $type->members->count() }}"> {{ $type->name }} </td>
              @php $isRowSpan = false; @endphp
              @endif
              <td>{{ ++$index }}</td>
              <td>{{ $member->name }}</th>
              <td>{{ $member->occupation }}</td>
                <td>
                  <img src="{{ asset('assets/images/members/' . $member->image) }}" class="img-fluid img-thumbnail" style="max-width:100px;" alt="{{ $member->name }}">
                </td>
                <td>
                  <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$member->id}}" title="Delete">
                    <span class="fas fa-trash"></span>
                  </a>

                  <a href="{{ route("backend.$module_path.edit", $member->id) }}" class="btn btn-success btn-sm" title="Edit">
                    <span class="fas fa-edit"></span>
                  </a>
                </td>
              </tr>

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
                      <form action="{{ route("backend.$module_path.destroy", $member->id) }}" method="POST">
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

              <!-- Take members of each CommitteTypes where single CommitteTypes has one members  -->
              @else
              @foreach($type->members as $index=>$member)
              <tr>
                <td> {{ $type->name }} </td>
                <td>{{ ++$index }}</td>
                <td>{{ $member->name }}</th>
                  <td>{{ $member->occupation }}</td>
                  <td>
                    <img src="{{ asset('assets/images/members/' . $member->image) }}" class="img-fluid img-thumbnail" style="max-width:100px;" alt="{{ $member->name }}">
                  </td>
                  <td>

                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$member->id}}" title="Delete">
                      <span class="fas fa-trash"></span>
                    </a>

                    <a href="{{ route("backend.$module_path.edit", $member->id) }}" class="btn btn-success btn-sm" title="Edit">
                      <span class="fas fa-edit"></span>
                    </a>
                  </td>
                </tr>

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
                        <form action="{{ route("backend.$module_path.destroy", $member->id) }}" method="POST">
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
                <!-- End take members of each CommitteTypes where single CommitteTypes has many members  -->
                @endif
                <!-- End Take each CommitteTypes separately -->
                @endforeach
                <!-- End Check CommitteTypes exist or not -->
                @endif

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

  </div>

  @stop
