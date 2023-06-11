<?php
namespace App\Http\Controllers;


use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {   
        $customer = customer::all();
        return view('admin.customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        customer::create([
            'name'=> $request->name,
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
        $customer=customer::findOrFail($id);
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = customer::findOrFail($id);

        $validatedData = $request->validate([
            'name'=>'required|string|max:255',
            'contacts'=>'required|string|max:255',
            'address'=>'required|string|max:255',
        ]);

        $customer->update($validatedData);

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
