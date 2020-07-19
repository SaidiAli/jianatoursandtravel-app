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

    #total-price {
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

                            <h5>Book here</h5>

                                <form id="booking_form" action="{{route('booking.store')}}" class="needs-validation" novalidate method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-8 col-md-4">
                                        <label for="checkin-date">Check In</label>
                                        <input class="form-control" id="checkin-date" type="date" name="check_in_date">
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label for="checkin-time">Time</label>
                                            <input class="form-control" id="checkin-time" type="time" name="check_in_time">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8 col-md-4">
                                        <label for="checkout-date">Check Out</label>
                                        <input class="form-control" id="checkout-date" type="date" name="check_out_date">
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label for="checkout-time">Time</label>
                                            <input class="form-control" id="checkout-time" type="time" name="check_out_time">
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
                                                    <img src="{{asset('images/portfolio/thumbnails/1.jpg')}}" class="card-img img-fluid" alt="hotel room picture">
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
                                        <p class="selected-items text-center"><span id="number_of_rooms">0</span> rooms <span id="number_of_adults">1</span> adult <span id="number_of_children">0</span> children</p>
                                        <p class="text-center"><span id="total-price">200,000</span> UGX</p>
                                        <input type="hidden" id="total_price" name="total_price">
                                        <button class="btn btn-primary btn-block">Make Reservation</button>
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
    let rooms = [];

// Change the number of adults as the user selects the value
    $('#adults').change(e => {
        $('#number_of_adults').html($('#adults').val())
    })

    // Change the number of children as the user selects the value
    $('#children').change(e => {
        $('#number_of_children').html($('#children').val())
    })

    // Change the number of rooms as the user selects the value
    $('.hotel-room').change(e => {
        // let nmb_of_rms =  parseInt($('#number_of_rooms').html())

        hotel_data.rooms.forEach(room => {
            let room_id = room.id
            let room_val = $('#'+room_id).val()
    });

    })

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
    $('#total_price').val(parseInt(total_price))
    
    hotel_data.rooms.forEach(room => {
        let room_id = room.id
        let room_count = $('#'+room_id).val()
        let str = `${room_id}-${room_count}`
        rooms.push(str)
    });

    $('#all_rooms').val(rooms)

    // let formData = new FormData()
    // formData.append('check_in_date', check_in_date)
    // formData.append('check_out_date', check_out_date)
    // formData.append('check_in_time', check_in_time)
    // formData.append('check_out_time', check_out_time)
    // formData.append('adults', adults)
    // formData.append('children', children)
    // formData.append('hotel_id', hotel_data.id)
    // formData.append('total_price', total_price)


    // formData.append('rooms', JSON.stringify(rooms))

    // fetch('/booking', {
    //     method: 'POST',
    //     body: formData,
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // })
    //     .then(res => res.json())
    //     .then(data => console.log(data))
    //     .catch(err => console.error(err))
    $('#booking_form').off('submit').submit()
})
</script>
@endsection
