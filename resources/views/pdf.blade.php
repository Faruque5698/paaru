
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parru Registraion Form</title>
    <!-- Bootstrap CSS CDN -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
    <!-- Custom CSS -->
    <style>
        .col-1 {
            width: 8.33%;
        }

        .col-2 {
            width: 16.66%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33.33%;
        }

        .col-5 {
            width: 41.66%;
        }

        .col-6 {
            width: 50%;
        }

        .col-7 {
            width: 58.33%;
        }

        .col-8 {
            width: 66.66%;
        }

        .col-9 {
            width: 75%;
        }

        .col-10 {
            width: 83.33%;
        }

        .col-11 {
            width: 91.66%;
        }

        .col-12 {
            width: 100%;
        }

        [class*='col-'] {
            float: left;
        }

        .row:after {
            content: " ";
            clear: both;
            display: block;
        }

        .container {
            width: 100%;
            height: auto;
            margin: auto;
        }

        .logo img{
            width: 150px;
            height: 150px;
        }
        .student-image{
            position: relative;
        }
        .student-image img{
            position: absolute;
            right: 0;
            width: 150px;
            height: 150px;
            margin-right: 0;
        }
        title{
            text-align: center;
            justify-items: center;
        }
        .title h2,
        .title h4{
            text-align: center;
            line-height: 5px;
        }
        .title{
            position: relative;
        }
        .title img{
            position: absolute;
            left: 20%;
            width: 150px;
            height: 150px;
        }
        .mt{
            margin-top: 30px;
        }

        .p-4 {
            padding: 1.5rem!important;
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
        }
        .border-0 {
            border: 0!important;
        }

        .item{
            width: 90%;
            height: auto;
            box-sizing: border-box;
            padding:1% 5%;
        }
        .border{
            border: 1px solid #dad5d5;
        }
        .rounded{
            border-radius: 7px;
        }

        table, td, th {
            border: 1px solid #dad5d5;
            height: 30px;
            text-align: left;
            padding-left: 7px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        @media print {
            #dwnld{
                display: none;
            }
            header nav, footer {
                display: none;
            }
            @page {
                margin: 0.5cm;
            }
            body {
                font: 12pt Georgia, "Times New Roman", Times, serif;
                line-height: 1;
            }
        }
    </style>


</head>

<body>
<button onclick="print()" id="dwnld">Download PDF</button>
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="logo">
                        <img class="" src="{{ asset('assets/images/paru/logo.png') }}" alt="logo">
                    </div>
                </div>
                <div class="col-7">
                    <div class="title">
                        <img class="" src="{{ asset('assets/images/paru/ru_logo.png') }}" alt="ru logo">
                    </div>
                </div>
                <div class="col-1" style="float: right;">
                    <div class="student-image">
                        <img class="" src="{{ asset('assets/images/paru/user_profile.png') }}" alt="user_profile">
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-12">
                    <div class="title">
                        <h2 style="text-decoration: underline;">Physics Alumni Association, Rajshahi University</h2>
                        <h4 style="text-decoration: underline; color:#ccc;">2nd Reunion 2023</h4>
                    </div>
                </div>
            </div>

            <div class="row mt">
                <div class="col-4">
                    <div class="item border rounded">
                        <p><strong>Regi No:</strong> PR23-{{$eventdata->id}}</p>
                        <p class="mb-0"><strong>Date:</strong> {{$event->date_time ?? ''}}</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item">
                        <h2 style="text-align: center;text-decoration: underline;">Registraion Form</h2>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item border rounded">
                        <p><strong>Paid Amount:</strong> {{$eventdata->total}} <strong class="ms-3">Status:</strong> {{$eventdata->status == 1 ? 'Complete' : 'Pending'}}</p>
                        <p class="mb-0"><strong>Mode of Payment:</strong> {{$eventdata->payment_type == 1 ? 'Online' : 'Cash'}}</p>
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-12">
                    <table>
                            <tr>
                                <th>Name (in English)</th>
                                <td colspan="4">{{ $eventdata->name ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Father's Name</th>
                                <td colspan="4">{{$eventdata->father_name ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Present Affiliation</th>
                                <td colspan="4">{{$eventdata->present_affiliation ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Contact Address (present)</th>
                                <td colspan="4">{{$eventdata->present_affiliation ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td colspan="4">{{$eventdata->phone ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td colspan="4">{{$eventdata->email ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Program Name</th>
                                <td>{{$eventdata->passing_type ?? ''}}</td>
                                <th colspan="2">Passing Year</th>
                                @if($eventdata->year == null)
                                <td >{{$eventdata->session ?? ''}}</td>
                                @else
                                    <td >{{$eventdata->year ?? ''}}</td>
                                    @endif
                            </tr>
                            <tr>
                                <th>PAARU Membership</th>
                                <td colspan="4">{{$eventdata->paaru_type ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Spouse Name (Only if Participating)</th>
                                <td colspan="2">{{$eventdata->spouse_name ?? ''}}</td>
                                <td colspan="2" class="text-end">1500</td>
                            </tr>
                            <tr>
                                <th rowspan="3">Number of Participating Children</th>
                                <th>Above 10 years (with fee)</th>
                                <td>{{$eventdata->child_number_10 ?? ''}}</td>
                                <td colspan="2" class="text-end">{{$eventdata->child_10_total_amount ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>From 5 to 10 years (with fee)</th>
                                <td>{{$eventdata->child_number_5_to_10 ?? ''}}</td>
                                <td colspan="2" class="text-end">{{$eventdata->child_5_to_10_total_amount ??''}}</td>
                            </tr>
                            <tr>
                                <th>Below 5 years (without fee)</th>
                                <td>{{$eventdata->child_number_5 ?? ''}}</td>
                                <td colspan="2" class="text-end">{{$eventdata->child_5_total_amount ?? ''}}</td>
                            </tr>
                            <tr>
                                <th rowspan="2">Membership Fee</th>
                                <th>For Life Member</th>
                                <td colspan="3">{{$eventdata->existing_life_fee ?? '0'}}</td>
                            </tr>
                            <tr>
                                <th>For Annual Member</th>
                                <td colspan="3" class="text-end">{{$eventdata->annual_member_fee ?? '0'}}</td>
                            </tr>
                    </table>
                </div>
            </div>
            <div class="row mt">
                <div class="col-6">
                    <p style="margin-left:2%;">{{$eventdata->name}}</p>
                    <h4 style="text-decoration: underline;">Signature of the Participant</h4>
                </div>
            </div>
        </div>




    <!-- Bootstrap JS CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->

</body>

</html>
