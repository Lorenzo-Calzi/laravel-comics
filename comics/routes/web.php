<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/comics', function () {

    $comics = config('comics');
    return view('comics.index', compact('comics'));

})->name('comics');


Route::get('comics/{id}', function ($id) {

    $comics = config('comics');

    if(is_numeric($id) && $id < count($comics) && $id >= 0) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else{
        abort(404);
    }

})->name('comic');