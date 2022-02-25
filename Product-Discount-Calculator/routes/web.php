<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/input', function () {
    return view('input');
});
Route::post('/input', function (Illuminate\Http\Request $request) {
    $description = $request->description;
    $price = $request->price;
    $discountPercent = $request->discountPercent;
    $discountAmount = $price * $discountPercent * 0.1;
    $discountPrice = $price - $discountAmount;

    return  compact(['discountPrice','discountAmount','description','price','discountPercent']);

});

//Route::post('/login',[HomeController::class,'login'])->name('input');
//Route::get('/home',[HomeController::class,'home']);
