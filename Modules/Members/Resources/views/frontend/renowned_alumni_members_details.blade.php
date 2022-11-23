@extends('frontend.layouts.master')
@section('content')

<style type="text/css">
  .tz-gallery .thumbnail {
    padding: 5px, 0px, 0px, 0px;
    margin-bottom: 30px;
    background-color: #fff;
    border-radius: 4px;
    border: none;
    transition: 0.15s ease-in-out;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
  }

  center {
    display: block;
    text-align: -webkit-center;
    /*padding-top: 10px;*/
  }

  a,
  a:hover,
  a:focus,
  a:active {
    text-decoration: none;
    /*-webkit-transition-duration: 500ms;*/
    /*transition-duration: 500ms;*/
    /*font-weight: 400;*/
    outline: none;
  }

  .gallery-cover-image {
    height: 143px;
  }

  .caption {
    padding: 10px 7px 5px 7px;
    text-align: center;
  }

  .caption a {
    /*font-size: 18px;*/
    /*  padding: 2px 0px 2px 0px;
  background: #00adee;*/
    /*text-align: center;*/
  }

  .caption a h3 {
    font-size: 18px;
    padding: 2px 0px 2px 0px;
    background: #546E7A;
    color: white;
  }

  .caption p {
    color: #7b7d7d;
    font-size: 14px;
    /*text-align: center;*/
  }
</style>

<!-- Section Content -->
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Renowned Alumni Members</li>
      </ol>
    </nav>
  </div>
</section>
<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-wrap committee-list">
          <div class="card">
            <h5 class="card-header">List of Renowned Alumni Members</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <img
                    src="{{ $re_alumni_members->member->image ? asset('assets/images/members/'.$re_alumni_members->member->image) : asset('assets/images/president.png') }}"
                    alt="Member's Image" height="150" width="150" style="border-radius: 50%;"><br><br>

                  <h4><a href="#" id="member" data-toggle="modal" data-id="{{ $re_alumni_members->id }}" data-target=""
                      style="padding: 10px;">
                      {{ $re_alumni_members->member->name }}
                    </a></h4>

                </div>

                <div class="col-sm-5">
                  @if($re_alumni_members->photos->count() > 0)
                  <div class="photo-gallery">
                    <div class="tz-gallery">

                      <div class="panel-body">
                        <ul class="row list-unstyled photo_gallery_list" id="lightgallery">
                          @foreach($re_alumni_members->photos as $photo)
                          <li class="col-sm-3 mr-3 ml-3"
                            data-src="{{asset('assets/images/re-alumni-member-image/'.$photo->re_members_more_image)}}"
                            data-sub-html="<p></p>">
                            <a href="#">
                              <div class="gallery_img img-thumbnail">
                                <center>
                                  <img
                                    src="{{ $photo->re_members_more_image ? asset('assets/images/re-alumni-member-image/'.$photo->re_members_more_image) : asset('assets/images/president.png') }}"
                                    alt="Member's Image" height="100" width="100">
                                  <div class="caption_icon"><i class="fa fa-eye"></i></div>
                                </center>
                              </div>
                            </a>
                          </li>
                          @endforeach

                        </ul>
                      </div>
                    </div>
                  </div>
                  @endif
                </div>


                <div class="col-sm-4">
                  {!! $re_alumni_members->video_link !!}
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-lg-3">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link btn btn-primary btn-sm m-1" id="v-pills-home-tab" data-toggle="pill"
                      href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">article</a>
                    <a class="nav-link btn btn-primary btn-sm m-1" id="v-pills-profile-tab" data-toggle="pill"
                      href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                      aria-selected="false">Message</a>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-9 mt-3 pt-2">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                      aria-labelledby="v-pills-home-tab">
                      {!! $re_alumni_members->member->re_al_member_content !!}
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                      aria-labelledby="v-pills-profile-tab">
                      {!! $re_alumni_members->member->re_al_member_msg !!}
                    </div>
                  </div>
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
<!-- Start Member Details Modal -->
<div class="modal fade member-details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="name">MD. Selim Mahmud</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7">
            <p id="occupation">Instructor</p>
            <p id="designation">Designation</p>
            <p id="m_location">Hatemkhan Kolabagan</p>
            {{-- <p id="date_of_birth">Date Of Birth</p> --}}
          </div>
          <div class="col-md-5">
            <img id="member_image" src="{{ asset('assets/images/members/user.png') }}" alt="Member's Image">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover" id="table">
                <tbody>
                  <tr>
                    <td>Bachelor year</td>
                    <td id="bachelor_year">-</td>
                  </tr>
                  <tr>
                    <td>Bachelor Roll</td>
                    <td id="bachelor_roll">-</td>
                  </tr>
                  {{-- <tr>
                    <td>Date of birth</td>
                    <td id="date_of_birth">-</td>
                  </tr> --}}
                  <tr>
                    <td>Name Of Spouse</td>
                    <td id="name_of_spouse">-</td>
                  </tr>
                  <tr>
                    <td>Contact</td>
                    <td id="m_phone">01711 XXXYYY</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td id="m_email">email@domain.com</td>
                  </tr>
                  <tr>
                    <td>Present Address</td>
                    <td id="p_location">Hatemkhan,Rajshahi-6000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- End Member Details Modal -->
@endsection
@push('after-scripts')
<script type="text/javascript">
  $(document).ready(function(){

  var token = $('meta[name="csrf-token"]').attr('content');

  var app_url = "{{ env("APP_URL") }}";

  $(document).on('click', '#member', function(e){
    e.preventDefault();

    var id = $(this).attr('data-id');

    console.log(id);

    var address = '';

    $.ajax({
      url: "{{ route('frontend.get_renowned_alumni_member') }}",
      method: 'POST',
      data: {id:id, _token:token},
      // beforeSend:function(){
      //   console.log(id);
      // },
      success: function(data) {
        // console.log(data);

        // get division, district and thana name for Present address
        var address = data.m_location+', '+data.m_post_code+', '+data.district;
        var p_address = data.p_location+', '+data.p_post_code+', '+data.district;

        $('#name').html(data.name)
        $('#occupation').html(data.occupation)
        $('#designation').html(data.designation)
        // $('#date_of_birth').html(data.date_of_birth)
        $('#bachelor_year').html(data.bachelor_year)
        $('#bachelor_roll').html(data.bachelor_roll)
        $('#name_of_spouse').html(data.name_of_spouse)
        $('#m_location').html(address)
        $('#m_phone').html(data.m_phone)
        $('#m_email').html(data.m_email)
        $('#p_location ').html( p_address )
        $("#member_image").attr("src",app_url+"/assets/images/members/"+data.image);


      }
    });

    $(".member-details").modal('show');
  });

});

</script>
@endpush