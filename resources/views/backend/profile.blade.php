@extends('layouts.base')
@section("custom_css")
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title">
                        <div class="col-md-12">
                            <h4 class="mb-1 mt-0">Profile</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center mt-3">
                                        <img src="/backend/assets/images/placeholder.jpg" alt=""
                                            class="avatar-lg rounded-circle" />
                                        <h5 class="mt-2 mb-0">{{ auth()->user()->name }}</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-0">{{ auth()->user()->email }}</h6>

                                        <button type="button" class="btn btn-primary btn-sm mr-1 mt-2">Edit Profile</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->

                        </div>

                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills navtab-bg nav-justified" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="hotels-tab" data-toggle="pill"
                                                href="#hotels" role="tab" aria-controls="hotels"
                                                aria-selected="true">
                                                My Hotels
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tours-tab" data-toggle="pill"
                                                href="#tours" role="tab" aria-controls="tours"
                                                aria-selected="false">
                                                My Trips
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="services-tab" data-toggle="pill"
                                                href="#services" role="tab" aria-controls="services"
                                                aria-selected="false">
                                                My services
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                                            <h5 class="mt-3">My hotels</h5>
                                            <p>Hotels that you have booked before will appear here</p>
                                            <p>Check some hotels <a href="{{route('hotels')}}">here</a></p>
                                        </div>

                                        <!-- messages -->
                                        <div class="tab-pane" id="tours" role="tabpanel" aria-labelledby="tours-tab">
                                            <h5>My Tours</h5>
                                            <p>Tours that you have booked before will appear here</p>
                                            <p>Check some hotels <a href="{{route('tours')}}">here</a></p>
                                        </div>

                                        <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">

                                            <h5 class="mt-3">My services</h5>
                                            <p>Services that you have ordered before will appear here</p>
                                            <p>Check some hotels <a href="#">here</a></p>
                                            <!-- end row -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
        </div>
    </div>

@endsection


@section("javascript")
@stop
