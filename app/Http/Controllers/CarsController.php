<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index() {
        return view('backend.cars.index');
    }

    public function store(Request $request) {
        return redirect()->route('cars.edit');
    }

    public function edit() {
        return view('backend.cars.edit');
    }
}
