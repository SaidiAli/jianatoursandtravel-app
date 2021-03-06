<x-app>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row justify-content-center">
                <div class="col-md-4 my-5">
            <div class="card">
                <div class="card-body">
                    More search options
                </div>
            </div>
                    <div class="card p-3 mt-2">
                    <div class="card-title">
                        <h3 class="text-center">Find Hotels in Uganda</h3>
                    </div>
                    <div class="card-body">
                        <div class="">
                          <form action="{{route('hotels.search')}}">
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="search" class="form-control" placeholder="Search for a city of particular Hotel" name="search">
                                        </div>
                                        <div class="col-4">
                                            <input type="submit" value="Search" class="btn btn-primary">
                                        </div>
                                    </div>
                          </form>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-8 my-5">
            <div class="card p-3">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-primary">{{$results->count()}} Hotel(s) found</h3>
                    </div>
                </div>
            </div>
            @forelse ($results as $hotel)
                <div class="card my-3">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5">
                        <img src="{{$hotel->cover_photos}}" class="card-img" alt="{{$hotel->name}}">
                        </div>
                        <div class="col-md-7">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('hotel.show', ['hotel' => $hotel])}}"><h5 class="card-title font-size-16">{{$hotel->name}}</h5></a>
                                    <p class="card-text text-muted">Location: <small>{{$hotel->address}}</small></p>
                                    <p>Amenities:</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <i class="uil uil-restaurant mx-1"></i>
                                                <i class="uil uil-restaurant mx-1"></i>
                                                <i class="uil uil-restaurant mx-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-center">UGX {{$hotel->average_price}}</h3>

                                    <div class="row my-4">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <a href="{{route('hotel.show', ['hotel' => $hotel])}}" class="btn btn-outline-primary">
                                                    <i class="uil uil-sync"></i>
                                                    Show more
                                                </a>
                                            </div>
                                        </div> <!-- end col-->
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <x-rating></x-rating>
                                        <h3>4.5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <h3 class="text-center">The search returned empty</h3>
            @endforelse
        </div>
            </div>
        </div>
    </div>
</x-app>
