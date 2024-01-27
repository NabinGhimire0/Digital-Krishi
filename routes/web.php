<?php

use App\Http\Controllers\Admin\AdminController;
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
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\CommunityPostController;
use App\Http\Controllers\Frontend\FarmingEquipmentController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\MarketPlaceController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\PickupController;
use App\Http\Controllers\GoogleTranslateController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MessengerController;
use App\Http\Controllers\ProfileController;
use App\Models\AgroExpert;
use App\Models\CommunityPost;
use App\Models\Cure;
use App\Models\Disease;
use App\Models\Fertilizer;
use App\Models\MarketPlace;
use App\Models\Notice;
use App\Models\Pesticide;
use App\Models\Seed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

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
Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'rolebasedauth:admin,subadmin'], function () {
        Route::prefix('admin')->group(function () {
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            })->name('dashboard');

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
            Route::get('/pickup', [AdminController::class, 'pickup']);
            Route::get('/pickup/{id}/edit', [AdminController::class, 'pickupDetail']);
        });
    });
    Route::group(['middleware' => 'rolebasedauth:admin,subadmin,farmer'], function () {
        //marketplace
        Route::get('/market', [FrontendController::class, 'marketplace']);
        Route::get('/products/{id}', [FrontendController::class, 'product']);

        Route::resource('posts', CommunityPostController::class);
        Route::resource('orders', OrderController::class);
        // place order
        Route::post('/place-order', [MarketPlaceController::class, 'placeOrder']);

        Route::resource('/equipment', FarmingEquipmentController::class);
        Route::resource('/pickup', PickupController::class);

        Route::post('/comment', [CommentController::class, 'store']);
        Route::resource('marketplace', MarketPlaceController::class);
        //
        Route::get('/dashboard', function () {
            $post = CommunityPost::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
            return view('frontend.userdashboard.dashboard', compact('post'));
        })->middleware(['auth', 'verified'])->name('userdashboard');

        Route::get('/weather', [WeatherController::class, 'weather']);
        Route::get('/weather/{city}', [WeatherController::class, 'getWeather']);
    });
});

//home
Route::get('/', [FrontendController::class, 'home']);
Route::get('/home', [FrontendController::class, 'home']);

//expert
Route::get('/our-expert', [FrontendController::class, 'expert']);
//seed
Route::get('/seed', [FrontendController::class, 'seeds']);
Route::get('/seed/{id}', [FrontendController::class, 'seedDetail']);
//disease
Route::get('/diseases', [FrontendController::class, 'diseases']);
Route::get('/diseases/{id}', [FrontendController::class, 'diseaseDetail']);

//notice
Route::get('/notice', [FrontendController::class, 'notice']);
Route::get('/notice/{id}', [FrontendController::class, 'noticeDetail']);

//pesticides
Route::get('/pesticides', [FrontendController::class, 'pesticides']);
Route::get('/pesticides-/{id}', [FrontendController::class, 'pesticideDetail']);

//fertilizer
Route::get('/fertilizer', [FrontendController::class, 'fertilizer']);
Route::get("/fertilizer/{id}", [FrontendController::class, 'fertilizerDetail']);

Route::get('/about-us', [FrontendController::class, 'about']);
Route::get('/contact-us', [FrontendController::class, 'contact']);

Route::get('/google/translate/change', [GoogleTranslateController::class, 'change'])->name('google.translate.change');
Route::get('/submit', [ImageController::class, 'showForm']);
Route::get('/report', [ImageController::class, 'showReport']);
Route::post('/submit', [ImageController::class, 'submitForm']);


Route::get('/footer',function(){
    return view('frontend.pages.footer');
});
require __DIR__ . '/auth.php';
