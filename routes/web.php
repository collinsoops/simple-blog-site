<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Indexcontroller;

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

//Route::get('/','Homecontroller@index');
//Route::get('/', [Homecontroller::class, 'index']);
Route::get('/', [\App\Http\Controllers\PagesContoller::class, 'home']);
Route::get('/home', [\App\Http\Controllers\PagesContoller::class, 'home']);
Route::get('/services', [\App\Http\Controllers\PagesContoller::class, 'services']
);
Route::get('/contact', [\App\Http\Controllers\PagesContoller::class, 'contact']);




Route::get('/hello/{name}', function ($name) {
    return view('hello',['name'=>$name]);
});
Route::get('good/{new}',[Indexcontroller::class,'index']);

Route::get('/wev/{id}',[Homecontroller::class,'index']
);
Route::get('/user/{name}', [Indexcontroller::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
