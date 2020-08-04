@extends('layouts.base')
@section("custom_css")
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
                    <div class="row mt-5">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="p-3">
                                            <div class="">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">All Cars</span>
                                                <h2 class="mb-0">189</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">For Hire</span>
                                                <h2 class="mb-0">1065</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">For Sale</span>
                                                <h2 class="mb-0">11</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Sold out</span>
                                                <h2 class="mb-0">750</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="mb-3 mt-0">Add a Car</h2>

                                        <form class="form-horizontal" method="post" action="{{route('cars.store')}}">
                                            @csrf
                                            <div class="form-group row mb-3">
                                                <label for="name" class="col-3 col-form-label">Name</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Car name">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="description" class="col-3 col-form-label">Description</label>
                                                <div class="col-9">
                                                    <textarea class="form-control" rows="2" name="description" id="description"></textarea>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please provide a brief description of the car
                                                </div>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="condition" class="col-3 col-form-label">Condition</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="condition" name="condition" placeholder="A brief description of the cars condition">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="fuel" class="col-3 col-form-label">Fuel type</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="fuel" name="fuel" placeholder="What fuel does the car use">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="color" class="col-3 col-form-label">Color</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="color" name="color" placeholder="What color is the car">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="year" class="col-3 col-form-label">Year</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="year" name="year" placeholder="What year is the car">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="drive_type" class="col-3 col-form-label">Drive type</label>
                                                <div class="col-9">
                                                    <select name="drive_type" id="drive_type" class="form-control custom-select">
                                                        <option>Manual</option>
                                                        <option>Automatic</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="door_count" class="col-3 col-form-label">Door Count</label>
                                                <div class="col-9">
                                                    <select name="door_count" id="drive_type" class="form-control custom-select">
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
                                                    <input type="text" class="form-control" id="price" name="price">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="location" class="col-3 col-form-label">Location</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="location" name="location" placeholder="Kampala">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="type" class="col-3 col-form-label">Car type</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="type" name="type" placeholder="Toyota">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="brand" class="col-3 col-form-label">Brand</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Audi">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="hire_or_sale" class="col-3 col-form-label">Hire or Sale</label>
                                                <div class="col-9">
                                                    <select name="hire_or_sale" id="hire_or_sale" class="form-control custom-select">
                                                        <option>Hire</option>
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
                                                    <button type="submit" class="btn btn-outline-info">Add</button>
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
