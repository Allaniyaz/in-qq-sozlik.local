<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DictionaryController;
use Illuminate\Support\Facades\Artisan;

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
    return view('index');
})->name('dictionary.index');

Route::post('/', [DictionaryController::class, 'search'])->name('dictionary.search');

Route::get('/assets/css/style.css', function () {
    Artisan::call('storage:link');
});
