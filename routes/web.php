<?php

use App\Http\Controllers\AircraftModelsController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\HangarsController;
use App\Http\Controllers\IndexController;
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
Route::view('/status', 'status')->name('status');
Route::get('/signup', function (){return view('auth.signup');})->name('auth.signup');
Route::get('/maintenance', function (){return view('public.maintenance');})->name('maintenance');

//Lang Route
Route::get('locale/{lang}', function ($locale){session()->put('locale', $locale);return Redirect::back();});

Route::group([
    'middleware' => ['auth','web'],
], function(){
    Route::get('/home', [IndexController::class, 'index'])->name('user.index');
    Route::view('/edit-profile', 'profile_edit')->name('edit.profile');

    Route::group(['prefix' => 'flights'], function () {
        Route::get('/', [FlightsController::class, 'index'])->name('flights');
        Route::get('/new', [FlightsController::class, 'create'])->name('new.flight');
        Route::post('/new', [FlightsController::class, 'store'])->name('new.flight.store');
        Route::get('/edit/{flight}', [FlightsController::class, 'edit'])->name('edit.flight');
        Route::put('/edit/{flight}', [FlightsController::class, 'update'])->name('edit.flight.update');
        Route::delete('/delete/{id}', [FlightsController::class, 'destroy'])->name('delete.flight');
    });

    Route::group(['prefix' => 'acftmodels'], function () {
        Route::get('/', [AircraftModelsController::class, 'index'])->name('acftmodels');
        Route::get('/new', [AircraftModelsController::class, 'create'])->name('new.acftmodel');
        Route::post('/new', [AircraftModelsController::class, 'store'])->name('new.acftmodel.store');
    });

    Route::group(['prefix' => 'hangar'], function(){
        Route::get('/', [HangarsController::class, 'index'])->name('hangar');
        Route::get('/new', [HangarsController::class, 'create'])->name('new.hangar');
        Route::post('/new', [HangarsController::class, 'store'])->name('new.hangar.store');
        Route::get('/edit/{hangar}', [HangarsController::class, 'edit'])->name('edit.hangar');
        Route::put('/edit/{hangar}', [HangarsController::class, 'update'])->name('edit.hangar.update');
        Route::delete('/delete/{id}', [HangarsController::class, 'destroy'])->name('delete.hangar');
    });

});
