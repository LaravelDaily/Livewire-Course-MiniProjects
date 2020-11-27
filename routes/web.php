<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('dropdown', [ProjectController::class, 'dropdowns'])
    ->name('dropdowns');
Route::post('dropdown', [ProjectController::class, 'postDropdowns'])
    ->name('dropdowns.submit');

Route::get('parentchildren', [ProjectController::class, 'parentchildren'])
    ->name('parentchildren');
Route::post('parentchildren', [ProjectController::class, 'postParentchildren'])
    ->name('parentchildren.submit');

Route::get('editmodal', [ProjectController::class, 'editmodal'])
    ->name('editmodal');

Route::get('autorefresh', [ProjectController::class, 'autorefresh'])
    ->name('autorefresh');

Route::get('slug', [ProjectController::class, 'slug'])
    ->name('slug');
