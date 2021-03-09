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

/**
 * TODO
 * Route::view('/{path?}', 'app');
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/',[OverlayController::class, 'test']);

Route::get('/overlay/', [OverlayController::class, 'landing']);
Route::get('/overlay/view/{code}', [OverlayController::class, 'codeView'])->name('overlay.view');
Route::post('/overlay/generate/', [OverlayController::class, 'codeGenerate'])->name('overlay.generate');
