<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GardenDate;

class GardenDatesController extends Controller
{
    public function index()
    {
        $dates = GardenDate::all();

        return view("garden_dates", compact('dates'));
    }
}
