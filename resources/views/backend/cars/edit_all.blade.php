@extends('layouts.base')
@section("custom_css")
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-3 mt-0">Edit Car</h2>

                            <form class="form-horizontal" method="post" action="{{route('cars.update', ['car' => $car])}}">
                                @csrf
                                @method('put')
                                <div class="form-group row mb-3">
                                    <label for="name" class="col-3 col-form-label">Name</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Car name" value="{{$car->name}}">
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="description" class="col-3 col-form-label">Description</label>
                                    <div class="col-9">
                                        <textarea class="form-control" name="description" id="description">{{$car->description}}</textarea>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a brief description of the car
                                    </div>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="condition" class="col-3 col-form-label">Condition</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="condition" name="condition" placeholder="A brief description of the cars condition" value="{{$car->condition}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="fuel" class="col-3 col-form-label">Fuel type</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="fuel" name="fuel" placeholder="What fuel does the car use" value="{{$car->fuel}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="color" class="col-3 col-form-label">Color</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="color" name="color" placeholder="What color is the car" value="{{$car->color}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="year" class="col-3 col-form-label">Year</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="year" name="year" placeholder="What year is the car" value="{{$car->year}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="drive_type" class="col-3 col-form-label">Drive type</label>
                                    <div class="col-9">
                                        <select name="drive_type" id="drive_type" class="form-control custom-select">
                                            <option selected disable>{{$car->drive_type}}</option>
                                            <option>Manual</option>
                                            <option>Automatic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="door_count" class="col-3 col-form-label">Door Count</label>
                                    <div class="col-9">
                                        <select name="door_count" id="drive_type" class="form-control custom-select">
                                            <option selected disable>{{$car->door_count}}</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="price" class="col-3 col-form-label">Price</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="price" name="price" value="{{$car->price}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="location" class="col-3 col-form-label">Location</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="location" name="location" placeholder="Kampala" value="{{$car->location}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="type" class="col-3 col-form-label">Car type</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="type" name="type" placeholder="Toyota" value="{{$car->type}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="brand" class="col-3 col-form-label">Brand</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Audi" value="{{$car->brand}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="hire_or_sale" class="col-3 col-form-label">Hire or Sale</label>
                                    <div class="col-9">
                                        <select name="hire_or_sale" id="hire_or_sale" class="form-control custom-select">
                                            <option selected>Hire</option>
                                            <option>Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3 justify-content-end">
                                    <div class="col-9">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="available" name="available" checked>
                                            <label class="custom-control-label" for="checkmeout">Available</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-outline-info">Update</button>
                                </div>
                            </form>

                        </div>  <!-- end card-body -->
                    </div>
                </div>
            </div>
            </div>
        </div>

@endsection


@section("javascript")
@stop
