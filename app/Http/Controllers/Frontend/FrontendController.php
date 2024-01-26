<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AgroExpert;
use App\Models\Disease;
use App\Models\Fertilizer;
use App\Models\MarketPlace;
use App\Models\Notice;
use App\Models\Pesticide;
use App\Models\Seed;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $notices = Notice::orderBy('created_at', 'asc')->take(4)->get();
        //get only 5 random seeds
        $seeds = Seed::inRandomOrder()->take(5)->get();
        $pesticides = Pesticide::inRandomOrder()->take(5)->get();
        $fertilizers = Fertilizer::inRandomOrder()->take(5)->get();
        return view('frontend.pages.home', compact('seeds', 'pesticides', 'fertilizers', 'notices'));
    }

    public function expert()
    {
        $experts = AgroExpert::all();
        return view('frontend.pages.ourExpert', compact('experts'));
    }

    public function seeds()
    {
        $seeds = Seed::all();
        return view('frontend.pages.allSeeds', compact('seeds'));
    }

    public function seedDetail($id)
    {
        $seed = Seed::where('id', $id)->first();
        return view('frontend.pages.seed', compact('seed'));
    }

    public function fertilizer()
    {
        $fertilizers = Fertilizer::all();
        return view('frontend.pages.allFertilizers', compact('fertilizers'));
    }

    public function fertilizerDetail($id)
    {
        $fertilizer = Fertilizer::where('id', $id)->first();
        return view('frontend.pages.fertilizer', compact('fertilizer'));
    }

    public function pesticides()
    {
        $pesticides = Pesticide::all();
        return view('frontend.pages.allPesticides', compact('pesticides'));
    }

    public function pesticideDetail($id)
    {
        $pesticides = Pesticide::where('id', $id)->first();
        return view('frontend.pages.pesticides', compact('pesticides'));
    }

    public function diseases()
    {
        $diseases = Disease::all();
        return view('frontend.pages.disease', compact('diseases'));
    }

    public function diseaseDetail($id)
    {
        $diseases = Disease::find($id);
        return view('frontend.pages.diseaseDetail', compact('diseases'));
    }

    public function marketplace()
    {
        $products = MarketPlace::where('status', 0)->where('quantity', '>', 0)->get();
        return view('frontend.pages.marketplace', compact('products'));
    }

    public function product($id)
    {
        $product = MarketPlace::find($id);
        return view('frontend.pages.product', compact('product'));
    }

    public function posts()
    {
    }

    public function about()
    {
        return view('frontend.pages.aboutUs');
    }

    public function contact()
    {
        return view('frontend.pages.contactUs');
    }

    public function notice()
    {
        $notices = Notice::all();
        return view('frontend.pages.notices', compact('notices'));
    }

    public function noticeDetail($id)
    {
        $notice = Notice::where('id', $id)->first();
        return view('frontend.pages.notice', compact('notice'));
    }
}
