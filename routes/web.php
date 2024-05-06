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

Route::get('/', function () {

    return view('home');
});

Route::get('/playlist', function () {

    $data = [
        'message'=> 'more music more happiness',
        'singers'=> ['Coldplay','Imagine Dragon','Bon Jovi','Eminem','Linkin Park']
        
    ] ;

    return view('playlist', $data);
});

