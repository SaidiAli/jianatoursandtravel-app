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
                    <div class="carousel-cell">
                        <img src="{{asset('images/images/cars/1.jpg')}}">
                    </div>
                    <div class="carousel-cell">
                        <img src="{{asset('images/images/cars/7.jpg')}}">
                    </div>
                    <div class="carousel-cell">
                        <img src="{{asset('images/images/cars/3.jpg')}}">
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