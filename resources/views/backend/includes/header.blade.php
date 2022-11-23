<header class="app-header navbar">
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{ route('backend.dashboard') }}">
    <img class="navbar-brand-full" src="{{ asset('assets/frontend/images/logo.png') }}" width="89" height="25" alt="Logo">
    <img class="navbar-brand-minimized" src="{{ asset('assets/frontend/images/favicon.ico') }}" width="30" height="30" alt="Logo">
  </a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="nav navbar-nav d-md-down-none">
    <li class="nav-item px-3">
      <a class="nav-link" href="{{ route('frontend.index') }}" target="_blank"> {{ app_name() }} </a>
    </li>
  </ul>

  <ul class="nav navbar-nav ml-auto">

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="{{ asset('assets/images/users/'.auth()->user()->avatar) }}" class="img-avatar" alt="{{ auth()->user()->name }}">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header text-center">
          <strong>Account</strong>
        </div>
        <a class="dropdown-item" href="{{route('backend.users.profile', Auth::user()->id)}}">
          <i class="fas fa-user"></i> {{ Auth::user()->name }}
        </a>

        <a class="dropdown-item" href="{{route('backend.users.changePassword', Auth::user()->id)}}">
          <i class="fas fa-lock"></i> {{ 'Change Password' }}
        </a>

        <div class="dropdown-header text-center">
          <strong>Settings</strong>
        </div>
        <a class="dropdown-item" href="{{ route('frontend.auth.logout') }}">
          <i class="fas fa-lock"></i> Logout
        </a>
      </div>
    </li>
  </ul>

</header>
