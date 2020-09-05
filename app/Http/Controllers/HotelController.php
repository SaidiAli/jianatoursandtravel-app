<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{

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
            $this->validator($request);

            $hotel = new Hotel();
            $hotel->user_id = auth()->user()->id;
            $hotel->name = $request->input('name');
            $hotel->description = $request->input('description');
            $hotel->address = $request->input('address');
            $hotel->district = $request->input('district');
            $hotel->phone = $request->input('phone');
            $hotel->email = $request->input('email');
            $hotel->web = $request->input('web');
            $hotel->verified = false;

            $hotel->save();
            return redirect()->route('hotels.add_images', ['hotel' => $hotel]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::where('id', $id)->first();
        $images = Storage::files('hotel_covers/' . $hotel->id);
        $img_urls = array_map(function ($file) {
            return Storage::url($file);
        }, $images);

        return view('backend.hotel.show')->with([
            'hotel' => $hotel,
            'facilities' => $hotel->facilities,
            'images' => $img_urls
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::where('id', $id)->first();

        return view('backend.hotel.management.edit')->withHotel($hotel);
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
        $hotel = Hotel::where('id', $id)->first();

        if($request->input('all') == 'true') {
            $this->validator($request);
            
            $hotel->name        = $request->input('name');
            $hotel->description = $request->input('description');
            $hotel->address     = $request->input('address');
            $hotel->district    = $request->input('district');
            $hotel->phone       = $request->input('phone');
            $hotel->email       = $request->input('email');
            $hotel->web         = $request->input('web');

            $hotel->save();
            return redirect()->route('hotels.preview', ['hotel' => $hotel]);
        }

        $hotel->facilities()->attach($request->input('facilities'));
        return back();
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

    /**
     * Validate request
     */

    private function validator(Request $request) {
        return $request->validate(
            [
                'name'        => 'required',
                'description' => 'required|min:20',
                'email'       => 'required|email',
                'district'    => 'required',
                'address'     => 'required|max:200',
                'phone'       => 'required',
            ]
        );
    }
}
