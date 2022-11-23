@inject('dashboard', 'App\Services\DashboardServices')
@extends('backend.layouts.app')

@section ('title', 'Dashboard' . " - " . config('app.name'))

@section('breadcrumbs')
<li class="breadcrumb-item active"><i class="icon-speedometer"></i> Dashboard</li>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-8">
        <h4 class="card-title mb-0">Welcome to {{ config('app.name') }} Admin Dashboard.</h4>
        <div class="small text-muted">{{ date('D, F d, Y') }}</div>
      </div>

      <!-- <div class="col-sm-4 hidden-sm-down">
        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
          <button type="button" class="btn btn-primary float-right">
            <i class="icon-cloud-download"></i>
          </button>
        </div>
      </div> -->
    </div>


    <hr>

  </div>

</div>
<!-- / card -->

<div class="card-group mb-4">
  <div class="card text-white bg-info">
    <a href="{{ route('backend.members.index') }}" style="text-decoration:none;">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="icon-people"></i>
        </div>
        @php
        $total_member = $dashboard->count_total_member();
        @endphp
        <div class="text-value" style="color:white;"> <h3>
          {{ $dashboard->count_total_member() }} </h3></div>
        <small class="text-muted text-uppercase font-weight-bold text-white">TOTAL MEMEBERS</small>
        <div class="progress progress-xs mt-3 mb-0">
          <div class="progress-bar bg-warning" role="progressbar" style="width:" aria-valuenow="" aria-valuemin="0" aria-valuemax="{{$total_member}}"></div>
        </div>
      </div>
    </a>
  </div>
  <div class="card text-white bg-warning">
    <a href="{{ route('backend.members.get_life_member') }}" style="text-decoration:none;">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="icon-user-follow"></i>
        </div>
        <div class="text-value" style="color:white;">
          <h3>{{ $dashboard->life_time_member() }}</h3>
        </div>
        <small class="text-muted text-uppercase font-weight-bold">LIFE TIME MEMBERS</small>
        <div class="progress progress-xs mt-3 mb-0">
          <div class="progress-bar bg-red" role="progressbar" style="width: {{ $dashboard->life_time_member() }}%" aria-valuenow="{{ $dashboard->life_time_member() }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </a>
  </div>

  <div class="card text-white bg-success">
    <a href="{{ route('backend.members.get_alumni_members') }}" style="text-decoration:none;">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="icon-user-follow"></i>
        </div>

        <div class="text-value" style="color:white;"> <h3>{{ $dashboard->alumni_member() }} </h3></div>
        <small class="text-muted text-uppercase font-weight-bold">ALUMNI MEMBERS</small>
        <div class="progress progress-xs mt-3 mb-0">
          <div class="progress-bar bg-warning" role="progressbar" 
          style="width: {{ $dashboard->alumni_member() }}%" aria-valuenow="{{ $dashboard->alumni_member() }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </a>
  </div>

  <div class="card text-white bg-danger">
    <a href="{{ route('backend.advisory_committee.index') }}" style="text-decoration:none;">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="icon-user-follow"></i>
        </div>
        <div class="text-value" style="color:white;"> <h3>{{ $dashboard->advisory_committee() }} </h3></div>
        <small class="text-muted text-uppercase font-weight-bold">ADVISORY COMMITTEE</small>
        <div class="progress progress-xs mt-3 mb-0">
          <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $dashboard->advisory_committee() }}%" aria-valuenow="{{ $dashboard->advisory_committee() }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </a>
  </div>

  <div class="card text-white bg-success">
    <a href="{{ route('backend.committees.index') }}" style="text-decoration:none;">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="icon-user-follow"></i>
        </div>
        <div class="text-value" style="color:white;"> <h3>{{ $dashboard->executive_committee() }} </h3></div>
        <small class="text-muted text-uppercase font-weight-bold">EXECUTIVE COMMITTEE</small>
        <div class="progress progress-xs mt-3 mb-0">
          <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $dashboard->executive_committee() }}%" aria-valuenow="{{ $dashboard->executive_committee() }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-6 col-md-3">
      <a href="{{ route('backend.notice.index') }}" style="text-decoration:none;">
        <div class="card">
          <div class="card-body">
            <div class="text-value">{{ $dashboard->total_notice() }}</div>
            <div class="progress progress-xs my-2">
              <div class="progress-bar bg-success" role="progressbar" style="width:{{ $dashboard->total_notice() }}%" aria-valuenow="{{ $dashboard->total_notice() }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">TOTAL NOTICE</small>
          </div>
        </div>
      </a>
    </div>

    <div class="col-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="text-value">{{ $dashboard->pending_total_notice() }}</div>
          <div class="progress progress-xs my-2">
            <div class="progress-bar bg-info" role="progressbar" style="width:{{ $dashboard->pending_total_notice() }}%" aria-valuenow="{{ $dashboard->pending_total_notice() }}" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">PENDING NOTICE</small>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-3">
      <a href="{{ route('backend.journals.index') }}" style="text-decoration:none;">
        <div class="card">
          <div class="card-body">
            <div class="text-value">{{ $dashboard->total_journal() }}</div>
            <div class="progress progress-xs my-2">
              <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $dashboard->total_journal() }}%" aria-valuenow="{{ $dashboard->total_journal() }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">TOTAL JOURNAL</small>
          </div>
        </div>
      </a>
    </div>

    <div class="col-sm-6 col-lg-3">
      <div class="card">
        <div class="card-body">
          <div class="text-value">1K</div>
          <div class="progress progress-xs my-2">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">NUMBER OF STUDENT</small>
        </div>
      </div>
    </div>

  </div>
  @endsection
