<?php

use App\Http\Controllers\Admin\AgroExpertController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CureController;
use App\Http\Controllers\Admin\DiseaseController;
use App\Http\Controllers\Admin\FertilizerController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PesticideController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\RegisterSubAdmins;
use App\Http\Controllers\Admin\SeedController;
use App\Http\Controllers\Frontend\CommunityPostController;
use App\Http\Controllers\Frontend\MarketPlaceController;
use App\Http\Controllers\ProfileController;
use App\Models\AgroExpert;
use App\Models\Cure;
use App\Models\Disease;
use App\Models\Fertilizer;
use App\Models\Notice;
use App\Models\Pesticide;
use App\Models\Seed;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// admin routes
Route::group(['middleware' => 'rolebasedauth:admin,subadmin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::resource('/province', ProvinceController::class);
        Route::resource('/city', CityController::class);
        Route::resource('/subadmin', RegisterSubAdmins::class);
        Route::resource('/notice', NoticeController::class);
        Route::resource('/disease', DiseaseController::class);
        Route::resource('/cure', CureController::class);
        Route::resource('/seeds', SeedController::class);
        Route::resource('/pesticide', PesticideController::class);
        Route::resource('/fertilizer', FertilizerController::class);
        Route::resource('/agroexpert', AgroExpertController::class);
        Route::resource('/product', ProductController::class);
        Route::resource('marketplace', MarketPlaceController::class);
    });
});

//user routes
Route::get('/', function () {
    $notices = Notice::orderBy('created_at', 'asc')->take(4)->get();
    $seeds = Seed::all();
    $pesticides = Pesticide::all();
    $fertilizers = Fertilizer::all();
    return view('frontend.pages.home', compact('seeds', 'pesticides', 'fertilizers', 'notices'));
});
Route::get('/diseases', function () {
    $diseases = Disease::all();
    return view('frontend.pages.disease', compact('diseases'));
});
Route::get('/diseases/{id}', function ($id) {
    $diseases = Disease::find($id);
    $cure = Cure::where('disease_id', $id)->first();
    return view('frontend.pages.diseaseDetail', compact('diseases', 'cure'));
});
Route::get('/notice', function () {
    $notices = Notice::all();
    return view('frontend.pages.notices', compact('notices'));
});

Route::get('/notice/{id}', function ($id) {
    $notice = Notice::where('id', $id)->first();
    return view('frontend.pages.notice', compact('notice'));
});
Route::get("/seed", function () {
    $seeds = Seed::all();
    return view('frontend.pages.allSeeds', compact('seeds'));
});

Route::get("/seed/{id}", function ($id) {
    $seed = Seed::where('id', $id)->first();
    return view('frontend.pages.seed', compact('seed'));
});
Route::get("/pesticides-/{id}", function ($id) {
    $pesticides = Pesticide::where('id', $id)->first();
    return view('frontend.pages.pesticides', compact('pesticides'));
});
Route::get("/pesticides/all", function () {
    $pesticides = Pesticide::all();

    return view('frontend.pages.allPesticides', compact('pesticides'));
});
Route::get("/fertilizers/all", function () {
    $fertilizers = Fertilizer::all();
    return view('frontend.pages.allFertilizers', compact('fertilizers'));
});

Route::get("/about-us", function () {
    return view('frontend.pages.aboutUs');
});

Route::get("/fertilizer/{id}", function ($id) {
    $fertilizer = Fertilizer::where('id', $id)->first();
    return view('frontend.pages.fertilizer', compact('fertilizer'));
});
Route::get("/our-expert", function () {
    $experts = AgroExpert::all();
    return view('frontend.pages.ourExpert', compact('experts'));
});
Route::get("/contact-us", function () {
    return view('frontend.pages.contactUs');
});
Route::resource('posts', CommunityPostController::class);
<<<<<<< HEAD

=======
Route::get('/dashboard', function () {
    return view('frontend.pages.dashboard.dashboard');
});
>>>>>>> e12759c2e5b3d5811ccfa5b07d4f8dca19fcd6aa
Route::get("/community", function () {
    
    return view('frontend.pages.community');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
