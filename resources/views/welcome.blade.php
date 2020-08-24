@extends('layouts.app')

@section('content')

<header class="masthead-home">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Come have an incredible experience</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    @guest
                        <p class="text-center text-white">Create an account to connect to exquisite service at Jiana Tours and Travel</p>
                        <a href="{{route('register')}}" class="btn btn-primary btn-lg">Create Account</a>
                    @endguest
                </div>
            </div>
        </div>
    </header>
    <!-- About Section -->

    <section class="page-section bg-primary" id="about">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <h2 class="text-white mt-0 text-center text-uppercase">We've got what you need</h2>
            <hr class="divider light my-4">
            <div class="container text-white-75">
                <p>Here at Jiana Tours and Travel Agency we exist only to offer you the finest and highest quality services in the market.
                    Ranging from travel assistance, hotel booking, car rentals you name it, we have got you covered. The recipe to an incredible Ugandan experience is you , us and MOTHER NATURE.
                    
                    Let us show you a good time, with almost no effort on your side, well minus having fun ofcourse. Trust us with your precious time and leave a refreshed and happier member of the jiana family.</p>

                <div class="row justify-content-center mt-5">
                <a href="#services" class="text-white js-scroll-trigger"
                    style="display: inline-block; text-decoration: none; text-align: center;">What we do <br>
                     <i class="fas fa-2x fa-arrow-down mb-4"></i></a>
                </div>

            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="page-section" id="services">
        <div class="container">
        <h2 class="text-center mt-0 text-uppercase">At Your Service</h2>
        <hr class="divider my-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-map text-primary mb-4"></i>
                <h3 class="h4 mb-2">Travel Guide</h3>
                <p class="text-muted mb-0">Our team of dedicated guides will add a new flavour to your african adventure.</p>
                <p><a href="{{route('tours')}}">Find out more ...</a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-hotel text-primary mb-4"></i>
                <h3 class="h4 mb-2">Hotel Booking</h3>
                <p class="text-muted mb-0">Expect to be treated to the most comfortable world class hotels at comfortable prices.</p>
                <p><a href="{{route('hotel.index')}}">Find out more ...</a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-passport text-primary mb-4"></i>
                <h3 class="h4 mb-2">Visa and Passport Processing</h3>
                <p class="text-muted mb-0">Get your visa or passport with no hurdles or deceit with our verified services.</p>
                <p><a href="#">Find out more ...</a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-plane text-primary mb-4"></i>
                <h3 class="h4 mb-2">Airline Ticketing</h3>
                <p class="text-muted mb-0">Get an airline ticket without the longline or long wait.</p>
                <p><a href="#">Find out more ...</a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-bus text-primary mb-4"></i>
                <h3 class="h4 mb-2">Boat and Luxury Cruise Booking</h3>
                <p class="text-muted mb-0">We help you find a safe weekend cruise, or that dream boat ride.</p>
                <p><a href="#">Find out more ...</a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-car text-primary mb-4"></i>
                <h3 class="h4 mb-2">Car Hire and Sale</h3>
                <p class="text-muted mb-0">Find the best deals for car hire and sales on our platform with jaw dropping discounts</p>
                <p><a href="{{route('car-hire-and-sale')}}">Find out more ...</a></p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- gallery Section -->
    <section id="portfolio">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="images/images/1.jpg">
                <img class="img-fluid" src="images/images/1.jpg" alt="">
            </a>
            <p class="container">Looking for a gorilla trekking safari in Uganda?, Hidden in the curvy emerald hills in Western Uganda, Bwindi Forest and Mgahingas harbour the last of king kong's family.The treasured silverback mountain gorillas.
        </p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="./images/images/2.jpg">
                <img class="img-fluid" src="images/images/2.jpg" alt="">
            </a>
            <p class="container">This is the second most popular tourist destination  among all the numerous Ugandan Safari options. It is a very popular destination with many holiday makers and rightly so. 
            </p>
            </div>
            <div class="col-lg-4 col-sm-6"> 
            <a class="portfolio-box" href="./images/images/3.jpg">
                <img class="img-fluid" src="images/images/3.jpg" alt="">
            </a>
                <p class="container">World famous safari parks with diverse fauna and flora, we boast of the great scenic Murchison falls and a variety of animal and plant species you will not regret the investment.
                </p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="images/images/4.jpg">
                <img class="img-fluid" src="images/images/4.jpg" alt="">
            </a>
            <p class="container">Located in the extreme northern part of Uganda, Kidepo has an amazing array of wildlife and its indeed the best for game
            viewing.</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="images/images/5.jpg">
                <img class="img-fluid" src="images/images/5.jpg" alt="">
            </a>
            <p class="container">The country's dramatic scenery hits the refresh button and relieves you of all stress.Mountains of the moon, Rwenzori Mountain is a marvolous site for hiking to the glaciated peaks.</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="images/images/6.jpg">
                <img class="img-fluid" src="images/images/6.jpg" alt="">
            </a>
            <p class="container">The love for our country drives us to promote local tourism. UGANDANS come see the blessing you know you have .And lose the mental stress the COVID-19 Pandemic put on us all</p>
            </div>
        </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="section">
        <div class="container text-center">
        <h2 class="mb-4 text-uppercase">The best vacations happen with us</h2>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="./images/images/lake-naivasha-walking-giraffe-cropped.jpg" alt="">
                    <p>A honey moon in the wild</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="./images/images/equator.jpg" alt="">
                    <p>Cooperate vaccation, a great time to shake off that work stress and connect with your work mates and boss</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-4 text-uppercase text-center">Featured car deals</h2>
                <div class="d-flex justify-content-center m-5">
                    <div class="home-carousel">
                        @foreach ($cars as $car)
                            <div class="carousel-cell">
                                <img src="{{$car['car_image']}}" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('car-hire-and-sale')}}" class="btn btn-info btn-lg text-white">Find Out More</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact')
@endsection
