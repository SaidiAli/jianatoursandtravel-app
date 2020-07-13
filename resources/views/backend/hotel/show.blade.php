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
                            </ol>
                            <h5>Location</h5>
                            <p>Located in {{$hotel->district.' , '.$hotel->address}}</p>
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