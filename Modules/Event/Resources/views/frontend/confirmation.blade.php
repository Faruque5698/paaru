@extends('frontend.layouts.master')

@section('title', $event->title)

@section('content')

    <div class="report_header">
        <div class="container card border-0 shadow-sm p-4">
            <!-- Header Logo -->

            <!-- Title -->
            <div class=" pb-4 pb-lg-5">
                <div class="title">
                    <h2>Physics Alumni Association, Rajshahi University</h2>
                    <h4>2nd Reunion 2023</h4>
                </div>
                <div class="row g-4 row-cols-1 row-cols-sm-3 pt-3 justify-content-center">
                    <div class="col">
                        <div class="item border p-3 rounded">
                            <p><strong>Regi No:</strong> PR23-{{$pay_event ->id}}</p>
                            <p class="mb-0"><strong>Date:</strong> {{$event->date_time}}</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <div class="item">
                            <h2 class="">Registraion Form</h2>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item border p-3 rounded">
                            <p><strong>Paid Amount:</strong> {{$pay_event->total}}</p>
                            <p class="mb-0"><strong>Status:</strong> Pending</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Report Table -->
            <table class="table table-responsive table-bordered ">
                <tbody>
                <tr>
                    <th class="col-sm-4">Name (in English)</th>
                    <td class="col-sm-12" colspan="4">{{$pay_event->name}}</td>
                </tr>
                <tr>
                    <th>Father's Name</th>
                    <td colspan="4">{{$pay_event->father_name}}</td>
                </tr>
                <tr>
                    <th>Present Affiliation</th>
                    <td colspan="4">{{$pay_event->present_affiliation}}</td>
                </tr>
                <tr>
                    <th>Contact Address (present)</th>
                    <td colspan="4">{{$pay_event->address}}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td colspan="4">{{$pay_event->phone}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td colspan="4">{{$pay_event->email}}</td>
                </tr>
                <tr>
                    <th>Program Name</th>
                    <td>{{$pay_event->passing_type}}</td>
                    <th colspan="2">Passing Year</th>
                    @if($pay_event->passing_type == 'existing')
                    <td >{{$pay_event->session}}</td>
                    @else
                        <td >{{$pay_event->year}}</td>
                    @endif
                </tr>
                <tr>
                    <th>PAARU Membership</th>
                    <td colspan="4">{{$pay_event->paaru_type}}</td>
                </tr>
                <tr>
                    <th>Spouse Name (Only if Participating)</th>
                    <td colspan="4" class="text-end">{{$pay_event->spouse_name ?? ''}}</td>
                </tr>
                <tr>
                    <th rowspan="3">Number of Participating Children</th>
                    <th>Above 10 years (with fee)</th>
                    <td>{{$pay_event->child_number_10}}</td>
                    <td colspan="2" class="text-end">{{$pay_event->child_10_total_amount}}</td>
                </tr>
                <tr>
                    <th>From 5 to 10 years (with fee)</th>
                    <td>{{$pay_event->child_number_5_to_10}}</td>
                    <td colspan="2" class="text-end">{{$pay_event->child_5_to_10_total_amount}}</td>
                </tr>
                <tr>
                    <th>Below 5 years (without fee)</th>
                    <td>{{$pay_event->child_number_5}}</td>
                    <td colspan="2" class="text-end">{{$pay_event->child_5_total_amount}}</td>
                </tr>
                <tr>
                    <th rowspan="2">Membership Fee</th>
                    <th>For Life Member</th>
                    <td colspan="3">{{$pay_event->existing_life_fee}}</td>
                </tr>
                <tr>
                    <th>For Annual Member</th>
                    <td colspan="3" class="text-end">{{$pay_event->annual_member_fee}}</td>
                </tr>

                </tbody>
            </table>


            <!-- Signature -->
            <div class="report_signature pt-4 pt-lg-5">
                <p class="participant_name pt-4">{{$pay_event->name}}</p>
                <h4>Signature of the Participant</h4>
            </div>
        </div>
        <div class="col-sm-12 text-center mb-2 mt-3">
        <div class="row ">
            <div class="col-sm-6">
                <a href="{{route('frontend.cash_payment',['id'=>$pay_event->id])}}" class="btn btn-primary p-2" style="color: black">Cash Payment</a>
            </div>
            <div class="col-sm-6">
                <a href="{{route('frontend.event_pay',['id'=>$pay_event->id])}}" class="btn btn-success p-2"style="color: black">Online Payment</a>
            </div>
        </div>
    </div>

    </section>

@endsection
