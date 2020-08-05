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
                        <h1 class="text-center">Car preview</h1>
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
                        <h3 class="text-center">Price: {{$car->price}}</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                @if ($car->hire)
                                <span class="badge badge-warning">For Hire</span>
                                @else
                                <span class="badge badge-success">For Sale</span>
                                @endif
                                <p><h6>Description: </h6>{{$car->description}}</p>
                                <p><h6>Located in: </h6>{{$car->location}}</p>
                                <p><h6>Condition: </h6>{{$car->condition}}</p>
                                <p><h6>Type of Fuel used: </h6>{{$car->fuel}}</p>
                                <p><h6>Color of the Car: </h6>{{$car->color}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><h6>Transmission: </h6>{{$car->drive_type}}</p>
                                <p><h6>Year: </h6>{{$car->year}}</p>
                                <p><h6>Dor count: </h6>{{$car->door_count}}</p>
                                <p><h6>Car type: </h6>{{$car->type}}</p>
                                <p><h6>Color Brand: </h6>{{$car->brand}}</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{route('cars.edit', ['car' => $car])}}?all=1" class="btn btn-warning mx-2">Edit</a>
                            <button class="btn btn-danger mx-2"
                                onclick="document.getElementById('delete-form').submit();">
                                Delete
                            </button>
                            <button class="btn btn-primary mx-2"
                                onclick="document.getElementById('update-availability-form').submit();">
                                Mark As Taken
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
