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
        // $ticket = ticket::all();
        return view('admin.ticket.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = event::findOrFail($request->event_id);

        $ticket=ticket::create([
            $event_explode = explode('|', strval($request->event_id)),
            'id'=>$request->id,
            'event_id'=>$event_explode[0],
            'concert_name' => $event_explode[1],
            'cat'=>$request->cat,
            'seat'=>$request->seat,
            'section'=>$request->section,
            'ticket_price'=>$request->ticket_price,
            'row' =>$request->row,
        ]);
        // $ticket->event()->create([
        //     'concert_name' => $request->concert_name,
        //     // 'Concert_Date' => $request->Concert_Date,
        //     // 'Concert_Location' => $request->Concert_Location,
        // ]);

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
        $event = event::all();
        $ticket = ticket::findOrFail($id);
        return view('admin.ticket.edit', compact('event', 'ticket'));      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ticket_id)
    {
        $ticket = Ticket::findOrFail($ticket_id);

        $event_explode = explode('|', strval($request->event_id));
        $ticket->event_id = $event_explode[0];
        $ticket->concert_name = $event_explode[1];

        // $ticket->concert_name = $request->concert_name;
        $ticket->cat = $request->cat;
        $ticket->seat = $request->seat;
        $ticket->section = $request->section;
        $ticket->ticket_price = $request->ticket_price;
        $ticket->row = $request->row;

        $ticket->save();

        // $ticket = event::findOrFail($request->event_id)
        //                 ->ticket()->where('id',$id)->first();

        // $validatedData=$request->validate([
        //     $event_explode = explode('|', strval($request->event_id)),
        //     'id'=>$request->id,
        //     'event_id'=>$event_explode[0],
        //     'concert_name' => $event_explode[1],
        //     'cat'=>$request->cat,
        //     'seat'=>$request->seat,
        //     'section'=>$request->section,
        //     'ticket_price'=>$request->ticket_price,
        //     'row' =>$request->row,
        // ]);

        return redirect('admin/ticket')->with('message', 'Ticket updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = ticket::findOrFail($id);
        $ticket->delete();

        return redirect('admin/ticket')->with('message', 'Event deleted successfully!');
    }
}
