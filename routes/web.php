<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PagesController::class, 'home']);
Route::get('/apropos', [PagesController::class, 'apropos']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/show/{id}', [PagesController::class, 'show']);
Route::get('/create', [ProductController::class, 'create']);
Route::post('/saveproduct', [ProductController::class, 'saveproduct']);
Route::delete('/deleteproduct/{id}', [ProductController::class, 'deleteproduct']);
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct']);

