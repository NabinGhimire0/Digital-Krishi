<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesticide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesticideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesticide = Pesticide::all();
        return view('admin.pages.pesticide.index',compact('pesticide'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.pesticide.create');
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
        $pesticide = new Pesticide();
        $pesticide->name = $request->name;
        $pesticide->shortdesc = $request->shortdesc;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pesticides', 'public');
            $pesticide->image = $imagePath;
        };
        $pesticide->price = $request->price;
        $pesticide->description = $request->description;
        $pesticide->save();
        return redirect('/admin/pesticide')->with('success', 'Pesticide created successfully.');
        
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
        $pesticide = Pesticide::find($id);
        return view('admin.pages.pesticide.edit',compact('pesticide'));
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
        $pesticide = Pesticide::find($id);
        $pesticide->name = $request->name;
        $pesticide->shortdesc = $request->shortdesc;
        $oldImagePath = $pesticide->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pesticides', 'public');
            if ($oldImagePath) {
                Storage::delete($oldImagePath);
            }
            $pesticide->image = $imagePath;
        };
        $pesticide->price = $request->price;
        $pesticide->description = $request->description;
        $pesticide->update();
        return redirect('/admin/pesticide')->with('success', 'Pesticide updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesticide = Pesticide::find($id);
        $pesticide->delete();
        return redirect('pesticide')->with('success', 'Pesticide deleted successfully.');
    }
}
