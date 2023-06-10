<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Models\ticket;
use App\Models\customer;
use Illuminate\Http\Request;

class transactionController extends Controller
{
    public function index()
    {
        $transaction = transaction::all();
        return view('admin.transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $ticket = ticket::all();
        $customer = customer::all();
        return view('admin.transaction.create', compact('ticket','customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = ticket::findOrFail($request->ticket_id);
        $customer = ticket::findOrFail($request->customer_id);
        
        $transaction=transaction::create([
            $ticket_explode = explode('|', strval($request->ticket_id)),
            $customer_explode = explode('|', strval($request->customer_id)),
            'id'=>$request->id,
            'ticket_id'=>$ticket_explode[0],
            'concert_name' => $ticket_explode[1],
            'customer_id'=>$customer_explode[0],
            'name' => $customer_explode[1],
            'payment_method'=>$request->payment_method,
            'total_price'=>$request->total_price,
            'transaction_date'=>$request->transaction_date,
        ]);

        return redirect('admin/transaction')->with('message', 'Transaction added!');
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
        $customer = customer::all();
        $ticket = ticket::all();
        $transaction = transaction::findOrFail($id);
        return view('admin.transaction.edit', compact('customer', 'ticket', 'transaction')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $transaction_id)
    {
        $transaction = Transaction::findOrFail($transaction_id);

        $customer_explode = explode('|', strval($request->customer_id));
        $transaction->customer_id = $customer_explode[0];
        $transaction->name = $customer_explode[1];

        $ticket_explode = explode('|', strval($request->ticket_id));
        $transaction->ticket_id = $ticket_explode[0];
        $transaction->concert_name = $ticket_explode[1];

        $transaction->payment_method = $request->payment_method;
        $transaction->total_price = $request->total_price;
        $transaction->transaction_date = $request->transaction_date;

        $transaction->save();

        return redirect('admin/transaction')->with('message', 'Transaction updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction = transaction::findOrFail($id);
        $transaction->delete();

        return redirect('admin/transaction')->with('message', 'Transaction deleted successfully!');
    }
}
