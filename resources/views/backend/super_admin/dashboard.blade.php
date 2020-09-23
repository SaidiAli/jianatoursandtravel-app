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
                                        @if (auth()->user()->admin)
                                            <span class="badge badge-warning p-2 text-white m-1">Admin</span> <br>
                                        @endif
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
                                            <a class="nav-link active" id="users-tab" data-toggle="pill"
                                                href="#users" role="tab" aria-controls="users"
                                                aria-selected="true">
                                                Users
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="hotels-tab" data-toggle="pill"
                                                href="#hotels" role="tab" aria-controls="hotels"
                                                aria-selected="false">
                                                Hotels
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="cars-tab" data-toggle="pill"
                                                href="#cars" role="tab" aria-controls="cars"
                                                aria-selected="false">
                                                Cars
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
                                            <h5 class="mt-3">Users Tab</h5>
                                            
                                        </div>

                                        <!-- messages -->
                                        <div class="tab-pane" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                                            <h5>Facilities</h5>
                                            <a href="{{route('facilities.add')}}" class="btn btn-warning float-right">Add Facilities</a>
                                        </div>

                                        <div class="tab-pane fade" id="cars" role="tabpanel" aria-labelledby="cars-tab">

                                            <h5 class="mt-3">Car tab</h5>
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
