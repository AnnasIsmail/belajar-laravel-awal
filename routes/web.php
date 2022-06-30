<?php

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

Route::get('/my-community', function () {
    
    $account = [
        [
            "RiotId"=> "Forgotten",
            "Tagline"=> "MLG",
            "Rank"=> "Silver 1",
            "Username"=> "kolangxkaling",
            "Password"=> "asuna321",
        ],
        [
            "RiotId"=> "JOKOWIJAGOAN",
            "Tagline"=> "Pasar",
            "Rank"=> "Unranked",
            "Username"=> "annas2111",
            "Password"=> "Annas211112345",
        ],
        [
            "RiotId"=> "JOKOWIJAGOAN",
            "Tagline"=> "WIBU",
            "Rank"=> "Unranked",
            "Username"=> "annas2110",
            "Password"=> "Annas211012345",
        ],
    ];

    return view('my-community' , [
        'title'=> 'My Community',
        'account' => $account
    ]);

});

Route::get('update-account{slug}', function ($slug) {

    $account = [
        [
            "RiotId"=> "Forgotten",
            "Tagline"=> "MLG",
            "Rank"=> "Silver 1",
            "Username"=> "kolangxkaling",
            "Password"=> "asuna321",
        ],
        [
            "RiotId"=> "JOKOWIJAGOAN",
            "Tagline"=> "Pasar",
            "Rank"=> "Unranked",
            "Username"=> "annas2111",
            "Password"=> "Annas211112345",
        ],
        [
            "RiotId"=> "JOKOWIJAGOAN",
            "Tagline"=> "WIBU",
            "Rank"=> "Unranked",
            "Username"=> "annas2110",
            "Password"=> "Annas211012345",
        ],
    ];

    $dataAccount = [];
    foreach($account as $data){
        if($data["Username"] == $slug){
            $dataAccount = $data;
        }
    }

    return view('update-account' , [
        'title'=> 'Update Account',
        'data'=> $dataAccount,
    ]);
});