<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CommunitiesController;
use Illuminate\Support\Facades\Route;
use App\Models\Account;

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

Route::get('/about', function () {
    return view('about', [
        'title'=> 'About',
        'name'=> 'Annas Ismail',
        'email' => 'annas_ismail@yahoo.com'
    ]);
});

Route::get('/sign-in', function () {
    return view('sign-in', ['title'=> 'Sign In']);
});

Route::get('/sign-up', function () {
    return view('sign-up' , ['title'=> 'Sign Up']);
});

Route::get('/profile', function () {
    return view('profile' , ['title'=> 'Profile']);
});

Route::get('/community', [CommunitiesController::class, 'index']); 

Route::get('/detail-community{communities:Slug}', [CommunitiesController::class, 'communityDetail']); 

Route::get('update-account{account:Slug}', [AccountController::class, 'show']); 