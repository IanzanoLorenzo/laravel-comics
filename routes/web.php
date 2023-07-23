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
    $comics = config('db.comics');
    $bottomMenu = config('db.listBottomMenu');
    $socials = config('db.socials');
    $sectionBlue = config('db.sections');
    return view('home', compact('comics', 'bottomMenu', 'socials', 'sectionBlue'));
})->name('home');

Route::get('/comic', function(){
    $bottomMenu = config('db.listBottomMenu');
    $socials = config('db.socials');
    return view('comic-details', compact('bottomMenu', 'socials'));
})->name('comic');