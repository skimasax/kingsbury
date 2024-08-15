<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //
    public function index()
    {
        $data = Property::all();
        return view('property-grid')->with(['data' => $data]);
    }

    public function show($id)
    {
        $data = Property::find($id);
        return view('property-single')->with(['data' => $data]);
    }
   
}
