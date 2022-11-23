@inject('contact', 'App\Services\ContactUsService')
@inject('home_page', 'App\Services\HomePageServices')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3">
</script>
<!-- Section Topbar -->
<section class="top-bar" id="topBar">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="top-contact">
          <p>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            info@paaru.org
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="top-contact">
          <p>
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            +880 1718822065
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-4 col-sm-4">
        <div class="top-social">
          <ul>
            <li>
              <a href="#">
                Follow Us:
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section Topbar -->

<!-- Logo Wrap  -->
<section class="logo-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a class="navbar-brand" href="{{ route('frontend.index') }}">
          <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="PAARU">
        </a>
      </div>
      <div class="col-md-8">
        <div class="top-info__block text-right">
          <ul>
            <li>

              <i class="fa fa-map-marker"></i>
              <a href="{{ $contact->single()->geo_location }}">
                <p>
                  {{ $contact->single()->place }}
                  <span>{{ $contact->single()->location }}</span>
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Logo Wrap  -->

<!-- Section NavBar -->
<section id="mainNav" class="bottom-header">
  <div class="container">

    <nav class="navbar navbar-expand-md navbar-light">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto py-4 py-md-0">
          <li class="nav-item pl-4 pl-md-0 ml-0 {{ active_class(if_route('frontend.index')) }}">
            <a class="nav-link " href="{{route('frontend.index')}}">Home</a>
          </li>
          <li
            class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.about') || if_route('frontend.president_message') || if_route('frontend.executive_committee') || if_route('frontend.advisory_committee') || if_route('frontend.constitution')) }}">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">About
              <i class="fa fa-caret-down nav-dd-icon" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('frontend.about') }}">About Us</a>
              <a class="dropdown-item" href="{{ route('frontend.president_message') }}">President's Message</a>
              <a class="dropdown-item" href="{{ route('frontend.executive_committee') }}">Executive Committee</a>
              <a class="dropdown-item" href="{{ route('frontend.advisory_committee') }}">Advisory Committee</a>
              <a class="dropdown-item" href="{{ route('frontend.constitution') }}">Constitutions</a>
            </div>
          </li>
          <li
            class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.alumni_members') || if_route('frontend.life_members')) }}">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Members
              <i class="fa fa-caret-down nav-dd-icon" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu">

              @foreach($home_page->member_types() as $member_type)
              <a class="dropdown-item" href="{{ route('frontend.show_members', $member_type->id) }}">
                {{ $member_type->name}}
              </a>
              @endforeach

              <a class="dropdown-item" href="{{ route('frontend.renowned_alumni_members') }}">
                Renowned Alumnus
              </a>

              <a class="dropdown-item" href="{{ route('frontend.all_members') }}">
                All Members
              </a>

            </div>
          </li>

          <!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.students_list')) }}">
      <a class="nav-link" href="{{ route('frontend.students_list') }}">Students</a>
    </li> -->

          <li
            class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.activity_list') || if_route('frontend.activity_details')) }}">
            <a class="nav-link" href="{{ route('frontend.activity_list') }}">Activity</a>
          </li>
          <li
            class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.journal_list') || if_route('frontend.journalDetails') || if_route('frontend.journal_details') || if_route('frontend.journal_monthwise')) }}">
            <a class="nav-link" href="{{ route('frontend.journal_list') }}">Journal</a>
          </li>
          <li
            class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.event_list') || if_route('frontend.event_details')) }}">
            <a class="nav-link" href="{{ route('frontend.event_list') }}">Event</a>
          </li>
          <!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.future_plane_list')) }}">
      <a class="nav-link" href="{{ route('frontend.future_plane_list') }}">Future Plan</a>
    </li> -->
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.notice_list')) }}">
            <a class="nav-link" href="{{ route('frontend.notice_list') }}">Notice</a>
          </li>

          <li
            class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.gallery') || if_route('frontend.gallery_details')) }}">
            <a class="nav-link" href="{{ route('frontend.gallery') }}">Gallery</a>
          </li>
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ active_class(if_route('frontend.contact_us')) }}">
            <a class="nav-link" href="{{ route('frontend.contact_us') }}">Contact</a>
          </li>
        </ul>
        <form action="{{ route('frontend.join_member') }}" class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Join Now !</button>
        </form>
      </div>
    </nav>
  </div>
</section>
<!-- End Section NavBar -->