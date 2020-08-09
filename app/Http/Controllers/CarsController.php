<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class CarsController extends Controller
{
    public function index(Request $request) {
        $cars = Car::all();

        $all_cars = $cars->count();
        $for_hire = $cars->filter(function($item) {
            return isset($item['hire']) &&  $item['available'] == true;
        })->count();
        $for_sale = $cars->filter(function ($item) {
            return isset($item['sale']) &&  $item['available'] == true;
        })->count();
        $sold_out = $cars->pluck('available')->filter(function($item) {
            return $item == false;
        })->count();

        if($request->query('view-all-cars')) {
            return view('backend.cars.all_cars');
        }

        return view('backend.cars.index')->with(['all_cars' => $all_cars, 'for_hire' => $for_hire, 'for_sale' => $for_sale, 'sold_out' => $sold_out]);
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
            if ($path = $request->file('file')->store('car_images/' . $car->id, 'gcs')) {
                $car->car_image = Storage::url($path);
                $car->save();
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
                $car->sale = null;
            } else {
                $car->sale = true;
                $car->hire = null;
            }

            if ($car->save()) {
                return redirect()->route('cars.show', ['car' => $car]);
            }
        }
    }

    public function destroy($id, Request $request) {
       try{
            $deleted_car = Car::where('id', $id)->delete();
            $request->session()->flash('alert', 'Car was successfully deleted');
            $request->session()->flash('alert-class', 'alert-info');
            return redirect()->route('cars.index');
       } catch(Exception $e) {
            Log::error('Delete car exception: '. $e->getMessage());
            $request->session()->flash('alert', 'Something bad happenened, please try deleting again');
            $request->session()->flash('alert-class', 'alert-danger');
            return back();
       }
    }
}