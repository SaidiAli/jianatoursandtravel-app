@extends('layouts.base')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card mb-4 mb-xl-0">
                        <img class="card-img-top img-fluid" src="{{asset('storage/'.$hotel->cover_photo)}}" alt="hotel image">
                        <div class="card-body">
                            <h2 class="card-title">{{$hotel->name}}</h2>
                            <p>{{$hotel->description}}</p>
                            <h5>Services Offered</h5>
                            <ol>
                                <li>Single Bedrooms</li>
                                <li>Double Bedrooms</li>
                                <li>Spa</li>
                                <li>Sauna</li>
                                <li>Escorts</li>
                                <li>Swimming pool</li>
                                <li>Free WIFI</li>
                                <li>Unspeakable security</li>
                            </ol>
                            <h5>Location</h5>
                            <p>Located in {{$hotel->district.' , '.$hotel->address}}</p>

                            <h5>Book here</h5>

                            <div class="row">
                                <div class="col-lg-8">
                                    <form action="" class="needs-validation" novalidate>
                                @csrf
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="example-date">Check In</label>
                                        <input class="form-control" id="example-date" type="date"
                                            name="date">
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="example-time">Time</label>
                                            <input class="form-control" id="example-time" type="time" name="time">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="example-date">Check Out</label>
                                        <input class="form-control" id="example-date" type="date"
                                            name="date">
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="example-time">Time</label>
                                            <input class="form-control" id="example-time" type="time" name="time">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="card col-lg-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-5">
                                            <img src="assets/images/small/img-6.jpg" class="card-img" alt="hotel room picture">
                                            </div>
                                            <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title font-size-16">Card title</h5>
                                                <p class="card-text text-muted">This is a wider card with supporting text lead-in to additional content.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-lg-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-5">
                                            <img src="assets/images/small/img-6.jpg" class="card-img" alt="hotel room picture">
                                            </div>
                                            <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title font-size-16">Card title</h5>
                                                <p class="card-text text-muted">This is a wider card with supporting text lead-in to additional content.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-lg-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-5">
                                            <img src="assets/images/small/img-6.jpg" class="card-img" alt="hotel room picture">
                                            </div>
                                            <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title font-size-16">Card title</h5>
                                                <p class="card-text text-muted">This is a wider card with supporting text lead-in to additional content.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                                </div>
                            </div>

                            <h5>Contact</h5>
                            <p>Phone: {{$hotel->phone}}</p>
                            <p>Email: {{$hotel->email}}</p>
                            <a href="{{route('booking.create')}}" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection