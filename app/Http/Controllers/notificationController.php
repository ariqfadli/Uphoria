<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Models\ticket;
use App\Models\customer;
use App\Models\User;
use Illuminate\Http\Request;

class notificationController extends Controller
{
    
    public function index()
    {
        $user = User::all();
        $ticket =ticket::all();
        $transaction = transaction::all();
        // return view('admin.transaction.index', compact('transaction'));

        if(auth()->user()->is_admin == 0){
            return view('notification', compact('transaction', 'user', 'ticket'));
        }
    }

}
