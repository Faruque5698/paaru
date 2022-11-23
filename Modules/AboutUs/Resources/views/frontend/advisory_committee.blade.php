@extends('frontend.layouts.master')

@section('title', 'Advisory Committee')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="">About</a></li>
        <li class="breadcrumb-item active" aria-current="page">Advisory Committee</li>
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
            <h5 class="card-header">Advisory Committee</h5>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Sl. No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Mobile</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Photo</th>
                    </tr>
                  </thead>
                  <tbody>

                    @if($advisory_committees->count() > 0)
                    @foreach($advisory_committees as $key=>$a_committee)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $a_committee->member->name }}</td>
                      <td>{{ $a_committee->member->m_phone }}</td>
                      <td>{{ $a_committee->member->m_email }}</td>
                      <td><img src="{{ asset('assets/images/members/' .$a_committee->member->image) }}" alt="Member's Image"></td>
                    </tr>
                    @endforeach
                    @endif

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

@endsection
