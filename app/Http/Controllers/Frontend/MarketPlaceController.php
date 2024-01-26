<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MarketPlace;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MarketPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all market place data where user_id = auth()->user()->id and also join with product table
        $data = MarketPlace::where('user_id', Auth::user()->id)
        ->join('products', 'market_places.product_id', '=', 'products.id')
        ->select('market_places.*', 'products.name as product_name')
        ->get();
        return view('frontend.userdashboard.marketplace.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::all();
        return view('frontend.userdashboard.marketplace.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'short_description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contact' => 'required',
        ]);
        $product = new MarketPlace();
        $product->product_id = $request->product_id;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->contact = $request->contact;
        $product->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('marketplace', 'public');
            $product->image = $imagePath;
        }

        $product->save();
        return redirect()->back()->with('success', 'Product added successfully');

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
        $data = MarketPlace::where('id', $id)->first();
        $product = Product::all();
        return view('frontend.userdashboard.marketplace.edit',compact('data','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'short_description' => 'required',
            'contact' => 'required',
        ]);
        $product = MarketPlace::find($id);
        $product->product_id = $request->product_id;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->contact = $request->contact;
        $product->user_id = auth()->user()->id;
        $oldImagePath = $product->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('marketplace', 'public');
            Storage::delete($oldImagePath);
            $product->image = $imagePath;
        }
        $product->save();
        return redirect()->back()->with('success', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    // place order
    public function placeOrder(Request $request)
    {
        $request -> validate([
            //
        ]);
        $data = new Order();
        $data->user_id = $request->user_id;
        $data->market_place_id = $request->market_place_id;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        //generate unique tracking number
        $tracking_number = mt_rand(100000000, 999999999);
        $data->tracking_number = $tracking_number;
        $data->payment_method = $request->payment_method;
        $data->is_paid = 0;
        $data->status = 0;
        $data->save();
        return redirect()->back()->with('success', 'Order placed successfully');
    }
}
