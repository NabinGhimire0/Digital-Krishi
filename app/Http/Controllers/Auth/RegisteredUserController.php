<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $provinces = Province::all();
        $city = City::all();
        return view('auth.register', compact('provinces', 'city'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'province_id' => ['required'],
            'city_id' => ['required'],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = 'farmer';
        $user->province_id = $request->province_id;
        $user->city_id = $request->city_id;
        $user->address = $request->address;
        $user->crop_area = $request->crop_area;
        $user->status = 0;
        $user->password = Hash::make($request->password);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('users', 'public');
            $user->image = $imagePath;
        };
        $user->save();

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'role' => $request->role,
        //     'province_id' => $request->province_id,
        //     'city_id' => $request->city_id,
        //     'address' => $request->address,
        //     'crop_area' => $request->crop_area,
        //     'status' => $request->status ? 1 : 0,
        //     'password' => Hash::make($request->password),
        // ]);

        event(new Registered($user));

        Auth::login($user);

        $role = Auth::user()->role;
        if ($role == 'farmer') {
            return redirect('/');
        }else{
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
