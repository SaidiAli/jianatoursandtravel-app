<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class SearchController extends Controller
{
    public function formSearch(Request $request) {
        $results = $this->search($request->input('search'));
        return view('search_results')->with(['results' =>$results, 'search_query' => $request->query('search')]);
    }

    public function linkSearch(Request $request) {
        $results = $this->search($request->query('search'));
        return view('search_results')->with(['results' =>$results, 'search_query' => $request->query('search')]);
    }

    private function search($str) {
        return Hotel::search($str)->get();
    }
}
