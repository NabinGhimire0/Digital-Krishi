<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class GoogleTranslateController extends Controller
{
    public function index()
    {
        return view('translate.index');
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);

        Session::put('locale', $request->lang);

        return redirect()->back();
    }
}
