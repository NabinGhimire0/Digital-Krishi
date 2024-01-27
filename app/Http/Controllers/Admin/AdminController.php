<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PickupRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pickup()
    {
        $pickup = PickupRequest::all();
        return view('admin.pages.pickup.index', compact('pickup'));
    }

    public function pickupDetail($id)
    {
        $pickup = PickupRequest::find($id);
        return view('admin.pages.pickup.edit', compact('pickup'));
    }
}
