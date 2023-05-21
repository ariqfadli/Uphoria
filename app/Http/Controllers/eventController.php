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
    
}
