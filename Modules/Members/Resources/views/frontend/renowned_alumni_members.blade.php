@extends('frontend.layouts.master')

@section('title', 'Renowned Alumni')

@section('content')
<!-- Start Section Main Slider -->
<!-- Section Content -->
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Renowned Alumni</li>
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
            <h5 class="card-header">List of Renowned Alumni</h5>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Sl. No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Passing Year</th>
                      <th scope="col">Status</th>
                      <th scope="col">Mobile</th>
                      <th scope="col">Photo</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($re_alumni_members as $key=> $re_alumni_member)
                    <tr>
                      <td> {{ ++$key }} </td>
                      <td class="members-name-td">
                        <a href="{{ route('frontend.renowned_alumni_members_details',$re_alumni_member->id) }}"> {{
                          $re_alumni_member->member->name }} </a>
                      </td>
                      <td>{{ $re_alumni_member->member->bachelor_year }}</td>
                      <td>{{ $re_alumni_member->member->designation }}</td>
                      <td>{!! $re_alumni_member->member->m_phone !!}</td>
                      <td class="text-center"><img
                          src="{{ $re_alumni_member->member->image ? asset('assets/images/members/'.$re_alumni_member->member->image) : asset('assets/images/president.png') }}"
                          alt="Member's Image"></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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

    var address = '';

    $.ajax({
      url: "{{ route('frontend.get_renowned_alumni_member') }}",
      method: 'POST',
      data: {id:id, _token:token},
      // beforeSend:function(){
      //   console.log(id);
      // },
      success: function(data) {
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