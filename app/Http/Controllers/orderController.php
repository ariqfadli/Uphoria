<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Models\ticket;
use App\Models\customer;
use App\Models\User;
use Illuminate\Http\Request;

class orderController extends Controller
{
    
    // public function index()
    // {
    //     $user = User::all();
    //     $transaction = transaction::all();
    //     return view('order', compact('transaction'));
    // }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {  
        $transaction = transaction::all(); 
        $ticket = ticket::all();
        $user = User::all();
        // return view('admin.transaction.create', compact('ticket','user'));
        
        if(auth()->user()->is_admin == 0){
            return view('order', compact('transaction', 'user', 'ticket'));
        }
        // else{
        //     return view ('order', compact('ticket', 'event'));
        // }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = ticket::findOrFail($request->ticket_id);
        $user = User::findOrFail($request->user_id);
        $ticket_explode = explode('|', strval($request->ticket_id));
        $user_explode = explode('|', strval($request->user_id));
        
        $transaction=transaction::create([
            'id'=>$request->id,
            'ticket_id'=>$ticket_explode[0],
            'concert_name' => $ticket_explode[1],
            'user_id'=>$user_explode[0],
            'name' => $user_explode[1],
            'payment_method'=>$request->payment_method,
            'total_price'=>$request->total_price,
            'transaction_date'=>$request->transaction_date,
        ]);

        return redirect('ticket')->with('message', 'Transaction added!');
    }

}
