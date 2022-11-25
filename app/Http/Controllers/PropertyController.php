<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('property/index');
    }
    public function create(Request $request)
    {
        return view('property/create');
    }
}
