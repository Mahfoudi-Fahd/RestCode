<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;


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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::controller(MenuController::class)->group(function(){

    Route::post('menu/store','store')->name('menu.store');
    Route::get('/dashboard','index')->name('dashboard');
    Route::get('menu/edit/{id}','edit')->name('menu.edit');
    Route::put('menu/update/{id}','update')->name('menu.update');
    Route::get('menu/delete/{id}','destroy')->name('menu.delete');
    Route::get('menu/show/{id}','show')->name('menu.show');
    Route::get('/','welcome');

});