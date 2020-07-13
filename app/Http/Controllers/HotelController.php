<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('pages.hotels')->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.hotel.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'description' => 'required|min:20|max:500',
                'email' => 'required|email',
                'district' => 'required',
                'address' => 'required|max:200',
                'phone' => 'required',
                'cover_photo' => 'image|mimes:jpeg,png,jpg'
            ]
        );

            $hotel = new Hotel();
            $hotel->user_id = auth()->user()->id;
            $hotel->name = $request->input('name');
            $hotel->description = $request->input('description');
            $hotel->address = $request->input('address');
            $hotel->district = $request->input('district');
            $hotel->phone = $request->input('phone');
            $hotel->email = $request->input('email');
            $hotel->web = $request->input('web');

            if ($request->hasFile('cover_photo')) {
                $hotel->cover_photo = $request->file('cover_photo')->store('hotel_covers/'.$request->input('name'), 'public');
            }

            $hotel->save();
            return redirect()->route('hotel.show', ['hotel' => $hotel]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id)->first();
        return view('backend.hotel.show')->withHotel($hotel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
