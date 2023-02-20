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
    return view('partials.current_series', compact('comics'));
});

Route::get('/single/{id}', function ($id) {
    $comics = config('comics');
    $comic = '';
    foreach($comics as $key => $item){
    
        if($id == $key){
            $comic = $item;
        }
    };
    
    return view('partials.single', compact('comics','comic'));
})->name('single');