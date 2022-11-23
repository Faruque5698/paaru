@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }} | {{ app_name() }}
@stop

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
          <div class="btn-group" role="group" aria-label="Toolbar button groups">
            <div class="btn-group" role="group">
              <button id="btnGroupToolbar" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupToolbar">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-eye-slash"></i> View trash
                </a>
              </div>
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
            @foreach($members as $key =>$member)

            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $member->name }}</td>
              <td>{{ $member->passing_year }}</td>
              <td>{{ $member->status }}</td>
              <td>{{ $member->parru_status }}</td>
              <td>{{ $member->contact_info }}</td>

              <td>
                <img src="{{ asset('assets/images/members/' . $member->photo) }}" class="img-fluid img-thumbnail" style="max-width:100px;" alt="{{ $member->name }}">
              </td>

              <td>

                @if($member->publication_status == 1)
                <a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#unpublishModal{{$member->id}}" title="Unpublished">
                  <span class="fas fa-arrow-down"></span>
                </a>
                @else
                <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#publishModal{{$member->id}}" title="Published">
                  <span class="fas fa-arrow-up"></span>
                </a>
                @endif

                <a href="#" class="btn btn-primary btn-xs" title="View" data-toggle="modal" data-target="#viewModal{{$member->id}}">
                  <span class="fas fa-eye"></span>
                </a>

                <a href="{{ route("backend.$module_name.edit", $member)}}" class="btn btn-success btn-xs" title="Edit">
                  <span class="fas fa-edit"></span>
                </a>

                <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$member->id}}" title="Delete">
                  <span class="fas fa-trash"></span>
                </a>

              </td>
            </tr>


            {{-- unpublish modal --}}
            <div class="modal fade" id="unpublishModal{{$member->id}}">
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
                    <form action="{{ route("backend.$module_name.unpublished", $member) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            {{-- unpublish modal --}}

            {{-- published modal --}}
            <div class="modal fade" id="publishModal{{$member->id}}">
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
                    <form action="{{ route("backend.$module_name.published", $member) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            {{-- Published modal --}}


            {{-- delete modal --}}
            <div class="modal fade" id="deleteModal{{$member->id}}">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="text-info text-center">Are you sure to delete this!!</p>
                  </div>
                  <div class="modal-footer">

                    <form action="{{ route("backend.$module_name.destroy", $member) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            {{-- delete modal --}}

            {{-- View modal --}}
            <div class="modal fade" id="viewModal{{$member->id}}">
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
            {{-- View modal --}}

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<div class="card-footer">
  <div class="row">
    <div class="col-7">
      <div class="float-left">

      </div>
    </div>
    <div class="col-5">
      <div class="float-right">

      </div>
    </div>
  </div>
</div>
</div>
@stop
