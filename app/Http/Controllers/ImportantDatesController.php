<?php

namespace App\Http\Controllers;

use App\ImportantDate;
use Illuminate\Http\Request;

class ImportantDatesController extends Controller
{
    public function index()
    {
        $dates = ImportantDate::all();

        return view("important_dates.index", compact('dates'));
    }

    public function create()
    {
        return view("important_dates.create");
    }

    public function store()
    {
        ImportantDate::create([
            'name' => request('name'),
            'description' => request('description'),
            'time' => request('time')
        ]);

        return redirect()->to('/important_dates');
    }

    public function show($id)
    {
        $date = ImportantDate::find($id);

        return view("important_dates.show", compact('date'));
    }

    public function edit($id)
    {
        $date = ImportantDate::find($id);

        return view("important_dates.edit", compact('date'));
    }

    public function update($id)
    {
        $date = ImportantDate::find($id);

        $date->name = request("name");
        $date->description = request("description");
        $date->time = request('time');

        $date->save();

        return redirect()->to('/important_dates');
    }

    public function destroy($id)
    {
        ImportantDate::find($id) -> delete();

        return redirect()->to('/important_dates');
    }

}
