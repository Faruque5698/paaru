@extends('frontend.layouts.master')

@section('title', "All Members")

@section('content')
<!-- Start Section Main Slider -->
<!-- Section Content -->
<section class="site-nav">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Members</li>
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
                        <h5 class="card-header">List of All Members</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered table-striped table-hover">
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

                                        @foreach($members as $key=> $member)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                            <td class="members-name-td">
                                                <a href="#" id="member" data-toggle="modal" data-id="{{ $member->id }}"
                                                    data-target=""> {{ $member->name }} </a>
                                            </td>
                                            <td>{{ $member->bachelor_year }}</td>
                                            <td>{{ $member->designation }}</td>
                                            <td>{{ $member->m_phone }}</td>
                                            <td class="text-center">
                                                <img src="{{ $member->image ? asset('assets/images/members/'.$member->image) : asset('assets/images/president.png') }}"
                                                    alt="Member's Image">
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- <div style="float: right;">
                                    {!! $members->render() !!}
                                </div> --}}
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
                <h5 class="modal-title" id="name"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7">
                        <p id="occupation">Instructor</p>
                        <p id="designation">Designation</p>
                        <p>Permanent Address : <span id="p_location"></span></p>
                        <!--<p id="date_of_birth">Date Of Birth</p>-->
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
                                        <td>Mailing Address</td>
                                        <td id="m_location"></td>
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



@push ('after-styles')
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="{{ asset('assets/backend/vendor/datatable/datatables.min.css') }}">

@endpush

@push ('after-scripts')
<!-- DataTables Core and Extensions -->
<script type="text/javascript" src="{{ asset('assets/backend/vendor/datatable/datatables.min.js') }}"></script>

<script type="text/javascript">
    $(function () {

  $("#datatable").DataTable(
    {
      "aaSorting": [[ 0, "asc" ]],
      "aLengthMenu": [[10, 15, 25, 50, 100 , -1], [10, 15, 25, 50, 100, "All"]],
      "iDisplayLength": 10,
    }
  );

//   $('#table1').DataTable({
//     "paging": true,
//     "lengthChange": false,
//     "searching": false,
//     "ordering": false,
//     "info": true,
//     "autoWidth": false
//   });
});



</script>

<script type="text/javascript">
    $(document).ready(function(){

  var token = $('meta[name="csrf-token"]').attr('content');

  var app_url = "{{ env("APP_URL") }}";

  var id = '';

  var address = '';
  var p_address = '';

  $(document).on('click', '#member', function(e){
    e.preventDefault();
    id = $(this).attr('data-id');

    $("#member_image").attr("src",app_url+"/assets/images/members/member.gif");


    $.ajax({
      url: "{{ route('frontend.get_single_member') }}",
      method: 'POST',
      data: {id:id, _token:token},
      cache:false,
      // beforeSend:function(){
      //   console.log(id);
      // },
      beforeSend: function(){
        address = '';
        p_address = '';
      },
      success: function(data) {
        // get division, district and thana name for Present address
        //console.log(data)
        /* address = data.m_location+', '+data.m_post_code+', '+data.get_district.name; */
        let m_location = data.m_location??"";
        let m_post_code = data.m_post_code??"";
        let get_district = data.get_district?.name??"";
        if(m_location !== ""){
            address = m_location.concat(", ", m_post_code, ", ", get_district);
        }

        /* p_address = data?.p_location+', '+data?.p_post_code+', '+data?.get_p_district?.name ; */

        let p_location = data.p_location??"";
        let p_post_code = data.p_post_code??"";
        let get_p_district = data.get_p_district?.name??"";
        if(p_location !== ""){
            p_address = p_location.concat(", ", p_post_code, " ",get_p_district);
        }

        member_image = data.image;
        //
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
        $('#p_location ').html(p_address)

        // $("#member_image").attr("src",app_url+"/assets/images/members/"+data.image);
        // $("#member_image").attr("src",app_url+"/assets/images/president.png");
        if (member_image == "") {
          $("#member_image").attr("src",app_url+"/assets/images/president.png");
        }else{
          $("#member_image").attr("src",app_url+"/assets/images/members/"+data.image);
        }
        // console.log(member_image)

      }
    });

    $(".member-details").modal('show');
  });

});

</script>

@endpush