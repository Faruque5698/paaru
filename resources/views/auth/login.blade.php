@extends('auth.layout')

@section('content')
<style>

  .page-header-image{
    background-image: linear-gradient(rgba(0, 173, 238, 0.55), rgba(0, 173, 238, 0.55)), url({{ asset('assets/backend/img/12.jpg') }});
    background-image: -webkit-linear-gradient(rgba(0, 173, 238, 0.55), rgba(0, 173, 238, 0.55)), url({{ asset('assets/backend/img/12.jpg') }});
    background-image: -moz-linear-gradient(rgba(0, 173, 238, 0.55), rgba(0, 173, 238, 0.55)), url({{ asset('assets/backend/img/12.jpg') }});
    background-image: -ms-linear-gradient(rgba(0, 173, 238, 0.55), rgba(0, 173, 238, 0.55)), url({{ asset('assets/backend/img/12.jpg') }});
    background-image: -o-linear-gradient(rgba(0, 173, 238, 0.55), rgba(0, 173, 238, 0.55)), url({{ asset('assets/backend/img/12.jpg') }});
  }
  .form-group.input-lg .input-group-text, .input-group.input-lg .input-group-text{
    padding:14px 10px 15px 15px;
  }
  .footer .copyright{
    float: none;
  }
</style>

<div class="page-header-image"></div>

<div class="content-center">

    <div class="container">

        <div class="col-md-4 content-center">

            <div class="card card-login card-plain">
                <form class="form" method="POST" action="{{ route('frontend.auth.login.post') }}">
                    @csrf

                    <div class="header header-primary text-center">
                        <div class="logo-container">
                            <img src="{{asset('assets/frontend/images/logo.png')}}" alt="">
                        </div>
                        <h5>
                            Login to Account
                        </h5>

                        @include('flash::message')

                        @if ($errors->any())
                        <div class="row justify-content-center">
                            <div class="col-12 align-self-center">
                                <div class="alert alert-danger" role="alert">
                                    <div class="container">
                                        <div class="alert-icon">
                                            <i class="fas fa-bolt"></i>
                                        </div>
                                        <p>
                                            <i class="fa fa-exclamation-triangle"></i> Please fix the following errors and submit again!
                                        </p>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="content">
                        <div class="form-check">
                            <input type="hidden" name="redirectTo" value="{{request('redirectTo')}}">
                            <div class="input-group mb-3 input-lg {{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input-email"><i class="fas fa-at"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" aria-label="Email" aria-describedby="input-email" required>
                            </div>
                        </div>

                        <div class="form-check">
                            <div class="input-group mb-3 input-lg {{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input-password"><i class="fas fa-key"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="input-password" required>
                            </div>
                        </div>

                    <!--     <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <span class="form-check-sign"></span>
                                Remember my login
                            </label>
                        </div> -->
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-block">Login</button>
                        </div>
                    </div>

                    <div class="float-left">
                        <h6>
                            <a href="{{ route('frontend.join_member') }}" class="link" target="_blank">Join Us</a>
                        </h6>
                    </div>
                    <div class="float-right">
                        <h6>
                            <a href="{{route('frontend.auth.password.email')}}" class="link"> Reset Password?</a>
                        </h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
