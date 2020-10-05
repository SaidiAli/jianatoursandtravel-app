@extends('layouts.authbase')
@section("custom_css")

@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 bg-white">
                <div class=" m-h-100">
                    <div class="account-pages pt-5">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-12 p-5">
                                            <div class="mx-auto mb-5">
                                                <a href="{{ route('home') }}">
                                                    <h2 class="text-center">JTT</h2></a>
                                            </div>

                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <div class="alert alert-danger">{{$error}}</div>
                                                @endforeach
                                            @endif

                                            <h3 class="h3 mb-0 mt-4 text-center">Register</h3>
                                            <br><br>

                                            <form action="{{route('register')}}" class="needs-validation"
                                                  method="POST" id="submitForm" novalidate>
                                                @csrf
                                                <div class="form-group">
                                                    <label class="form-control-label">Name</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" placeholder="Your name" id="last_name"
                                                               name="name" class="form-control" required>
                                                        <div class="invalid-feedback">
                                                            Please choose a name
                                                        </div>
                                                    </div>
                                                    <label class="form-control-label">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="email" placeholder="Your email address" id="email"
                                                               name="email" class="form-control" required>
                                                        <div class="invalid-feedback">
                                                            Please choose a email
                                                        </div>
                                                    </div>
                                                    <label class="form-control-label mt-2 mb-2">Password</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" placeholder="Your password" id="password"
                                                               name="password"
                                                               class="form-control" required>
                                                        <div class="invalid-feedback">
                                                            Please choose a password
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-0 text-center">
                                                    <button class="btn btn-primary btn-block" type="submit"> Get
                                                        Started
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <p class="text-muted">Back to <a href="{{ route('login') }}"
                                                                         class="text-primary font-weight-bold ml-1">Login</a>
                                        </p>
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
