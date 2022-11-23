@extends('frontend.layouts.master')
@section('content')
<!-- Start Section Main Slider -->
<!-- Section Content -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-wrap committee-list">
                        <div class="card">
                            <h5 class="card-header">Students List</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Sl. No.</th>
                                                <th scope="col">Passing Year</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>1964 - 1981</td>
                                                <td>
                                                    <a class="btn btn-outline-primary" href="" target="_blank"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-primary" href="" download><i
                                                            class="fa fa-download" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>1982 - 1998</td>
                                                <td>
                                                    <a class="btn btn-outline-primary" href="" target="_blank"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-primary" href="" download><i
                                                            class="fa fa-download" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>01</td>
                                                <td>2001-2017</td>
                                                <td>
                                                    <a class="btn btn-outline-primary" href="" target="_blank"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-primary" href="" download><i
                                                            class="fa fa-download" aria-hidden="true"></i></a>
                                                </td>
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
    </section>
    <!-- End Section Content -->

@endsection
