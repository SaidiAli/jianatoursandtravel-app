@extends('layouts.base')
@section("custom_css")
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            @if(Session::has('alert'))
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert {{ Session::get('alert-class', 'alert-danger') }} " role="alert" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" class="">&times;</span>
                        </button>
                        <strong class="text-center">{{ Session::get('alert') }}!</strong>
                    </div>
                </div>
            </div>
            @endif
                <div class="card mt-5">
                    <div class="card-body">
                        <h1 class="text-center">{{$car->name}}</h1>
                        <div class="d-flex justify-content-center mt-5 mb-5">
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
                        <div class="d-flex">
                            <a href="{{route('cars.edit', ['car' => $car])}}" class="btn btn-outline-info m-auto" id="add_more_cover_images">Add More Images</a>
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
                            <a href="{{route('cars.edit', ['car' => $car])}}?all=1" class="btn btn-warning m-2">Edit</a>
                            <button class="btn btn-danger m-2"
                                onclick="document.getElementById('delete-form').submit();">
                                Delete
                            </button>
                            <button class="btn btn-primary m-2"
                                onclick="document.getElementById('update-availability-form').submit();">
                                Toggle Availability
                            </button>

                            <form id="update-availability-form" method="POST" action="{{ route('cars.update', ['car' => $car]) }}" style="display: none;">
                                @csrf
                                @method('put')
                                <input type="hidden" name="update-availability" value="1">
                            </form>
                            <form id="delete-form" method="POST" action="{{ route('cars.destroy', ['car' => $car]) }}" style="display: none;">
                                @csrf
                                @method('delete')
                            </form>
                        </div>
                    </div>  <!-- end card-body -->
                </div>
            </div>
        </div>

@endsection


@section("javascript")
@stop
