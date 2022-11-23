@extends('frontend.layouts.master')

@section('title', 'Notice')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Notice</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Section Content -->
<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-wrap committee-list">
          <div class="card">
            <h5 class="card-header">Notice List</h5>
            <div class="card-body">
              <div class="table-responsive">
                @if($notices->count() > 0)
                <table class="table table-bordered table-striped table-hover">

                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Sl. No.</th>
                      <th scope="col">Title</th>
                      <th scope="col">Date</th>
                      <th scope="col" class="text-center">View</th>
                      <th scope="col" class="text-center">Download</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($notices as $key=>$notice)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $notice->title }}</td>
                      <td>{{ $notice->date_time }}</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-outline-info rounded-0" title="click for view" data-id="{{ $notice->id }}" data-toggle="modal" data-target="" id="notice_show"><i class="fa fa-eye"></i></button>
                      </td>
                      <td class="text-center">
                        <a type="button" href="{{ asset('assets/pdf/notices/'.$notice->pdf_file) }}" class="btn btn-outline-warning rounded-0" title="click for download" download>
                          <i class="fa fa-download"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                @else
                <h2 class="text-center">No Notice Published Yet!!</h2>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section Content -->


<!-- Notice Details Modal -->
<div class="modal fade notice-details" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <object id="pdf_file" data="{{ asset('assets/frontend/images/constitution_of_bls.pdf') }}" type="application/pdf" height="1000px" width="100%">
          <p><b>Notice</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('assets/images/organogram.pdf') }}">Download PDF</a>.</p>
        </object>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Notice Details Modal -->


@endsection

@push('after-scripts')
<script type="text/javascript">

$(document).ready(function(){

var app_url = "{{ env("APP_URL") }}";

  var token = $('meta[name="csrf-token"]').attr('content');

  $(document).on('click', '#notice_show', function(e){

    var id = $(this).attr('data-id');

    // Request to get single notice by nitice id
    $.ajax({
      url: "{{ route('frontend.get_single_notice') }}",
      method: 'POST',
      data: {id:id, _token:token},
      // beforeSend:function(){
      //   alert(token);
      // },
      success: function(response) {
        $('#title').html(response.title)
        $("#pdf_file").attr("data", app_url+"/assets/pdf/notices/"+response.pdf_file);
      }
    });

    $(".notice-details").modal('show');

  });

});

</script>

@endpush
