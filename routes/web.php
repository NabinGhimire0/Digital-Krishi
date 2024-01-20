<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CureController;
use App\Http\Controllers\Admin\DiseaseController;
use App\Http\Controllers\Admin\FertilizerController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PesticideController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\RegisterSubAdmins;
use App\Http\Controllers\Admin\SeedController;
use App\Http\Controllers\ProfileController;
use App\Models\Pesticide;
use App\Models\Province;
use App\Models\Seed;
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
    });
});

//user routes
Route::get('/', function () {
    $seeds = Seed::all();
    $pesticides = Pesticide::all();
    return view('frontend.pages.home', compact('seeds', 'pesticides'));
});
Route::get('/diseases', function () {
    return view('frontend.pages.disease');
});
Route::get('/notice', function () {
    $notice = Notice::all();
    return view('frontend.pages.notices');
});

Route::get("/seed/{id}", function ($id) {
    $seed = Seed::where('id', $id)->first();
    return view('frontend.pages.seed', compact('seed'));
});
Route::get("/pesticides-/{id}", function ($id) {
    $pesticides = Pesticide::where('id', $id)->first();
    // var_dump($pesticides);
    return view('frontend.pages.pesticides', compact('pesticides'));
});


Route::get("/about-us", function () {
    return view('frontend.pages.aboutUs');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
