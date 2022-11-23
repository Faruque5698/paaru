@inject('contact', 'App\Services\ContactUsService')
@inject('links', 'App\Services\DashboardServices')
<footer>
  <div class="container text-center">
    <div class="row">

      <div class="col-md-4 text-left footer-contact">
        <h4>PAARU.ORG</h4>
        <p>
          <i class="fa fa-phone" aria-hidden="true"></i>
          {{ $contact->single()->mobile }}<br>
          {{ $contact->single()->phone }}</p>
          <p>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            {{ $contact->single()->email }}
            <br>
            {{ $contact->single()->mail }}
          </p>
          <p>
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            {{ $contact->single()->place }}<br>
            {{ $contact->single()->location }}.
          </p>
        </div>

        <div class="col-md-4 text-left footer-service">
          <h4>ESSENTIAL LINK</h4>
          <ul>

            @if($links->important_links()->count() > 0)
            @foreach($links->important_links() as $key=>$im_link)
            <li>
              <a href="{{ $im_link->url }}" target="_blank">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                {{ $im_link->title }}
              </a>
            </li>
            @endforeach
            @endif

          </ul>
        </div>

        <div class="col-md-4 fb-embed">
          <h4>FOLLOW US</h4>
          <div class="fb-page" data-href="https://www.facebook.com/PhysicsAlumniAssociationRajshahiUniversityPAARU/" data-tabs="timeline" data-width="700" data-height="180" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/PhysicsAlumniAssociationRajshahiUniversityPAARU/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PhysicsAlumniAssociationRajshahiUniversityPAARU/">Physics Alumni Association Rajshahi University - PAARU</a></blockquote></div>
        </div>
      </div>
    </div>
  </footer>
