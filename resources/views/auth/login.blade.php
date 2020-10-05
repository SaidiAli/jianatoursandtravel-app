@extends('layouts.authbase')
@section("custom_css")
@stop



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 bg-white">
                <div class="m-h-100">
                    <div class="account-pages pt-5">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-12 p-5">
                                            <div class="mx-auto mb-5">
                                                <a href="{{ url('/') }}">
                                                    <h2 class="text-center">JTT</h2> </a>
                                            </div>

                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <div class="alert alert-danger">{{$error}}</div>
                                                @endforeach
                                            @endif

                                            <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                                            <p class="text-muted mt-1 mb-4">Please enter your email and password</p>

                                            <form action="{{ route('login') }}" class="needs-validation"
                                                  method="POST" id="submitForm" novalidate>
                                                @csrf
                                                <div class="form-group">
                                                    <label class="form-control-label" for="email">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="email" id="email" name="email"
                                                               class="form-control" placeholder="Enter your email" required>
                                                               <div class="invalid-feedback">
                                                        Please provide your email
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-4">
                                                    <label class="form-control-label" for="password">Password</label>
                                                    <a href="#"
                                                       class="float-right text-muted text-unline-dashed ml-1">Forgot
                                                        your
                                                        password?</a>
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                        </div>
                                                        <input type="password" name="password" class="form-control"
                                                               id="password" placeholder="Enter your password" required>
                                                               <div class="invalid-feedback">
                                                        Please provide your password
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="checkbox-signin" checked>
                                                        <label class="custom-control-label" for="checkbox-signin">Remember
                                                            me</label>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-0 text-center">
                                                    <button class="btn btn-primary btn-block" type="submit"> Log In
                                                    </button>
                                                </div>
                                            </form>
                                            {{-- commented by @jeremiahiro until social login is ready --}}
                                            {{-- <div>
                                                <div class="py-3 text-center">
                                                    <span class="font-size-16 font-weight-bold">Or</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <a href="#" class="btn btn-white"><i
                                                                class='uil uil-google icon-google mr-2'></i>With Google</a>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <a href="#" class="btn btn-white"><i
                                                                class='uil uil-facebook mr-2 icon-fb'></i>With Facebook</a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="text-center">
                                    <p class="text-muted">Dont have an account <a href="/register"
                                                                                  class="text-primary font-weight-bold ml-1">Sign
                                            Up</a></p>
                                </div>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->

                        </div> <!-- end col -->
                        <!-- end row -->
                        <!-- end container -->
                    </div>
                    <!-- end page -->


                </div>
            </div>
        </div>
    </div>

@endsection


@section("javascript")
@stop
