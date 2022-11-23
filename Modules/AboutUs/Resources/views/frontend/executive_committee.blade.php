@extends('frontend.layouts.master')

@section('title', 'Executive Committee')

@section('content')
<section class="site-nav">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="about.html">About</a></li>
        <li class="breadcrumb-item active" aria-current="page">Executive Committee</li>
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
            <h5 class="card-header">Executive Committee</h5>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Position</th>
                      <th scope="col">Sl. No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Occupation</th>
                      <th scope="col">Mobile</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Photo</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($committe_types as $key => $type)
                    @if($type->members->count() > 1)
                    @php $isRowSpan = True; @endphp
                    @foreach($type->members as $index=>$member)
                    <tr>
                      @if($isRowSpan)
                      <td rowspan="{{ $type->members->count() }}"> {{ $type->name }} </td>
                      @php $isRowSpan = false; @endphp
                      @endif
                      <td>{{ ++$index }}</td>
                      <td>{{ $member->name }}</td>
                      <td>{{ $member->occupation }}</td>
                      <td>{{ $member->m_phone }}</td>
                      <td>{{ $member->m_email }}</td>
                      <td>
                        <img src="{{ asset('assets/images/members/' . $member->image) }}" class="img-fluid img-thumbnail" style="max-width:100px;" alt="{{ $member->name }}">
                      </td>
                    </tr>
                    @endforeach
                    @else
                    @foreach($type->members as $index=>$member)
                    <tr>
                      <td> {{ $type->name }} </td>
                      <td>{{ ++$index }}</td>
                      <td>{{ $member->name }}</td>
                      <td>{{ $member->occupation }}</td>
                      <td>{{ $member->m_phone }}</td>
                      <td>{{ $member->m_email }}</td>
                      <td>
                        <img src="{{ asset('assets/images/members/' . $member->image) }}" class="img-fluid img-thumbnail" style="max-width:100px;" alt="{{ $member->name }}">
                      </td>
                    </tr>
                    @endforeach
                    @endif
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

@endsection
