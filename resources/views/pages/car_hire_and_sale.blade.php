@extends('layouts.app')

@section('custom-css')
    <style>
    </style>
@stop

@section('content')

    <header class="masthead-cars">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Unbeatable car deals for hire and sale</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a href="javascript: void(0);" class="btn btn-primary">Rent Out a Car</a>
                    <a href="javascript: void(0);" class="btn btn-primary">Sell a Car</a>
                </div>
            </div>
        </div>
    </header>

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center">Featured Deals</h2>
                <div class="featured-cars-carousel">
                    @foreach ($cars as $car)
                    <div class="mr-2">
                        <div class="card pb-3" style="width: 20rem;">
                            <img src="{{$car['car_image']}}" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title">{{$car['name']}}</div>
                                <div class="card-text">
                                    <p>{{$car['description']}}</p>
                                    <address>
                                        <p>Location: {{$car['location']}}</p>
                                    </address>
                                    <p>Contact the seller: <span class="text-info contact-number" style="font-size: 1rem;">0704672670</span></p>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{route('car_preview')}}?id={{$car['id']}}" class="btn btn-outline-info">More Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center">Discounted Deals</h2>
                <div class="featured-cars-carousel">
                    <div class="mr-2">
                        <div class="card" style="width: 20rem;">
                            <img src="{{asset('images/images/cars/1.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title"> Car title <span class="float-right text-danger font-weight-bold" style="font-size: 1.5rem;">30%</span></div>
                                <div class="card-text">
                                    <p>Some description of the car</p>
                                    <address>
                                        <p>Location: Kampala</p>
                                    </address>
                                    <p>Contact the seller: 0700123456789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mr-2">
                        <div class="card" style="width: 20rem;">
                            <img src="{{asset('images/images/cars/7.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title"> Car title <span class="float-right text-danger font-weight-bold" style="font-size: 1.5rem;">30%</span></div>
                                <div class="card-text">
                                    <p>Some description of the car</p>
                                    <address>
                                        <p>Location: Kampala</p>
                                    </address>
                                    <p>Contact the seller: 0700123456789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mr-2">
                        <div class="card" style="width: 20rem;">
                            <img src="{{asset('images/images/cars/12.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title"> Car title <span class="float-right text-danger font-weight-bold" style="font-size: 1.5rem;">30%</span></div>
                                <div class="card-text">
                                    <p>Some description of the car</p>
                                    <address>
                                        <p>Location: Kampala</p>
                                    </address>
                                    <p>Contact the seller: 0700123456789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact')
@endsection

@section('custom-js')
<script>
    
</script>
@stop