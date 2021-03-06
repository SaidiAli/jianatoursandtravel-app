@extends('layouts.app')

@section('content')

<header class="masthead-hotels">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">The most acoustic hotels</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                </div>
            </div>
        </div>
    </header>

    <section id="content" class="section">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8 m-auto">
                <div class="card p-3">
                    <div class="card-title">
                        <h2 class="text-center">Find Hotels in Uganda</h2>
                    </div>
                    <div class="card-body">
                        <div class="">
                          <form action="{{route('hotels.search')}}">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="search" class="form-control" placeholder="Search for a city of particular Hotel" name="search">
                                        </div>
                                        <div class="col-4">
                                            <input type="submit" value="Search" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-center mb-5 text-uppercase">our registered Hotels</h1>
        <div class="container">
            <div class="row">
                @forelse ($hotels as $hotel)
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                            <img class="img-fluid card-img-top" src="{{$hotel->cover_photos}}"
                                alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{route('hotel.show', ['hotel' => $hotel])}}">{{$hotel->name}}</a></h5>
                            <p class="card-text">{{Str::limit($hotel->description, 200, ' ...')}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{route('hotel.show', ['hotel' => $hotel])}}" class="btn btn-primary">Book Now</a>
                                <div>
                                    <small class="ave">Averagely:</small>
                                    <h3>UGX {{$hotel->average_price}}/<span class="pn">per night</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="text-center text-info">Sorry, there is no Hotel registered with us yet</p>
                        <p class="text-center"><a href="{{route('hotel.create')}}">Register</a> a Hotel</p>
                    </div>
                </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="section">
        <div>
            <h1 class="text-center mb-5 text-uppercase">hot deals</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="text-center text-info">Sorry, there is no Hotel with discounted deals at the moment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                <h2 class="text-center">Register your Hotel with us</h2>
                <p class="text-center">Let your hotel be accessed by millions who use our platform</p>
            </div>
            <div class="col-lg-6 text-center">
                <a href="{{route('hotel.create')}}" class="btn btn-primary">Register Hotel</a>
            </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.contact')
@endsection
