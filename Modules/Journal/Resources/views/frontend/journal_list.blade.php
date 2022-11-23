@extends('frontend.layouts.master')

@section('title', 'Journal')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Journal</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Section Content -->
<section id="content" class="journal-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="journal-volume">
          <div class="card">
            <h5 class="card-header">Journal Volumes</h5>
            <div class="card-body">

              <div class="accordion" id="accordionExample">

                @if($all_journal_years->count() > 0)
                @foreach($all_journal_years as $key=>$all_year)
                <div class="card">

                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne{{$all_year->year}}" aria-expanded="false" aria-controls="collapseOne">
                        Volume - {{ $total-- }} ({{ $all_year->year }})
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne{{$all_year->year}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      @if($all_journals->count() > 0)

                      @php
                      $check1 = true; $check2 = true; $check3 = true; $check4 = true;
                      $check5 = true; $check6 = true; $check7 = true; $check8 = true;
                      $check9 = true; $check10 = true; $check11 = true; $check12 = true;
                      @endphp

                      @foreach($all_journals as $a_journal)
                      <ul class="vo-month">
                        @if($check1 and ((int)date("m",strtotime($a_journal->publication_date)) == 1) and ($all_year->year == $a_journal->year) )
                        @php $check1 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> January</a></li>
                        @endif
                        
                        @if($check2 and ((int)date("m",strtotime($a_journal->publication_date)) == 2) and ($all_year->year == $a_journal->year) )
                        @php $check2 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> February</a></li>
                        @endif

                        @if($check3 and ((int)date("m",strtotime($a_journal->publication_date)) == 4) and ($all_year->year == $a_journal->year) )
                        @php $check3 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> March</a></li>
                        @endif

                        @if($check4 and ((int)date("m",strtotime($a_journal->publication_date)) == 4) and ($all_year->year == $a_journal->year) )
                        @php $check4 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> April</a></li>
                        @endif

                        @if($check5 and ((int)date("m",strtotime($a_journal->publication_date)) == 5) and ($all_year->year == $a_journal->year) )
                        @php $check5 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> May</a></li>
                        @endif

                        @if($check6 && ((int)date("m",strtotime($a_journal->publication_date)) == 6) and ($all_year->year == $a_journal->year) )
                        @php $check6 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> June</a></li>
                        @endif

                        @if($check7 and ((int)date("m",strtotime($a_journal->publication_date)) == 7) and ($all_year->year == $a_journal->year) )
                        @php $check7 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> July</a></li>
                        @endif

                        @if($check8 and ((int)date("m",strtotime($a_journal->publication_date)) == 8) and ($all_year->year == $a_journal->year) )
                        @php $check8 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> August</a></li>
                        @endif

                        @if($check9 and ((int)date("m",strtotime($a_journal->publication_date)) == 9) and ($all_year->year == $a_journal->year) )
                        @php $check9 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> September</a></li>
                        @endif

                        @if($check10 and ((int)date("m",strtotime($a_journal->publication_date)) == 10) and ($all_year->year == $a_journal->year) )
                        @php $check10 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> October</a></li>
                        @endif

                        @if($check11 and ((int)date("m",strtotime($a_journal->publication_date)) == 11) and ($all_year->year == $a_journal->year) )
                        @php $check11 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> November</a></li>
                        @endif

                        @if($check12 and ((int)date("m",strtotime($a_journal->publication_date)) == 12) and ($all_year->year == $a_journal->year) )
                        @php $check12 = false @endphp
                        <li><a href="{{ route('frontend.journal_monthwise',$a_journal->publication_date) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> December</a></li>
                        @endif
                      </ul>
                      @endforeach
                      @endif
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

      <div class="col-md-8">
        <div class="journal-content">
          <div class="card">
            <h5 class="card-header">Latest Articles</h5>
            <div class="card-body">

              <!-- Start Single Article -->
              @if($journals->count() > 0)
              @foreach($journals as $key=>$journal)
              <div class="single-article">
                <h4>{{ $journal->title }}</h4>
                <div class="row sa-dna">
                  <div class="col-sm-12"><b><i class="fa fa-calendar" aria-hidden="true"></i> Published Date:</b> <span class="text-uppercase">{{ date("d M Y",strtotime($journal->publication_date)) }}</span></div>
                  <div class="col-sm-12"><b><i class="fa fa-user-circle-o" aria-hidden="true"></i> Authors:</b>  {!! strip_tags($journal->authors) !!}</div>
                </div>
                <p class="mt-1"><b><i class="fa fa-info-circle" aria-hidden="true"></i> Abstract:</b> {!! str_limit(strip_tags($journal->abstract), 150) !!}</p>
                <div class="p0">
                  <a class="btn btn-info btn-sm" href="{{ route('frontend.journal_details',$journal->id) }}">Abstract</a>
                  <a class="btn btn-info btn-sm" href="{{ asset('assets/pdf/journals/'.$journal->pdf_file) }}" target="_blank">PDF</a>
                </div>
              </div>
              @endforeach
              @endif
              <!-- End Single Article -->

            </div>

            <div class="row mt-5 activity-pagi">
              <div class="col-sm-12">
                <nav aria-label="Page navigation example">
                  {{ $journals->links("pagination::bootstrap-4") }}
                </nav>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- End Section Content -->
@endsection
