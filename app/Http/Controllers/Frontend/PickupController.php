<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PickupRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class PickupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pickup = PickupRequest::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        return view('frontend.userdashboard.pickup.index', compact('pickup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('frontend.userdashboard.pickup.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'farmer_contact' => 'required',
            'pickup_address' => 'required',
        ]);
        $pickup = new PickupRequest();
        $pickup->user_id = auth()->user()->id;
        $pickup->product_id = $request->product_id;
        $pickup->quantity = $request->quantity;
        $pickup->price = $request->price;
        $pickup->farmer_contact = $request->farmer_contact;
        $pickup->pickup_address = $request->pickup_address;
        $pickup->accepted_by = $request->accepted_by;
        $pickup->status = 0;
        $pickup->is_paid = 0;
        $pickup->save();
        return redirect('/pickup')->with('success', 'Pickup Request Created Successfully');
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
        $pickup = PickupRequest::find($id);
        return view('frontend.userdashboard.pickup.edit', compact('pickup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'product_id' => 'required',
        //     'quantity' => 'required',
        //     'price' => 'required',
        //     'farmer_contact' => 'required',
        //     'pickup_address' => 'required',
        // ]);
        $pickup = PickupRequest::find($id);
        $pickup->user_id = auth()->user()->id;
        $pickup->product_id = $request->product_id;
        $pickup->quantity = $request->quantity;
        $pickup->price = $request->price;
        $pickup->farmer_contact = $request->farmer_contact;
        $pickup->pickup_address = $request->pickup_address;
        $pickup->pickup_date = $request->pickup_date;
        $pickup->accepted_by = auth()->user()->id;
        $pickup->status = $request->status ? 1 : 0;
        $pickup->is_paid = $request->is_paid ? 1 : 0;
        $pickup->update();
        return redirect()->back()->with('success', 'Pickup Request Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pickup = PickupRequest::find($id);
        $pickup->delete();
        return redirect('/pickup')->with('success', 'Pickup Request Deleted Successfully');
    }
}
