@extends('layouts.authbase')

@section('content')
    <div class="content bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title mt-2 d-print-none">
                            <p class="mb-1 mt-0">Dear {{$booking->user->name}}</p>
                            <p>You have successfully made a booking at <span class="text-primary">{{$booking->hotel->name}}</span> through <span class="text-primary">jianatoursandtravel.com platform</span>. This is to let you know that we have received your booking request. We will send you another email shortly once we start processing your reservation.</p>
                            <p>Please find your booking and payment details below, including the hotel details too</p>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Logo & title -->
                                        <div class="clearfix">
                                            <div class="float-sm-right">
                                                <h4 class="m-0 d-print-none">Hotel Details</h4>
                                                <h4 class="mt-2-0 text-primary">{{$booking->hotel->name}}</h4>
                                                <address class="pl-2 mt-2"> {{$booking->hotel->address}}<br>
                                                    <abbr title="Phone">P:</abbr> {{$booking->hotel->phone}}
                                                </address>
                                            </div>
                                            <div class="float-sm-left">
                                                <h4 class="m-0 d-print-none">Booking Details</h4>
                                                <div class="mb-2 mt-3">
                                                    <p class="font-weight-normal">Reservation ID : #{{$booking->id}}</p>

                                                    <p class="font-weight-normal">Check In Date : {{$booking->check_in_date .' at '.$booking->check_in_time}}</p>

                                                    <p class="font-weight-normal">Check Out Date : {{$booking->check_out_date.' at '.$booking->check_out_time}}</p>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <h4>Guest Details:</h4>
                                                <h5>{{$booking->user->name}}</h5>
                                                <address>
                                                    Email: {{$booking->user->email}} <br>
                                                </address>
                                                <h6>Adults: {{$booking->adults}}</h6>
                                                <h6>Children: {{$booking->children}}</h6>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <table class="table mt-4 table-centered">
                                                        <thead>
                                                            <tr>
                                                                <th>Item</th>
                                                                <th style="width: 10%">Rooms</th>
                                                                <th style="width: 10%">Price</th>
                                                                <th style="width: 10%" class="text-right">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($rooms as $room)
                                                            @if ($number_of_rooms[$room['id']]['number_of_rooms'] > 0)
                                                                <tr>
                                                                    <td>
                                                                        <h5 class="font-size-16 mt-0 mb-2">{{$room['name']}}</h5>
                                                                    </td>
                                                                    <td>{{$number_of_rooms[$room['id']]['number_of_rooms']}}</td>
                                                                    <td>${{$room['price']}}</td>
                                                                    <td class="text-right">${{$number_of_rooms[$room['id']]['total_amount']}}</td>
                                                                </tr>
                                                            @endif
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive -->
                                            </div> <!-- end col -->
                                            <div class="col-md-6">
                                                <div class="text-md-right">
                                                    <h6 class="font-weight-normal">Total Payable</h6>
                                                    <h2>${{$booking->total_price}}</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row justify-content-center">
                                            <div class="col-sm-8">
                                                <div class="clearfix pt-5">
                                                    <h6 class="text-muted">Disclaimer:</h6>

                                                    <small class="text-muted">
                                                        All bookings are to be paid soonest after the booking is finished or withing the period before check in to the hotel. To be paid by credit card  directy online or through mobile money. If you are unable to pay online you will be required to pay at the hotel directly before your reservation is completed
                                                    </small>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <h3 class="font-weight-bold" style="text-align: center;">Enjoy your stay at {{$booking->hotel->name}}</h3>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection