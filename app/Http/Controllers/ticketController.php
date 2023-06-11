<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ticketController extends Controller
{
    public function index()
    {
        $ticket = ticket::all();
        $event = event::all(); 

        // return view('admin.ticket.index', compact('ticket'));

        if(auth()->user()->is_admin == 1){
            return view('admin.ticket.index', compact('ticket'));
        }else{
            return view ('ticket', compact('ticket', 'event'));
        }
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
        // Retrieve the event based on the event_id
        $event = Event::findOrFail($request->event_id); 
        // Create a new ticket record and assign the image paths
        $ticket = Ticket::create([
            'event_id' => $request->event_id,
            'concert_name' => $event->concert_name,
            'concert_date' => $event->concert_date,
            'rundown' => $event->rundown,
            'concert_location' => $event->concert_location,
            'price' => $event->price,
            'cat' => $request->cat,
            'seat' => $request->seat,
            // 'images' => $imagePaths,
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
        // $ticket->section = $request->section;
        // $ticket->ticket_price = $request->ticket_price;
        // $ticket->row = $request->row;

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
