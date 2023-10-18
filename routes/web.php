<?php

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
use App\Http\Controllers\SiteController;

Route::get('/', function () {
//    return "hello world";
    return view('welcome');
});
Route::get("/about", function (){
    return view('sites/about');
});

Route::get('/site', [SiteController::class,'index']);
Route::get('/contact', [SiteController::class,'contact']);


