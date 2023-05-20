<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{
    public function index()
    {
        return view('admin.event.index');
    }
    
    public function create()
    {
        return view('admin.event.create');
    }
    
    public function store(Request $request)
    {
        return view('admin.event.create');
    }
}
