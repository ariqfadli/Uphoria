<?php
namespace App\Http\Controllers;


use App\Models\customer;
use App\Models\User;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {   
        $customer = customer::all();
        $user = User::all();
        return view('admin.customer.index', compact('customer', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view('admin.customer.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::findOrFail($request->user_id);

        customer::create([
            'id'=>$request->id,
            'user_id'=>$request->user_id,
            'name'=> $user->name,
            'contacts'=>$request->contacts,
            'address'=>$request->address,
        ]);

        return redirect('admin/customer')->with('message', 'Customer added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return $customer;
        $user = user::all();
        $customer=customer::findOrFail($id);
        return view('admin.customer.edit', compact('user','customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = customer::findOrFail($id);

        $user_explode = explode('|', strval($request->user_id));
        $customer->user_id = $user_explode[0];
        $customer->name = $user_explode[1];
        
        $customer->contacts = $request->contacts;
        $customer->address = $request->address;

        $customer->save();

        return redirect('admin/customer')->with('message', 'Customer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect('admin/customer')->with('message', 'Customer deleted successfully!');
    }

}
