@extends('layouts.base')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row page-title mt-2 d-print-none">
                            <div class="col-md-12">
                                <h4 class="mb-1 mt-0">Invoice</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Logo & title -->
                                        <div class="clearfix">
                                            <div class="float-sm-right">
                                                <h4 class="m-0 d-inline align-middle">{{$hotel->name}}</h4>
                                                <address class="pl-2 mt-2"> {{$hotel->address}}<br>
                                                    <abbr title="Phone">P:</abbr> {{$hotel->phone}}
                                                </address>
                                            </div>
                                            <div class="float-sm-left">
                                                <h4 class="m-0 d-print-none">Booking</h4>
                                                <dl class="row mb-2 mt-3">
                                                    <dt class="col-sm-3 font-weight-normal">Booking ID :</dt>
                                                    <dd class="col-sm-9 font-weight-normal">#{{$booking->id}}</dd>

                                                    <dt class="col-sm-3 font-weight-normal">Check In Date :</dt>
                                                    <dd class="col-sm-9 font-weight-normal">{{$booking->check_in_date}}</dd>

                                                    <dt class="col-sm-3 font-weight-normal">Check Out Date :</dt>
                                                    <dd class="col-sm-9 font-weight-normal">{{$booking->check_out_date}}</dd>
                                                </dl>
                                            </div>
                                            
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <h6 class="font-weight-normal">Invoice For:</h6>
                                                <h6 class="font-size-16">{{$user->name}}</h6>
                                                <address>
                                                    Email: {{$user->email}} <br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div> <!-- end col -->

                                            <div class="col-md-6">
                                                <div class="text-md-right">
                                                    <h6 class="font-weight-normal">Total</h6>
                                                    <h2>${{$booking->total_price}}</h2>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mt-4 table-centered">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Item</th>
                                                                <th style="width: 10%">Rooms</th>
                                                                <th style="width: 10%">Price</th>
                                                                <th style="width: 10%" class="text-right">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <h5 class="font-size-16 mt-0 mb-2">Web Design</h5>
                                                                    <p class="text-muted mb-0">2 Pages static website -
                                                                        my
                                                                        website</p>
                                                                </td>
                                                                <td>22</td>
                                                                <td>$30</td>
                                                                <td class="text-right">$660.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>
                                                                    <h5 class="font-size-16 mt-0 mb-2">Software Development</h5>
                                                                    <p class="text-muted mb-0">Invoice editor software -
                                                                        AB'c
                                                                        Software</p>
                                                                </td>
                                                                <td>112.5</td>
                                                                <td>$35</td>
                                                                <td class="text-right">$3937.50</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive -->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="clearfix pt-5">
                                                    <h6 class="text-muted">Disclaimer:</h6>

                                                    <small class="text-muted">
                                                        All bookings are to be paid soonest after the booking is finished or withing the period before check in to the hotel. To be paid by credit card  directy online or through mobile money. If you are unable to pay online you will be required to pay at the hotel directly before your reservation is completed
                                                    </small>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="float-right mt-4">
                                                    <p><span class="font-weight-medium">Sub-total:</span> <span
                                                            class="float-right">${{$booking->total_price}}</span></p>
                                                    <p><span class="font-weight-medium">Discount (0%):</span> <span
                                                            class="float-right"> &nbsp;&nbsp;&nbsp; $0</span></p>
                                                    <h3>${{$booking->total_price}} USD</h3>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row justify-content-center mt-5 mb-1">
                                            <div class="col-lg-8">
                                                <div class="text-right d-print-none">
                                                <a href="#" class="btn btn-outline-success btn-block"><i
                                                        class="uil uil-currency mr-1"></i> Pay At Hotel</a>
                                                <a href="#" class="btn btn-info btn-block">Pay Online</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection