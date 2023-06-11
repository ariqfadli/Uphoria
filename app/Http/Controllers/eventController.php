<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class eventController extends Controller
{
    public function index()
    {
        $event = event::all();
        return view('admin.event.index', compact('event'));
    }
    
    public function create()
    {
        return view('admin.event.create');
    }
    
    public function store(Request $request)
    {
        event::create([
            'concert_name' => $request->concert_name,
            'concert_date' => $request->concert_date,
            'rundown' => $request->rundown,
            'concert_location' => $request->concert_location,
        ]);
    
        return redirect('admin/event')->with('message', 'Event Added');
    }

    public function edit($id)
    {
        // return $customer;
        $event=event::findOrFail($id);
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = event::findOrFail($id);

        $validatedData = $request->validate([
            'concert_name'=>'required|string|max:255',
            'concert_date'=>'required|date',
            'rundown'=>'required|string|max:255',
            'concert_location'=>'required|string|max:255',
        ]);

        $event->update($validatedData);

        return redirect('admin/event')->with('message', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = event::findOrFail($id);
        $event->delete();

        return redirect('admin/event')->with('message', 'Event deleted successfully!');
    }


    
}
