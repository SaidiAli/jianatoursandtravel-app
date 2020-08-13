@extends('layouts.base')

@section('custom_css')
    <style>
        .section {
            padding: 2rem 0;
        }

        .room-price {
            font-weight: bold;
            font-size: 1.2rem;
        }

    .room-select {
        width: 5rem !important;
    }

    .total-price-class {
        font-weight: bold;
        font-size: 1.5rem;
    }

    </style>    
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger text-center">
                            {{$error}}
                        </div>
                        @endforeach
                    @endif

                    <div class="card mb-4 mb-xl-0">
                        <div class="hotel-covers-carousel m-5">
                            @foreach ($images as $image)
                            <div class="carousel-cell">
                                <div class="card-img-top text-center">
                                    <img class="img-fluid" src="{{$image}}" alt="hotel image">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">{{$hotel->name}}</h2>
                            <p>{{$hotel->description}}</p>
                            <h5>Services Offered</h5>
                            <ul>
                                @forelse ($hotelFacilities as $facility)
                                    <li>{{$facility}}</li>
                                @empty
                                    <li><p class="text-warning">No faciliry attached to the hotel yet</p></li>
                                @endforelse
                            </ul>
                            <h5>Location</h5>
                            <p>Located in {{$hotel->district.' , '.$hotel->address}}</p>

                            <h5>Book here</h5>

                                <form id="booking_form" action="{{route('booking.store')}}" class="needs-validation" novalidate method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-8 col-md-4">
                                        <label for="checkin-date">Check In</label>
                                        <input class="form-control" id="checkin-date" type="date" required name="check_in_date" required>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label for="checkin-time">Time</label>
                                            <input class="form-control" id="checkin-time" type="time" required name="check_in_time" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8 col-md-4">
                                        <label for="checkout-date">Check Out</label>
                                        <input class="form-control" id="checkout-date" type="date" required name="check_out_date" required>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label for="checkout-time">Time</label>
                                            <input class="form-control" id="checkout-time" type="time" required name="check_out_time" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6 col-md-3">
                                        <label for="adults">Adults</label>
                                        <input class="form-control" id="adults" type="number" name="adults" value="1" min="0">
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <label for="children">Children</label>
                                            <input class="form-control" id="children" type="number" name="children" value="0" min="0">
                                    </div>
                                </div>

                                <h5>Available rooms</h5>

                                <div class="row">
                                    @foreach ($hotel->rooms as $room)
                                        <div class="card col-lg-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-md-5">
                                                    <img src="{{$room->room_image}}" class="card-img img-fluid" alt="hotel room picture">
                                                    </div>
                                                    <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h5 class="card-title font-size-16">{{$room->name}}</h5>
                                                        <p class="card-text text-muted">{{$room->description}}</p>
                                                        <p class="room-price">{{$room->price}} UGX</p>
                                                        <input class="form-control room-select hotel-room" id="{{$room->id}}" type="number" name="rooms" required value="0" min="0">
                                                        <p class="card-text"><small class="text-muted">Status: @if ($room->is_bookable == true)
                                                            <span class="text-success">Availble</span></small>
                                                        @else
                                                        <span class="text-danger">Sold out</span></small>
                                                            
                                                        @endif</p>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                    @endforeach
                                </div>
                                <input type="hidden" id="number_of_rms" name="number_of_rooms">
                                <input type="hidden" id="hotel_id_input" name="hotel_id" value="{{$hotel->id}}">
                                <input type="hidden" id="all_rooms" name="rooms">

                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <p class="selected-items text-center d-none"><span id="number_of_rooms">0</span> rooms <span id="number_of_adults">1</span> adult <span id="number_of_children">0</span> children</p>
                                        <p class="text-center total-price-class d-none"><span id="total-price">0</span> UGX</p>
                                        {{-- <input type="hidden" id="total_price" name="total_price"> --}}
                                        <button class="btn btn-primary btn-block" type="submit">Make Reservation</button>
                                    </div>
                                </div>
                            </form>

                            <h5>Contact</h5>
                            <p>Phone: {{$hotel->phone}}</p>
                            <p>Email: {{$hotel->email}}</p>
                        </div>
                    </div>

                    <section class="section">
                        <h2>More hotels like this</h2>

                    <div class="row justify-content-around">
                        <div class="card col-lg-5 mr-1">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5">
                                <img src="{{asset('images/portfolio/thumbnails/1.jpg')}}" class="card-img img-fluid" alt="hotel room picture">
                                </div>
                                <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title font-size-16">Murder Hotels</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, aut velit beatae veritatis, ipsam sequi, laudantium hic tempore cupiditate alias provident cum explicabo sit obcaecati id ex earum enim quidem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-5">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5">
                                <img src="{{asset('images/portfolio/thumbnails/2.jpg')}}" class="card-img" alt="hotel room picture">
                                </div>
                                <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title font-size-16">Paradise Hotels</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, aut velit beatae veritatis, ipsam sequi, laudantium hic tempore cupiditate alias provident cum explicabo sit obcaecati id ex earum enim quidem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

<script src="{{asset('js/custom.js')}}"></script>
<script>
    let hotel_data = <?php echo json_encode($hotel); ?>;
    let rooms = {};

    $("#booking_form").submit(function(e) {
    e.preventDefault()
    let check_in_date = $("#checkin-date").val()
    let check_out_date = $("#checkout-date").val()
    let check_in_time = $("#checkin-time").val()
    let check_out_time = $("#checkout-time").val()
    let adults = $('#adults').val()
    let children = $('#children').val()
    let total_price = $('#total-price').html()
    let total_number_of_rooms = $('#number_of_rooms').html()

    $('#number_of_rms').val(total_number_of_rooms)
    // $('#total_price').val(parseInt(total_price))
    
    hotel_data.rooms.forEach(room => {
        let room_id = room.id
        let room_count = $('#'+room_id).val()
        rooms[room_id] = {
            "number_of_rooms": room_count,
            "total_amount": room_count*room.price
        }
    });

    $('#all_rooms').val(JSON.stringify(rooms))
    $('#booking_form').off('submit').submit()
})
</script>
@endsection
