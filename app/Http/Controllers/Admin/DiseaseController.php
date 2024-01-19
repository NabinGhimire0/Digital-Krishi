<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disease = Disease::all();
        return view('admin.pages.disease.index', compact('disease'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.disease.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'symptoms' => 'required',
        ]);
        $disease = new Disease();
        $disease->name = $request->name;
        $disease->symptoms = $request->symptoms;
        $disease->save();
        return redirect('/disease')->with('success', 'Disease created successfully!');
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
        $disease = Disease::find($id);
        return view('admin.pages.disease.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'symptoms' => 'required',
        ]);
        $disease = Disease::find($id);
        $disease->name = $request->name;
        $disease->symptoms = $request->symptoms;
        $disease->update();
        return redirect('/disease')->with('success', 'Disease updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disease = Disease::find($id);
        $disease->delete();
        return redirect('/disease')->with('success', 'Disease deleted successfully!');
    }
}
