<?php

use App\Http\Controllers\FlightsController;
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
Route::view('/', 'public.index')->name('public.index');
//Route::get('/login', function () {return view('auth.login');})->name('auth.login');
//Route::get('/password-reminder', function () {return view('auth.reminder');})->name('auth.password-reminder');
Route::view('/status', 'status')->name('status');
Route::get('/signup', function (){return view('auth.signup');})->name('auth.signup');
Route::get('/maintenance', function (){return view('public.maintenance');})->name('maintenance');

//Lang Route
Route::get('locale/{lang}', function ($locale){session()->put('locale', $locale);return Redirect::back();});
Route::view('flights/edit-flight', 'flight_edit')->name('edit.flight');

Route::group([
    'middleware' => ['auth','web'],
], function(){
    Route::view('/home', 'index')->middleware('auth')->name('user.index');
    Route::view('/edit-profile', 'profile_edit')->middleware('auth')->name('edit.profile');
    Route::get('/flights', [FlightsController::class, 'index'])->middleware('auth')->name('flights');
    Route::get('/flights/new-flight', [FlightsController::class, 'create'])->middleware('auth')->name('new.flight');
    Route::post('/flights/new-flight', [FlightsController::class, 'store'])->middleware('auth')->name('new.flight.store');
});

//User Routes
