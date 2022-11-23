@extends('frontend.layouts.master')

@section('title', $journal->title)

@section('content')
<section class="site-nav">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{ route('frontend.journal_list') }}">Journal</a></li>
				<li class="breadcrumb-item active" aria-current="page">Journal details</li>
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
						<h5 class="card-header">Journal details</h5>
						<div class="card-body">
							<div class="row">

								<div class="col-md-6">
									<div class="journal-left-details">
										<h6>
											{{ $journal->title }}
										</h6>
										<p class="j-pub-day"><b><i class="fa fa-calendar" aria-hidden="true"></i> Published Date:</b> {{ date("d M Y",strtotime($journal->publication_date)) }} </p>
										<p><b><i class="fa fa-tags" aria-hidden="true"></i> Keywords:</b> {{ $journal->keywords }} </p>
									</div>
								</div>

								<div class="col-md-6">
									<div class="journal-right-details">
										<div class="journal-download">
											<a class="btn btn-danger" href="{{ asset('assets/pdf/journals/'.$journal->pdf_file) }}" download><i class="fa fa-file-pdf-o" aria-hidden="true"></i> DOWNLOAD</a>
											<p class="j-authers">
												{!! $journal->authors !!}
											</p>
											<!-- <p class="j-authers">
											<b><i class="fa fa-user-circle-o" aria-hidden="true"></i> Sherif Marouf:</b>
											Department of Microbiology, Faculty of Veterinary Medicine, Cairo University, Giza, 12211, Egypt.
										</p> -->
									</div>
								</div>
							</div>

						</div>

						<div class="row journal-bottom-details">
							<div class="col-sm-12">
								<h5>Abastract:</h5>
								{!! $journal->abstract !!}
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
@endsection
