<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FarmingEquipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FarmingEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipment = FarmingEquipment::where('user_id', auth()->user()->id)->get();
        return view('frontend.userdashboard.equipment.index', compact('equipment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.userdashboard.equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'contact' => 'required',
        ]);
        $equipment = new FarmingEquipment();
        $equipment->name = $request->name;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('equipment', 'public');
            $equipment->image = $imagePath;
        }
        $equipment->description = $request->description;
        $equipment->price = $request->price;
        $equipment->contact = $request->contact;
        $equipment->user_id = auth()->user()->id;
        $equipment->save();
        return redirect('/equipment')->with('status', 'Equipment added successfully');
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
        $equipment = FarmingEquipment::find($id);
        return view('frontend.userdashboard.equipment.edit', compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:1024',
        ]);
        $equipment = FarmingEquipment::find($id);
        $equipment->name = $request->name;
        $equipment->price = $request->price;
        $equipment->contact = $request->contact;
        $equipment->description = $request->description;
        $oldImagePath = $equipment->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('equipment', 'public');
            if ($oldImagePath) {
                Storage::delete($oldImagePath);
            }
            $equipment->image = $imagePath;
        }
        $equipment->update();
        return redirect('/equipment')->with('status', 'Equipment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipment = FarmingEquipment::find($id);
        if ($equipment->image) {
            Storage::delete($equipment->image);
        }
        $equipment->delete();
        return redirect('/equipment')->with('status', 'Equipment deleted successfully');
    }
}
