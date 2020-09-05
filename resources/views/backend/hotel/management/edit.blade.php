@extends('layouts.base')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-1">Edit Hotel</h4>
                            <p class="sub-header">Provide information about your hotel, this information will be displayed to our customers for them to book in your hotel</p>

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                                @endforeach
                            @endif

                            <form class="needs-validation" action="{{route('hotel.update', ['hotel' => $hotel])}}?all=true" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('put')
                                <div class="form-group mb-3">
                                    <label for="hotel-name">Hotel name</label>
                                    <input type="text" class="form-control" name="name" id="hotel-name" required value="{{$hotel->name}}">
                                    <div class="invalid-feedback">
                                        Please provide a hotel name
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="2" name="description" id="description">{{$hotel->description}}</textarea>
                                    <div class="invalid-feedback">
                                        Please provide a brief description of the hotel
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend"
                                            required value="{{$hotel->email}}">
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="web">Web Address</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="web" aria-describedby="inputGroupPrepend" value="{{$hotel->web}}" name="web">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="district">District</label>
                                    <input type="text" class="form-control" id="district" name="district" required value="{{$hotel->district}}">
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address">Precise Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Makerere, Opposite Eastern gate" required value="{{$hotel->address}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">Phone Contact</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required value="{{$hotel->phone}}">
                                    <div class="invalid-feedback">
                                        Please provide a valid phone contact.
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
            </div>
        </div>
    </div>
@endsection