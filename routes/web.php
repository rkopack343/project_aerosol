<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OverlayController;



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

Route::get('/overlay/', [OverlayController::class, 'landing']);
Route::get('/overlay/view/{code}', [OverlayController::class, 'codeView']);
Route::get('/overlay/generate/{bottom}/{top}', [OverlayController::class, 'codeGenerate']);
