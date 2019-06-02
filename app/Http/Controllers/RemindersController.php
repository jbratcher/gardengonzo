<?php

namespace App\Http\Controllers;

use App\Reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class RemindersController extends Controller
{
    public function index()
    {
        $reminders = Reminder::all();

        return view("reminders.index", compact('reminders'));
    }

    public function create()
    {
        return view("reminders.create");
    }

    public function store()
    {
        $validatedData = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'time' => 'required'
        ]);

        Reminder::create([
            'title' => request('title'),
            'description' => request('description'),
            'time' => request('time'),
            'user_id' => Auth::id()
        ]);

        return redirect()->to('/reminders');
    }

    public function show(Reminder $reminder)
    {
        return view("reminders.show", compact('reminder'));
    }

    public function edit(Reminder $reminder)
    {
        return view("reminders.edit", compact('reminder'));
    }

    public function update(Reminder $reminder)
    {
        $reminder->title = request("title");
        $reminder->description = request("description");
        $reminder->time = request('time');

        $reminder->save();

        return redirect()->to('/reminders');
    }

    public function destroy(Reminder $reminder)
    {
        $reminder -> delete();

        return redirect()->to('/reminders');
    }

}
