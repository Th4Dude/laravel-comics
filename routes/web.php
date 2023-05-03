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

    $data = [
        'toLinks' => ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'],
        'comics' => config('comics')
    ];

    return view('home', $data);
})->name('home');






Route::get('/comic/{index}', function ($index) {

    $data = [
        'toLinks' => ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP']
    ];

    $comics = config('comics');
    $comic = $comics[$index];

    return view('comic', ['comic' => $comic], $data);
});