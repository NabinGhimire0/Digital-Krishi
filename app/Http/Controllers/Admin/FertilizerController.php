<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FertilizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */  public function index()
    {
        $fertilizer = Fertilizer::all();
        return view('admin.pages.fertilizer.index', compact('fertilizer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.fertilizer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'shortdesc' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $fertilizer = new Fertilizer();
        $fertilizer->name = $request->name;
        $fertilizer->shortdesc = $request->shortdesc;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pesticides', 'public');
            $fertilizer->image = $imagePath;
        };
        $fertilizer->price = $request->price;
        $fertilizer->description = $request->description;
        $fertilizer->save();
        return redirect('admin/fertilizer')->with('status', 'Pesticide created successfully.');
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
        $fertilizer = Fertilizer::find($id);
        return view('admin.pages.fertilizer.edit', compact('fertilizer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'shortdesc' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $fertilizer = Fertilizer::find($id);
        $fertilizer->name = $request->name;
        $fertilizer->shortdesc = $request->shortdesc;
        $oldImagePath = $fertilizer->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pesticides', 'public');
            if ($oldImagePath) {
                Storage::delete($oldImagePath);
            }
            $fertilizer->image = $imagePath;
        };
        $fertilizer->price = $request->price;
        $fertilizer->description = $request->description;
        $fertilizer->update();
        return redirect('admin/fertilizer')->with('status', 'Pesticide updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fertilizer = Fertilizer::find($id);
        $fertilizer->delete();
        return redirect('admin/fertilizer')->with('status', 'Pesticide deleted successfully.');
    }
}
