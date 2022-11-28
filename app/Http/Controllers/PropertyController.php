<?php

namespace App\Http\Controllers;

use App\Models\Propertie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Propertie::get();

        return view('property/index')->with('properties', $properties);
    }
    public function create()
    {
        return view('property/create');
    }
    public function store(Request $request)
    {
        $propertie = new Propertie();

        $propertie->title = $request->title;
        $propertie->description = $request->description;
        $propertie->rental_price = $request->rental_price;
        $propertie->sale_price = $request->sale_price;
        $propertie->save();

        return  redirect()->action([PropertyController::class, "index"]);
    }
}
