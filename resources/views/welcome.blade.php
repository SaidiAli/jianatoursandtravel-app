<x-app>

    <header class="masthead-home">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Book exclusive hotels in uganda</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    @guest
                        <p class="text-center text-white">Create an account to access exquisite services at Jiana Tours and Travel</p>
                        <a href="{{route('register')}}" class="btn btn-primary btn-lg">Create Account</a>
                    @endguest
                </div>
            </div>
        </div>
    </header>
    <!-- About Section -->

{{--    Search section --}}
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-3 m-2">
                    <div class="card-title">
                        <h1 class="text-center">Find Hotels in Uganda</h1>
                        <p class="text-center">Search for a hotel in any district or place</p>
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
    </section>

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="mb-4 text-uppercase text-center">top rated hotels</h2>
                <div class="d-flex justify-content-center m-5">
                    <div class="home-hotels-carousel" data-flickity='{"autoPlay": 3000, "wrapAround": true, "groupCells": true }'>
                        @foreach($hotels as $hotel)
                            <div class="carousel-cell">
                                <div class="card">
                                        <img class="img-fluid card-img-top" src="{{$hotel->cover_photos}}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title"><h3>{{$hotel->name}}</h3></h5>
                                        <p class="card-text">{{$hotel->description}}</p>
                                        <a href="" class="btn btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <p><a href="{{route('tours')}}">Find out more <i class="uil uil-angle-double-right"></i></a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-hotel text-primary mb-4"></i>
                <h3 class="h4 mb-2">Hotel Booking</h3>
                <p class="text-muted mb-0">Expect to be treated to the most comfortable world class hotels at comfortable prices.</p>
                <p><a href="{{route('hotel.index')}}">Find out more <i class="uil uil-angle-double-right"></i></a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-passport text-primary mb-4"></i>
                <h3 class="h4 mb-2">Visa and Passport Processing</h3>
                <p class="text-muted mb-0">Get your visa or passport with no hurdles or deceit with our verified services.</p>
                <p><a href="#">Find out more <i class="uil uil-angle-double-right"></i></a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-plane text-primary mb-4"></i>
                <h3 class="h4 mb-2">Airline Ticketing</h3>
                <p class="text-muted mb-0">Get an airline ticket without the longline or long wait.</p>
                <p><a href="#">Find out more  <i class="uil uil-angle-double-right"></i></a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-bus text-primary mb-4"></i>
                <h3 class="h4 mb-2">Boat and Luxury Cruise Booking</h3>
                <p class="text-muted mb-0">We help you find a safe weekend cruise, or that dream boat ride.</p>
                <p><a href="#">Find out more  <i class="uil uil-angle-double-right"></i></a></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
                <i class="fas fa-4x fa-car text-primary mb-4"></i>
                <h3 class="h4 mb-2">Car Hire and Sale</h3>
                <p class="text-muted mb-0">Find the best deals for car hire and sales on our platform with jaw dropping discounts</p>
                <p><a href="{{route('car-hire-and-sale')}}">Find out more <i class="uil uil-angle-double-right"></i></a></p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- gallery Section -->
    <section id="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center">popular locations</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12 my-2">
                            <a href="{{route('hotels.linkSearch')}}?search=kampala">
                                <div class="location-container">
                                <img src="./images/images/hotels/1.jpg" alt="" class="img-fluid">
                                <div class="location-caption d-flex justify-content-center align-items-center flex-column">
                                        <h3>Kampala</h3>
                                        <p>1234 Hotels</p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row">
                            <div class="col-md-6 my-2">
                                <a href="{{route('hotels.linkSearch')}}?search=entebbe">
                                     <div class="location-container">
                                    <img src="./images/images/hotels/2.jpg" alt="" class="img-fluid">
                                    <div class="location-caption d-flex justify-content-center align-items-center flex-column">
                                        <h3>Entebbe</h3>
                                        <p>1234 Hotels</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-6 my-2">
                                <a href="{{route('hotels.linkSearch')}}?search=gulu">
                                    <div class="location-container">
                                    <img src="./images/images/hotels/speke-hotel.jpg" alt="" class="img-fluid">
                                    <div class="location-caption d-flex justify-content-center align-items-center flex-column">
                                        <h3>Gulu</h3>
                                        <p>1234 Hotels</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12 my-2">
                            <div class="row">
                            <div class="col-md-6 my-2">
                                <a href="{{route('hotels.linkSearch')}}?search=mbale">
                                    <div class="location-container">
                                    <img src="./images/images/hotels/2.jpg" alt="" class="img-fluid">
                                    <div class="location-caption d-flex justify-content-center align-items-center flex-column">
                                        <h3>Mbale</h3>
                                        <p>1234 Hotels</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-6 my-2">
                                <a href="{{route('hotels.linkSearch')}}?search=mbarara">
                                    <div class="location-container">
                                    <img src="./images/images/hotels/speke-hotel.jpg" alt="" class="img-fluid">
                                    <div class="location-caption d-flex justify-content-center align-items-center flex-column">
                                        <h3>Mbarara</h3>
                                        <p>1234 Hotels</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        </div>
                        <div class="col-12 my-2">
                            <a href="{{route('hotels.linkSearch')}}?search=jinja">
                                <div class="location-container">
                                <img src="./images/images/hotels/image19.png" alt="" class="img-fluid">
                                <div class="location-caption d-flex justify-content-center align-items-center flex-column">
                                    <h3>Jinja</h3>
                                    <p>1234 Hotels</p>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
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
                    <div class="location-container">
                        <img src="./images/images/lake-naivasha-walking-giraffe-cropped.jpg" alt="" class="img-fluid">
                        <div class="location-caption d-flex justify-content-center align-items-center flex-column">
                            <h3>A Honey Mo<i
          class="fa fa-heart heart text-danger" alt="love"></i>n in the Wild</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="location-container">
                        <img src="./images/images/equator.jpg" alt="" class="img-fluid">
                        <div class="location-caption d-flex align-items-center justify-content-center flex-column">
                            <h5>Cooperate vaccation, a great time to shake off that work stress and connect with your work mates and boss</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-4 text-uppercase text-center">Featured car deals</h2>
                <div class="d-flex justify-content-center m-5">
                    <div class="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('car-hire-and-sale')}}" class="btn btn-info btn-lg text-white">Find Out More</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact')
</x-app>
