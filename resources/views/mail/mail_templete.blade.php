@php
    $generalInfo = \App\Models\GeneralSettings::find(1);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Admission form</title>
    <link rel="stylesheet" href="">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

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

        .title{
            text-align: center;
        }
        .address p{
            line-height: 4px;
        }


        .card{
            margin: 50px;
        }
        .card a{
            text-decoration: none;
            width: 100px;
            height: 50px;
            margin:50px 200px;
            border-radius: 15px;
            padding: 20px;
            background:orange;
            color: #000;
        }
        .sinature{
            justify-content: flex-end;
            align-items: flex-end;
            text-align: right;
            margin-top: 50px;
            margin-right: 10px;
            display: block;
        }

        .address-footer p{
           text-align: right;
        }



    </style>
</head>
<body>
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8">
            <div class="title">
                <h3>Parru Event</h3>
                <div class="address">
{{--                    <P>12/5 Dhaka Would Road, Dhaka, Bangladesh</P>--}}
{{--                    <P><span><i class="fas fa-globe"></i></span> www.drutosoft.com</P>--}}
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <a href="{{ route('frontend.event_ticket',["id"=>$info->id]) }}">Download PDF</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>

        <div class="col-6">
            <div class="address-footer">
                <P>&right copyright 2022, Parru Event.</P>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</body>
</html>
