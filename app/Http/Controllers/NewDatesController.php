<?php

namespace App\Http\Controllers;

use App\ImportantDate;
use Illuminate\Http\Request;

class NewDatesController extends Controller
{
    public function create()
    {
        $dates = ImportantDate::all();

        return view("new_date", compact('dates'));

    }

    public function store()
    {
        ImportantDate::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect()->to('/important_dates');
    }
}
