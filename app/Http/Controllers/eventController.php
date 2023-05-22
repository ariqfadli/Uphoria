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
        Event::create([
            'Concert_Name' => $request->Concert_Name,
            'Concert_Date' => $request->Concert_Date,
            'Rundown' => $request->Rundown,
            'Concert_Location' => $request->Concert_Location,
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
            'Concert_Name'=>'required|string|max:255',
            'Concert_Date'=>'required|date|max:255',
            'Rundown'=>'required|string|max:255',
            'Concert_Location'=>'required|string|max:255',
        ]);

        $event->update($validatedData);

        return redirect('admin/event')->with('message', 'Customer updated successfully!');
    }


    
}
