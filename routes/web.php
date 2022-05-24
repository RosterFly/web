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
    return view('public.index');
})->name('public.index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/password-reminder', function () {
    return view('reminder');
})->name('password-reminder');

Route::get('/status', function (){
    return view('public.status');
})->name('public.status');

Route::get('locale/{lang}', function ($locale){
    session()->put('locale', $locale);
    return Redirect::back();
});
