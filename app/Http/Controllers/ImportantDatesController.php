<?php

namespace App\Http\Controllers;

use App\ImportantDate;
use Illuminate\Http\Request;

class ImportantDatesController extends Controller
{
    public function index()
    {
        $dates = ImportantDate::all();

        return view("important_dates", compact('dates'));
    }

}
