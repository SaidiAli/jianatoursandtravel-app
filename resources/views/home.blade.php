@extends('layouts.app')

@section('content')
<div class="container">
    <div class="portfolio-section">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <img src="{{asset('images/portfolio/thumbnails/2.jpg')}}" alt="profile-pic" class="img-fluid col-6 portfolio-img">
                <div class="col-6">
                    <h2>{{auth()->user()->name}}</h2>
                    <strong>{{auth()->user()->email}}</strong><br>
                    <strong>0 Bookings 0 tours</strong><br>
                    <a href="#" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
            <div class="page-section">
                <div>
                    <h2>Previous hotels</h2>
                    <h2>Previous tours</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
