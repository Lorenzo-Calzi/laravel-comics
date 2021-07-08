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

    $comics = config('comics');
    return view('home', compact('comics'));

    $comics = config('comics');
    return view('characters', compact('comics'));

    $comics = config('comics');
    return view('movies', compact('comics'));

    $comics = config('comics');
    return view('tv', compact('comics'));

    $comics = config('comics');
    return view('games', compact('comics'));

    $comics = config('comics');
    return view('collectibles', compact('comics'));

    $comics = config('comics');
    return view('videos', compact('comics'));

    $comics = config('comics');
    return view('fans', compact('comics'));

    $comics = config('comics');
    return view('news', compact('comics'));

});
