<?php

use App\Http\Controllers\ComicController;
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
    $socials = config('socials');
    $links = config('link');
    $footer = config('footerlink');
    $banner = config('banner');
    return view('welcome', compact('socials', 'links', 'footer', 'banner'));
});

Route::resource('comics', ComicController::class);
