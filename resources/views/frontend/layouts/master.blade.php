<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{!! csrf_token() !!}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
  
  <title>Physics Alumni Association, Rajshahi University | @yield('title')</title>
  <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('assets/frontend/images/favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/fontawesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/themify-icons/themify-icons.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/frontend/lightgallery/css/lightgallery.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


  @include('frontend.included.meta')

  @stack('after-styles')

</head>

<body>

  <!-- Header Section -->
  @include('frontend.included.header')
  <!-- Header Section -->

  <!-- Main Content   -->
  @yield('content')
  <!-- End Main Content   -->

  <!-- Footer -->
  @include('frontend.included.footer')
  <!-- End Footer -->

  <!-- CopyRight -->
  @include('frontend.included.copyright')
  <!-- End CopyRight -->

  <!-- Script -->
  @include('frontend.included.scripts')
  <!--End Script -->

</body>

</html>
