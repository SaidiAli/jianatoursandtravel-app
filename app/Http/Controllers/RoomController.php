<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function store(Request $request) {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'description' => 'required|max:200',
                'price' => 'required',
                'room_image' => 'image|mimes:jpeg,png,jpg'
            ]
        );

        $room = new Room();
        $room->hotel_id = $request->input('hotel_id');
        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->price = $request->input('price');
        if($request->input('availability')) {
            $room->is_bookable = true;
        } else {
            $room->is_bookable = false;
        }

        if ($request->hasFile('room_image')) {
            if ($path = $request->file('room_image')->store('room_images/' . $request->input('name'), 'gcs')) {
                $room->room_image = Storage::url($path);
            }
        }

        $room->save();
        return redirect()->route('hotels.preview', ['hotel' => $request->input('hotel_id')]);
    }
}
