<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\SuggestionController;
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
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/suggestions', [SuggestionController::class, 'index'])->name('suggestions');
Route::get('/reactions', [ReactionController::class, 'index'])->name('reactions');

require __DIR__.'/auth.php';
