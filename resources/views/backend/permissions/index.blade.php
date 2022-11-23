@extends ('backend.layouts.app')

@php $module_name_singular = str_singular($module_name); @endphp

@section ('title', __("$module_title") . " - " . __("$module_action"))

@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col">
        <h4 class="card-title mb-0">
          <i class="{{ $module_icon }}"></i> {{ $module_title }} <small class="text-muted">{{ $module_action }}</small>
        </h4>
        <div class="small text-muted">
          {{ __('labels.backend.permissions.index.sub-title') }}
        </div>
      </div>

      <div class="col-4">
        <div class="float-right">
          <a href="{{ route("backend.$module_name.create") }}" class="btn btn-success m-1 btn-sm" data-toggle="tooltip" title="Create New"><i class="fas fa-plus-circle"></i> Create</a>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row mt-4">
      <div class="col">
        <table id="datatable" class="table table-hover table-responsive-sm">
          <thead>
            <tr>
              <th>{{ __("$module_title"." Name") }}</th>

              <th class="text-right">{{ __("labels.backend.action") }}</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($$module_name as $module_name_singular)
            <tr>
              <td>
                <strong>
                  {{ $module_name_singular->name }}
                </strong>
              </td>
              <td class="text-right">
                <a href="{{route("backend.$module_name.destroy", $module_name_singular)}}" class="btn btn-danger btn-sm mt-1"  data-method="DELETE" data-token="{{csrf_token()}}" data-toggle="tooltip" title="{{__('labels.backend.delete')}}"><i class="fas fa-trash-alt"></i></a>
                <a href="{{route("backend.$module_name.edit", $module_name_singular)}}" class="btn btn-primary btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.edit')}}"><i class="fas fa-pencil-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="card-footer">
    <div class="row">

    </div>
  </div>
</div>

@endsection

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

@endpush
