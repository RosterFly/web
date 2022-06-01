<?php

use Illuminate\Support\Facades\Redirect;
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

//Public Routes
Route::get('/', function () {return view('public.index');})->name('public.index');
//Route::get('/login', function () {return view('auth.login');})->name('auth.login');
Route::get('/password-reminder', function () {return view('auth.reminder');})->name('auth.password-reminder');
Route::get('/status', function (){return view('status');})->name('status');
Route::get('/signup', function (){return view('auth.signup');})->name('auth.signup');
Route::get('/maintenance', function (){return view('public.maintenance');})->name('maintenance');

//Lang Route
Route::get('locale/{lang}', function ($locale){session()->put('locale', $locale);return Redirect::back();});

//User Routes
Route::get('/home', function(){return view('index');})->name('user.index');
