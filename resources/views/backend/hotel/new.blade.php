@extends('layouts.base')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    {{-- <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-1">Register Your Hotel</h4>
                            <p class="sub-header">Provide information about your hotel, this information will be displayed to our customers for them to book in your hotel</p>

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                                @endforeach
                            @endif

                            <form class="needs-validation" action="{{route('hotel.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="hotel-name">Hotel name</label>
                                    <input type="text" class="form-control" name="name" id="hotel-name" required>
                                    <div class="invalid-feedback">
                                        Please provide a hotel name
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Text area</label>
                                    <textarea class="form-control" rows="2" name="description" id="description"></textarea>
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
                                            required>
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
                                        <input type="text" class="form-control" id="web" aria-describedby="inputGroupPrepend">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="district">District</label>
                                    <input type="text" class="form-control" id="district" name="district" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address">Precise Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Makerere, Opposite Eastern gate" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">Phone Contact</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid phone contact.
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"
                                        for="cover-photo">Cover Photo</label>
                                    <div class="col-lg-10">
                                        <input type="file" class="form-control"
                                            id="cover-photo" name="cover_photo">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox form-check">
                                        <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                        <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Register</button>
                            </form>

                        </div>
                    </div>  --}}
                    <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-1">Default wizard</h4>
                                        <p class="sub-header">Example of Default wizard</p>
                                        <div id="smartwizard-default">
                                            <ul>
                                                <li><a href="#sw-default-step-1">Account<small class="d-block">Step description</small></a></li>
                                                <li><a href="#sw-default-step-2">Profile<small class="d-block">Step description</small></a></li>
                                                <li><a href="#sw-default-step-3">Finish<small class="d-block">Step description</small></a></li>
                                            </ul>
                                            
                                            <div class="p-3">
                                                <div id="sw-default-step-1">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="sw-default-userName">User name</label>
                                                                <input type="text" class="form-control" id="sw-default-userName" placeholder="Enter User name...">

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sw-default-password"> Password</label>
                                                                <input type="password" id="sw-default-password" class="form-control" placeholder="Enter Password...">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="sw-default-confirm">Re Password</label>
                                                                <input type="password" id="sw-default-confirm" class="form-control" placeholder="Enter Re Password...">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
                                                <div id="sw-default-step-2">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="sw-default-first-name">First name</label>
                                                                <input type="text" id="sw-default-first-name" class="form-control" placeholder="Enter First name...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sw-default-last-name">Last name</label>
                                                                <input type="text" id="sw-default-last-name" class="form-control" placeholder="Enter Last name...">
                                                            </div>
                                    
                                                            <div class="form-group">
                                                                <label for="sw-default-email">Email</label>
                                                                <input type="email" id="sw-default-email" class="form-control" placeholder="Enter Email...">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
                                                <div id="sw-default-step-3">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="text-center">
                                                                <div class="mb-3">
                                                                    <i class="uil uil-check-square text-success h2"></i>
                                                                </div>
                                                                <h3>Thank you !</h3>

                                                                <p class="w-75 mb-2 mx-auto text-muted">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                                    mattis dictum aliquet.</p>

                                                                <div class="mb-3">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="sm-default-customCheck">
                                                                        <label class="custom-control-label" for="sm-default-customCheck">I agree with the Terms and Conditions</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
        </div>
    </div>
@endsection