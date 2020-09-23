<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('backend.super_admin.dashboard');
    }

    public function facilities_add() {
        try {
            DB::table('facilities')->insert([['name' => 'Restaurant', 'icon_class' => 'uil-restaurant'], ['name' => 'Free WIFI', 'icon_class' => 'uil-wifi'], ['name' => 'Garden', 'icon_class' => 'uil-trees'], ['name' => 'Jacuzzi', 'icon_class' => 'uil-temperature'], ['name' => 'restaurant', 'icon_class' => 'uil-restaurant'], ['name' => 'Roof Top Terrace', 'icon_class' => 'uil-water'], ['name' => 'Bar', 'icon_class' => 'uil-glass-martini-alt'], ['name' => 'Airport Transportation', 'icon_class' => 'uil-plane'], ['name' => 'Swimming Pool', 'icon_class' => 'uil-swimmer']]);

            return back();

        } catch (\Exception $e) {
            Log::error('Add Facilities catch error: ' . $e->getMessage());
            return redirect()->route('admin.index');
        }
    }
}
