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
      <div class="col-4">
        <h4 class="card-title mb-0">
          <i class="{{ $module_icon }}"></i> {{ $module_title }} <small class="text-muted">{{ $module_action }}</small>
        </h4>
        <div class="small text-muted">
          {{ title_case($module_title) }} Management Dashboard
        </div>
      </div>

      <div class="col-4 text-center">
        <h4 class="card-title mb-0">
          <a href="" class="btn  m-1 btn-sm {{$total_available_sms<=50? 'btn-danger':'btn-success'}}"
            data-toggle="tooltip" title="Total Available SMS">
            Available SMS: {{ $total_available_sms }}
          </a>
        </h4>
      </div>
      <!--/.col-->
      <div class="col-4">
        <div class="float-right">
          <a href='{{ route("backend.$module_name.create")}}' class="btn btn-success m-1 btn-sm" data-toggle="tooltip"
            title="Create New"><i class="fas fa-plus-circle"></i> Create</a>
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
              <th>Subject</th>
              <th>Message</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>

          <tbody>

            @if($sendsms->count() > 0)
            @foreach($sendsms as $key=>$send)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $send->subject }}</td>
              <td>{!! str_limit(strip_tags($send->message), 30) !!}</td>
              <td class="text-center">
                <a href='{{ route("backend.$module_name.show", $send) }}' class="btn btn-primary btn-xs" title="Send">
                  <span class="fas fa-paper-plane"></span>
                </a>


                <a href='{{ route("backend.$module_name.edit", $send) }}' class="btn btn-success btn-xs" title="Edit">
                  <span class="fas fa-edit"></span>
                </a>

                <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$send->id}}"
                  title="Delete">
                  <span class="fas fa-trash"></span>
                </a>
              </td>
            </tr>


            <!-- Delete Modal -->
            <div id="deleteModal{{$send->id}}" class="modal fade">
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
                    <form action='{{ route("backend.$module_name.destroy", $send->id) }}' method="POST">
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
    <!-- Content End -->
  </div>

</div>

</div>
@stop

@push ('after-styles')
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/custom_css/modal.css') }}">
@endpush