<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seed = Seed::all();
        return view('admin.pages.seeds.index',compact('seed'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.seeds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'shortdesc' => 'required',
            'market_price' => 'required',
            'climate' => 'required',
            'altitude' => 'required',
            'description' => 'required',
        ]);
        $seed = new Seed();
        $seed->name = $request->name;
        $seed->shortdesc = $request->shortdesc;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('users', 'public');
            $seed->image = $imagePath;
        };
        $seed->market_price = $request->market_price;
        $seed->climate = $request->climate;
        $seed->altitude = $request->altitude;
        $seed->description = $request->description;
        $seed->user_id = auth()->user()->id;
        $seed->save();
        return redirect('admin/seeds')->with('success', 'Seed created successfully.');
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
        $seed = Seed::find($id);
        return view('admin.pages.seeds.edit',compact('seed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'shortdesc' => 'required',
            'market_price' => 'required',
            'climate' => 'required',
            'altitude' => 'required',
            'description' => 'required',
        ]);
        $seed = Seed::find($id);
        $seed->name = $request->name;
        $seed->shortdesc = $request->shortdesc;
        $oldImagpath = $seed->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('users', 'public');
            if ($oldImagpath) {
                Storage::delete($oldImagpath);
            }
            $seed->image = $imagePath;
        };
        $seed->market_price = $request->market_price;
        $seed->climate = $request->climate;
        $seed->altitude = $request->altitude;
        $seed->description = $request->description;
        $seed->user_id = auth()->user()->id;
        $seed->update();
        return redirect('admin/seeds')->with('success', 'Seed updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seed = Seed::find($id);
        $seed->delete();
        return redirect('admin/seeds')->with('success', 'Seed deleted successfully.');
    }
}
