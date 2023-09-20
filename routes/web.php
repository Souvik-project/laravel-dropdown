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

/*Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\DropdownController;

Route::get('/create', [DropdownController::class, 'create'])->name('create');
Route::post('/store', [DropdownController::class, 'store'])->name('store');
Route::get('/index', [DropdownController::class, 'index'])->name('index');
