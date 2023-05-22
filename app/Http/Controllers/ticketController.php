<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use App\Models\event;
use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function index()
    {
        $ticket = ticket::all();
        return view('admin.ticket.index', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event = event::all();
        return view('admin.ticket.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = event::findOrFail($request->event_id);
        $event->ticket()->create([
            'Concert_Name' => $request->Concert_Name,
            // 'Concert_Date' => $request->Concert_Date,
            // 'Concert_Location' => $request->Concert_Location,
        ]);
        $ticket=ticket::create([
            'CAT'=>$request->CAT,
            'Seat'=>$request->Seat,
            'Section'=>$request->Section,
            'Ticket_Price'=>$request->Ticket_Price,
            'Row' =>$request->Row,

        ]);

        return redirect('admin/ticket')->with('message', 'Ticket added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
