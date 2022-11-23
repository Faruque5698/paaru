@extends('frontend.layouts.master')

@section('title', 'Journal')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('frontend.journal_list') }}">Journal</a></li>
        <li class="breadcrumb-item active" aria-current="page">Month Wise</li>
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
            <h5 class="card-header">All journals of {{ $full_month_name }} {{ $year }}</h5>
            <div class="card-body">
              @if($journals_monthwise->count() > 0)
              @foreach($journals_monthwise as $journal_monthwise)
              <div class="row">
                <div class="col-sm-12">
                  <div class="single-article">
                    <h4>{{ $journal_monthwise->title }}</h4>
                    <div class="row sa-dna">
                      <div class="col-sm-12"><b><i class="fa fa-calendar" aria-hidden="true"></i> Published Date:</b> <span class="text-uppercase">{{ date("d M Y",strtotime($journal_monthwise->publication_date)) }}</span></div>
                      <div class="col-sm-12"><b><i class="fa fa-user-circle-o" aria-hidden="true"></i> Authors:</b>  {!! strip_tags($journal_monthwise->authors) !!}</div>
                    </div>
                    <p class="mt-1"><b><i class="fa fa-info-circle" aria-hidden="true"></i> Abstract:</b> {!! str_limit(strip_tags($journal_monthwise->abstract), 150) !!}</p>
                    <div class="p0">
                      <a class="btn btn-info btn-sm" href="{{ route('frontend.journal_details',$journal_monthwise->id) }}">Abstract</a>
                      <a class="btn btn-info btn-sm" href="{{ asset('assets/pdf/journals/'.$journal_monthwise->pdf_file) }}" target="_blank">PDF</a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              @endif

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section Content -->
@endsection
