<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TouristInformationController extends Controller
{
    public function index()
    {
        return view('tourist-information');
    }
}
