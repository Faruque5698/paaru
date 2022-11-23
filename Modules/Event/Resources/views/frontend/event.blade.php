@extends('frontend.layouts.master')

@section('title', 'Events')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Events</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Section Content -->
<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-wrap committee-list">
          <div class="card">
            <h5 class="card-header">Events List</h5>
            <div class="card-body">
              @if($events->count() > 0)
              <div class="row">
                <!-- Start Event -->

                @foreach($events as $key=>$event)
                <!-- event box -->
                <div class="col-md-6">
                  <div class="event-box">
                    <div class="event-date">
                      <span class="e-date">{{ date("d",strtotime($event->date_time))}}</span>
                      <span class="e-month">{{ date("M",strtotime($event->date_time))}}</span>
                    </div>
                    <div class="event-details">
                      <h4 class="event-title"><a href="{{ route('frontend.event_details', $event->id) }}">{{ $event->title }}</a></h4>
                      <span class="event-time">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{ date('h:i A', strtotime($event->date_time)) }}
                      </span>
                      <span class="event-time">
                        <a href="{{ route('frontend.event_details', $event->id) }}" title="Bangladesh Polytechnic Institute"><i class="fa fa-map-marker"
                          aria-hidden="true"></i>{{ $event->place }}</a>
                        </span>
                        <p class="event-description">{!! str_limit(strip_tags($event->description), 150) !!}</p>
                      </div>
                    </div>
                  </div>
                  <!-- End event box -->
                  @endforeach

                </div>
                @else
                <h2 class="text-center">No data available</h2>
                @endif
                <div class="row mt-5 activity-pagi">

                  <div class="col sm-12">

                    <nav aria-label="Page navigation example">
                      {{ $events->links("pagination::bootstrap-4") }}
                    </nav>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Content -->
  @endsection
