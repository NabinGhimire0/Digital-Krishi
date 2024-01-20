<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgroExpert;
use Illuminate\Http\Request;

class AgroExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agroexpert = AgroExpert::all();
        return view('admin.pages.agroexpert.index',compact('agroexpert'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.agroexpert.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'email' => 'required',
        ]);
        $expert = new AgroExpert();
        $expert->name = $request->name;
        if($request->hasFile('image')){
            $expert->image = $request->image->store('agroexpert', 'public');
        }
        $expert->description = $request->description;
        $expert->contact = $request->contact;
        $expert->email = $request->email;
        $expert->status = $request->status ?1:0;
        $expert->save();
        return redirect('/admin/agroexpert')->with('success', 'Agro Expert Added Successfully');
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
        $expert = AgroExpert::find($id);
        return view('admin.pages.agroexpert.edit',compact('expert'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'email' => 'required',
        ]);
        $expert = AgroExpert::find($id);
        $expert->name = $request->name;
        if($request->hasFile('image')){
            $expert->image = $request->image->store('agroexpert', 'public');
        }
        $expert->description = $request->description;
        $expert->contact = $request->contact;
        $expert->email = $request->email;
        $expert->status = $request->status ?1:0;
        $expert->update();
        return redirect('/admin/agroexpert')->with('success', 'Agro Expert Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expert = AgroExpert::find($id);
        $expert->delete();
        return redirect('/admin/agroexpert')->with('success', 'Agro Expert Deleted Successfully');
    }
}
