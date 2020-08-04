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
        return view('backend.cars.show');
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

    public function edit($id) {
        $car = Car::where('id', $id)->first();
        return view('backend.cars.edit')->withCar($car);
    }

    public function update(Request $request, $id) {
        $car = Car::where('id', $id)->first();

        if ($request->hasFile('file')) {
            if ($request->file('file')->store('car_images/' . $car->id, 'local')) {
                $car->images_directory = "car_images/"  .$car->id;
                return response()->json(['message' => 'success']);
            }
        }
    }
}
