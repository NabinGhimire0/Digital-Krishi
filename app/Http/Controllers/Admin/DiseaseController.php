<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'images' => 'required|image|mimes:jpg,png,jpeg|max:1024',
            'symptoms' => 'required',
            'solution' => 'required',
        ]);
        $disease = new Disease();
        $disease->name = $request->name;
        if($request->hasFile('images')){
            $disease->images = $request->file('images')->store('disease', 'public');
        }
        $disease->symptoms = $request->symptoms;
        $disease->solution = $request->solution;
        $disease->save();
        return redirect('admin/disease')->with('status', 'Disease created successfully!');
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
        $oldImage = $disease->images;
        if($request->hasFile('images')){
            $disease->images = $request->file('images')->store('disease', 'public');
            if($oldImage){
                Storage::delete($oldImage);
            }
        }
        $disease->symptoms = $request->symptoms;
        $disease->solution = $request->solution;
        $disease->update();
        return redirect('admin/disease')->with('status', 'Disease updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disease = Disease::find($id);
        $disease->delete();
        return redirect('admin/disease')->with('status', 'Disease deleted successfully!');
    }
}
