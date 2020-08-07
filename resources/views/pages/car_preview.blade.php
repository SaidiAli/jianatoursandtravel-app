@extends('layouts.app')

@section('custom-css')
    <style>
        .badge {
            color: white;
        }

        .link:hover {
            text-decoration: none;
        }
    </style>
@stop

@section('content')

    <section class="section">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="text-center">Car Details</h1>
                        <div class="d-flex justify-content-center m-5">
                            <div class="selected-cars-carousel">
                                @forelse ($images as $image)
                                    <div class="carousel-cell">
                                        <img src="{{$image}}" class="img-fluid">
                                    </div>
                                @empty
                                    <div class="carousel-cell">
                                        <h5 class="text-center text-danger mt-5">No images Uploaded for the Car yet</h5>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <h3 class="text-center">Price: {{$car->price}}</h3>
                        <div class="details mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                @if ($car->hire)
                                <span class="badge badge-warning p-2">For Hire</span>
                                @else
                                <span class="badge badge-success p-2">For Sale</span>
                                @endif
                                @if ($car->available)
                                <span class="badge badge-info p-2">Available</span>
                                @else
                                <span class="badge badge-info p-2">Taken</span>
                                @endif
                                <h4 class="font-weight-bold">Description:</h4>
                                <p>{{$car->description}}</p>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="d-md-flex justify-content-center">
                                    <div>
                                        <h4>Overview</h4>
                                        <span class="font-weight-bold">Located in:</span>
                                        <p>{{$car->location}}</p>
                                        <span class="font-weight-bold">Condition:</span>
                                        <p>{{$car->condition}}</p>
                                        <span class="font-weight-bold">Type of Fuel used:</span>
                                        <p>{{$car->fuel}}</p>
                                        <span class="font-weight-bold">Color of the Car:</span>
                                        <p>{{$car->color}}</p>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-6">
                                <div class="d-md-flex justify-content-center">
                                    <div>
                                        <span class="font-weight-bold">Transmission:</span>
                                        <p>{{$car->drive_type}}</p>
                                        <span class="font-weight-bold">Year:</span>
                                        <p>{{$car->year}}</p>
                                        <span class="font-weight-bold">Door count:</span>
                                        <p>{{$car->door_count}}</p>
                                        <span class="font-weight-bold">Car type:</span>
                                        <p>{{$car->type}}</p>
                                        <span class="font-weight-bold">Color Brand:</span>
                                        <p>{{$car->brand}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row justify-content-center">
                            <div>
                                <h2>Call Seller: <span class="text-info">0704672670</span></h2>
                                <button class="btn btn-warning btn-block font-weight-bold">Call Me Back</button>
                            </div>
                            
                        </div>
                        <a href="{{route('home')}}" class="text-info link"><i class="uil uil-arrow-left mr-1"></i>Back Home</a>
                    </div>  <!-- end card-body -->
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