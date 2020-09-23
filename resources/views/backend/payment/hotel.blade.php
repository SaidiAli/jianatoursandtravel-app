@extends('layouts.authbase')
@section("custom_css")
@stop



@section('content')
    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="mx-auto">
                                    <a href="{{route('home')}}">
                                        <h3 class="d-inline align-middle ml-1 text-logo">JTT</h3>
                                    </a>
                                </div>

                                <h6 class="h5 mb-0 mt-5">Reservation Complete</h6>
                                <p class="text-muted mt-3 mb-3">Your Reservation has been completed successfully. The hotel will be notified accordingly. Check your mail for more details<br> Thank you</p>
                                <a href="{{route('home')}}" class="btn btn-primary">Back Home</a>
                            </div>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection


@section("javascript")
@stop
