<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    public function index() {
        return view('backend.cars.index');
    }

    public function show($id) {
        $car = Car::where('id', $id)->first();
        $images = Storage::files('car_images/' . $id);
        $img_urls = array_map(function($file) {
            return Storage::url($file);
        }, $images);
    return view('backend.cars.show')->with(['car' => $car, 'images' => $img_urls]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'min:20|max:200',
            'condition' => 'required',
            'price' => 'required',
            'location' => 'required',
            'type' => 'required',
            'brand' => 'required'
        ]);

        $car = new Car();
        $car->name = $request->name;
        $car->description = $request->description;
        $car->condition = $request->condition;
        $car->fuel = $request->fuel;
        $car->color = $request->color;
        $car->year = $request->year;
        $car->drive_type = $request->drive_type;
        $car->door_count = $request->door_count;
        $car->price = $request->price;
        $car->location = $request->location;
        $car->type = $request->type;
        $car->brand = $request->brand;

        if($request->hire_or_sale == 'Hire') {
            $car->hire = true;
        } else {
            $car->sale = true;
        }

        if($car->save()) {
            return redirect()->route('cars.edit', ['car' => $car]);
        }
    }

    public function edit($id, Request $request) {
        $car = Car::where('id', $id)->first();
        if($request->query('all')) {
            return view('backend.cars.edit_all')->withCar($car);
        }
        return view('backend.cars.edit')->withCar($car);
    }

    public function update(Request $request, $id) {
        $car = Car::where('id', $id)->first();

        if($request->input('update-availability')) {
            $car->available = !$car->available;
            $car->save();
            $request->session()->flash('alert', 'Successfully done');
            $request->session()->flash('alert-class', 'alert-success');
            return back();
        }

        if ($request->hasFile('file')) {
            if ($request->file('file')->store('car_images/' . $car->id, 'public')) {
                $car->images_directory = "car_images/"  .$car->id;
                return response()->json(['message' => 'success']);
            }
        } else {
            $request->validate([
                'name' => 'required',
                'description' => 'min:20|max:200',
                'condition' => 'required',
                'price' => 'required',
                'location' => 'required',
                'type' => 'required',
                'brand' => 'required'
            ]);
            $car->name = $request->name;
            $car->description = $request->description;
            $car->condition = $request->condition;
            $car->fuel = $request->fuel;
            $car->color = $request->color;
            $car->year = $request->year;
            $car->drive_type = $request->drive_type;
            $car->door_count = $request->door_count;
            $car->price = $request->price;
            $car->location = $request->location;
            $car->type = $request->type;
            $car->brand = $request->brand;

            if ($request->hire_or_sale == 'Hire') {
                $car->hire = true;
            } else {
                $car->sale = true;
            }

            if ($car->save()) {
                return redirect()->route('cars.show', ['car' => $car]);
            }
        }
    }

    public function destroy() {
       dd('dump');
    }
}