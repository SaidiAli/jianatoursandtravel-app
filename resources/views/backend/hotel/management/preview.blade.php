@extends('layouts.base')
@section("custom_css")
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card mb-4 mb-xl-0">
                        <img class="card-img-top img-fluid" src="{{asset('storage/'.$hotel->cover_photo)}}" alt="hotel image">
                        <div class="card-body">
                            <h2 class="card-title">{{$hotel->name}}</h2>
                            <p>{{$hotel->description}}</p>
                            <h5>Services Offered</h5>
                            <ol>
                                <li>Single Bedrooms</li>
                                <li>Double Bedrooms</li>
                                <li>Spa</li>
                                <li>Sauna</li>
                                <li>Escorts</li>
                                <li>Swimming pool</li>
                                <li>Free WIFI</li>
                                <li>Unspeakable security</li>
                            </ol>
                            <h5>Location</h5>
                            <p>Located in {{$hotel->district.' , '.$hotel->address}}</p>

                            <h5>Hotel policies</h5>
                            <div class="row">
                                <div class="col-lg-4">
                                    Open 24/7
                                </div>
                                <div class="col-lg-4">
                                    Tight Security
                                </div>
                                <div class="col-lg-4">
                                    No pets Allowed
                                </div>
                            </div>

                            <h5>Facilities</h5>
                            <div class="row">
                                <div class="col-lg-4">
                                    Free WIFI
                                </div>
                                <div class="col-lg-4">
                                    Sauna
                                </div>
                                <div class="col-lg-4">
                                    Swimming Pool
                                </div>
                            </div>

                                <h5>Available rooms</h5>

                                <div class="row">
                                    @forelse ($hotel->rooms as $room)
                                        <div class="card col-lg-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-md-5">
                                                    <img src="{{asset('images/portfolio/thumbnails/1.jpg')}}" class="card-img img-fluid" alt="hotel room picture">
                                                    </div>
                                                    <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h5 class="card-title font-size-16">{{$room->name}}</h5>
                                                        <p class="card-text text-muted">{{$room->description}}</p>
                                                        <p class="room-price">{{$room->price}} UGX</p>
                                                        <p class="card-text"><small class="text-muted">Status: @if ($room->is_bookable == true)
                                                            <span class="text-success">Available</span></small>
                                                        @else
                                                        <span class="text-danger">Sold out</span></small>
                                                            
                                                        @endif</p>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                @empty
                                <p class="text-center text-warning">No registered rooms yet</p>
                                @endforelse
                                </div>
                                <button  type="button" class="btn btn-warning" data-toggle="modal" data-target="#addroom-modal">Add a Room</button>

                                {{-- Modal start --}}
                                <div class="modal fade" id="addroom-modal" tabindex="-1" role="dialog" aria-labelledby="myAddRoomLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myAddRoomLabel">Add Room</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal">
                                                            <div class="form-group row mb-3">
                                                                <label for="room-name" class="col-3 col-form-label">Name</label>
                                                                <div class="col-9">
                                                                    <input type="email" class="form-control" id="room-name" name="name" placeholder="Room name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <label for="room-description" class="col-3 col-form-label">Description</label>
                                                                <div class="col-9">
                                                                    <input type="text" class="form-control" id="room-description" name="description" placeholder="A short description on the room">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <label for="room-price" class="col-3 col-form-label">Price</label>
                                                                <div class="col-9">
                                                                    <input type="text" class="form-control" id="room-price" name="price" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3 justify-content-end">
                                                                <div class="col-9">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="availability">
                                                                        <label class="custom-control-label" for="availability" name="availability">Available</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-0 justify-content-end row">
                                                                <div class="col-9">
                                                                    <button type="submit" class="btn btn-info">Add</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                {{-- Modal end --}}

                            <h5>Contact</h5>
                            <p>Phone: {{$hotel->phone}}</p>
                            <p>Email: {{$hotel->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section("javascript")
@stop
