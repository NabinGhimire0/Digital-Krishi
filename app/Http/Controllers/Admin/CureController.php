<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cure;
use App\Models\Disease;
use Illuminate\Http\Request;

class CureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // join disease and cures table
        $cure = Cure::join('diseases', 'cures.disease_id', '=', 'diseases.id')->select('cures.*', 'diseases.name')->get();

        return view('admin.pages.cure.index', compact('cure'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $disease = Disease::all();
        return view('admin.pages.cure.create',compact('disease'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'disease_id' => 'required',
            'medicine' => 'required',
            'procedure' => 'required',
        ]);
        $cure = new Cure();
        $cure->disease_id = $request->disease_id;
        $cure->medicine = $request->medicine;
        $cure->procedure = $request->procedure;
        $cure->save();
        return redirect('/cure')->with('success', 'Cure created successfully!');
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
        $cure = Cure::find($id);
        $disease = Disease::all();
        return view('admin.pages.cure.edit', compact('cure','disease'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'disease_id' => 'required',
            'medicine' => 'required',
            'procedure' => 'required',
        ]);
        $cure = Cure::find($id);
        $cure->disease_id = $request->disease_id;
        $cure->medicine = $request->medicine;
        $cure->procedure = $request->procedure;
        $cure->update();
        return redirect('/cure')->with('success', 'Cure updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cure = Cure::find($id);
        $cure->delete();
        return redirect('/cure')->with('success', 'Cure deleted successfully!');
    }
}
