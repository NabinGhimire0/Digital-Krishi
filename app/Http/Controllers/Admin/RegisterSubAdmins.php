<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterSubAdmins extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.subadmin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $province = Province::all();
        $city = City::all();
        return view('admin.pages.subadmin.create', compact('province','city'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed'],
            'phone' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'province_id' => ['required'],
            'city_id' => ['required'],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('users', 'public');
            $user->image = $imagePath;
        };
        $user->province_id = $request->province_id;
        $user->city_id = $request->city_id;
        $user->address = $request->address;
        $user->crop_area = $request->crop_area;
        $user->status = $request->status ? 1 : 0;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/subadmin')->with('status', 'Subadmin created.');
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
        $subadmin = User::find($id);
        $city = City::all();
        $province = Province::all();
        return view('admin.pages.subadmin.edit', compact('subadmin', 'province', 'city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'province_id' => ['required'],
            'city_id' => ['required'],
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $oldImagePath = $user->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('users', 'public');
            if ($oldImagePath) {
                Storage::delete($oldImagePath);
            }
            $user->image = $imagePath;
        }
        $user->province_id = $request->province_id;
        $user->city_id = $request->city_id;
        $user->address = $request->address;
        $user->crop_area = $request->crop_area;
        $user->status = $request->status ? 1 : 0;
        $user->update();
        return redirect('/subadmin')->with('status', 'Subadmin updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subadmin = User::find($id);
        $subadmin->delete();
        return redirect('/subadmin')->with('status', 'Subadmin deleted.');
    }
}
