@extends('layouts.app')

@section('content')

<header class="masthead-home">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Come have an experience</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    @guest
                        <p class="text-center text-white">Create an account to discover the hidden power of Jiana Tours and Travel plus some amazing deals</p>
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
                <p>Here at Jiana Tourism and Travel we take care of everything that you feel you'd need during your tour or travel around Uganda and the rest of Africa. Our goal is to make you feel at home as musch as wherever you are from, and make you want to stay. Lol </p>
                <p>Tourism and Travel has never been easire with our services. We serve you from when you get a thought of it.</p>
                <p>You ever want to have a family vacation, retirement vacation , Honey moon, Business trip, School trip, want to explore nature, to mention but a few, we got it all sorted.</p>

                <div class="row justify-content-center mt-5">
                <a href="#services" class="text-white js-scroll-trigger"
                    style="display: inline-block; text-decoration: none; text-align: center;">What we do <br> <i
                    class="fas fa-2x fa-arrow-down mb-4"></i></a>
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
                <p class="text-muted mb-0">You will surely be guided and insured at every moment of your tour.</p>
                <p><a href="{{route('tours')}}">Find out more ...</a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-hotel text-primary mb-4"></i>
                <h3 class="h4 mb-2">Hotel Booking</h3>
                <p class="text-muted mb-0">You will sleep in the most lavishing hotels and resorts or some great Air BnB</p>
                <p><a href="{{route('hotel.index')}}">Find out more ...</a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-passport text-primary mb-4"></i>
                <h3 class="h4 mb-2">Visa and Passport Processing</h3>
                <p class="text-muted mb-0">Get your visa or passport in a jaw dropping time with our smooth services</p>
                <p><a href="#">Find out more ...</a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-plane text-primary mb-4"></i>
                <h3 class="h4 mb-2">Airline Ticketing</h3>
                <p class="text-muted mb-0">Get an airline ticket with no trouble or any rough hudles</p>
                <p><a href="#">Find out more ...</a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-bus text-primary mb-4"></i>
                <h3 class="h4 mb-2">Bus and Ferry Booking</h3>
                <p class="text-muted mb-0">Never miss a bus or ferry for your important journey</p>
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
            <p class="container">Looking for a gorilla trekking safari in Uganda? Located in Western Uganda, Bwindi Forest is the most popular tourist
            site in Uganda, home to the extincting mountain gorillas</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="./images/images/2.jpg">
                <img class="img-fluid" src="images/images/2.jpg" alt="">
            </a>
            <p class="container">This is the second most popular tourist destination taking Uganda Safaris. It is the most popular destination for
            holiday makers having a big population of tree climbing lions</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="./images/images/3.jpg">
                <img class="img-fluid" src="images/images/3.jpg" alt="">
            </a>
                <p class="container">Renowned safari park with diverse fauna and flora, home the great scenic Murchison falls and a variety of animals, birds
                and plants</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="images/images/4.jpg">
                <img class="img-fluid" src="images/images/4.jpg" alt="">
            </a>
            <p class="container">Located in the extreme northern part of Uganda, Kidepo has an amazing array of wildlife and its indeed the best for game
            viewing</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="images/images/5.jpg">
                <img class="img-fluid" src="images/images/5.jpg" alt="">
            </a>
            <p class="container">Also known as the mountains of the moon, Rwenzori Mountain is one the best places for hiking to the glaciated peaks</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="images/images/6.jpg">
                <img class="img-fluid" src="images/images/6.jpg" alt="">
            </a>
            <p class="container">This is the best place for chimpanzee tracking while in Uganda. The forest has over 13 primates that thrive in the
            forest.</p>
            </div>
        </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="section">
        <div class="container text-center">
        <h2 class="mb-4 text-uppercase">the best vaccations happen with us</h2>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="./images/images/lake-naivasha-walking-giraffe-cropped.jpg" alt="">
                    <p>A honey moon in the wild</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="./images/images/equator.jpg" alt="">
                    <p>Cooperate vaccation, a great time to connect with your work mates and boss</p>
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
            </div>
        </div>
    </section>

    @include('partials.contact')
@endsection
