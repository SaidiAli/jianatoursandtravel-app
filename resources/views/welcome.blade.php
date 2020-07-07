@extends('layouts.app')

@section('content')
    <!-- About Section -->

    @include('partials.masthead')

    <section class="page-section bg-primary" id="about">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <h2 class="text-white mt-0 text-center">We've got what you need!</h2>
            <hr class="divider light my-4">
            <div class="container text-white-75">
                <p>Here at Jiana Tourism and Travel we take care of everything that you feel you'd need during your tour or travel around Uganda and the rest of Africa. Our goal is to make you feel at home as musch as wherever you are from, and make you want to stay. Lol </p>
                <p>Tourism and Travel has never been easy with our services. We serve you from when you get a thought of it.</p>
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
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider my-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-map text-primary mb-4"></i>
                <h3 class="h4 mb-2">Travel Guide</h3>
                <p class="text-muted mb-0">You will surely be guided and insured at every moment of your tour.</p>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-hotel text-primary mb-4"></i>
                <h3 class="h4 mb-2">Hotel Booking</h3>
                <p class="text-muted mb-0">You will sleep in the most lavishing hotels and resorts or some great Air BnB</p>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-passport text-primary mb-4"></i>
                <h3 class="h4 mb-2">Visa and Passport Processing</h3>
                <p class="text-muted mb-0">Get your visa or passport in a jaw dropping time with our smooth services</p>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-plane text-primary mb-4"></i>
                <h3 class="h4 mb-2">Airline Ticketing</h3>
                <p class="text-muted mb-0">Get an airline ticket with no trouble or any rough hudles</p>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-bus text-primary mb-4"></i>
                <h3 class="h4 mb-2">Bus and Ferry Booking</h3>
                <p class="text-muted mb-0">Never miss a bus or ferry for your important journey</p>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-camera text-primary mb-4"></i>
                <h3 class="h4 mb-2">Photography</h3>
                <p class="text-muted mb-0">Every moment captured in HD for you to remenice.</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="gallery">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/images/1.jpg">
                <img class="img-fluid" src="img/images/1.jpg" alt="">
                <div class="portfolio-box-caption">
                <div class="project-category text-white-75">
                    BWINDI IMPEMETRABLE NATIONAL PARK
                </div>
                <div class="project-name"></div>
                </div>
            </a>
            <p class="container">Looking for a gorilla trekking safari in Uganda? Located in Western Uganda, Bwindi Forest is the most popular tourist
            site in Uganda, home to the extincting mountain gorillas</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/images/2.jpg">
                <img class="img-fluid" src="img/images/2.jpg" alt="">
                <div class="portfolio-box-caption">
                <div class="project-category text-white-75">
                    QUEEN ELIZABETH NATIONAL PARK
                </div>
                <div class="project-name"></div>
                </div>
            </a>
            <p class="container">This is the second most popular tourist destination taking Uganda Safaris. It is the most popular destination for
            holiday makers having a big population of tree climbing lions</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/images/3.jpg">
                <img class="img-fluid" src="img/images/3.jpg" alt="">
                <div class="portfolio-box-caption">
                <div class="project-category text-white-75">
                    MURCHISON FALLS
                </div>
                <div class="project-name"></div>
                </div>
            </a>
                <p class="container">Renowned safari park with diverse fauna and flora, home the great scenic Murchison falls and a variety of animals, birds
                and plants</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/images/4.jpg">
                <img class="img-fluid" src="img/images/4.jpg" alt="">
                <div class="portfolio-box-caption">
                <div class="project-category text-white-75">
                    KIDEPO NATIONAL PARK
                </div>
                <div class="project-name"></div>
                </div>
            </a>
            <p class="container">Located in the extreme northern part of Uganda, Kidepo has an amazing array of wildlife and its indeed the best for game
            viewing</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/images/5.jpg">
                <img class="img-fluid" src="img/images/5.jpg" alt="">
                <div class="portfolio-box-caption">
                <div class="project-category text-white-75">
                    RWENZORI NATIONAL PARK
                </div>
                <div class="project-name"></div>
                </div>
            </a>
            <p class="container">Also known as the mountains of the moon, Rwenzori Mountain is one the best places for hiking to the glaciated peaks</p>
            </div>
            <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/images/6.jpg">
                <img class="img-fluid" src="img/images/6.jpg" alt="">
                <div class="portfolio-box-caption p-3">
                <div class="project-category text-white-75">
                    KIBALE FOREST NATIONAL PARK
                </div>
                <div class="project-name"></div>
                </div>
            </a>
            <p class="container">This is the best place for chimpanzee tracking while in Uganda. The forest has over 13 primates that thrive in the
            forest.</p>
            </div>
        </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="page-section">
        <div class="container text-center">
        <h2 class="mb-4">More Wonders To See</h2>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
            <img class="image-fluid" src="./img/images/bobi.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
            <div class="col-lg-6 col-sm-12">
            <p>Africa is known for it's wide variety of cultures, its knows to be in thousands. Link with us to get to visit some of the cultures here, you will be surprised how people so different in how they talk, live , behave, literally different in all aspects of life connect and live. Its amazing</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-sm-12">
            <img class="image-fluid" src="./img/images/equator.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
            <div class="col-lg-6 col-sm-12">
            <p>A place known for dividing the earth into half, wow, lietrally you get to step in both halves of the world, its amazing. And there's more amazing things to find out. Book with us and you will have a story to tell.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-sm-12">
            <img class="image-fluid" src="./img/images/hotels/Forest-Cottages-Kampala.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
            <div class="col-lg-6 col-sm-12">
            <p>The most lavishing hotels and resorts, in town and also deep down in the mountain and tropics. A place were you take a deep breath and have five years to you, lol. <br> <a href="#"> See more here</a></p>
            </div>
        </div>
        </div>
    </section>

    @include('partials.contact')
@endsection
