<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BackendPostController;
use App\Http\Controllers\BackendComentController;
use App\Http\Controllers\FrontendController;
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

Route::get('/backend', [BackendController::class, 'index'])->name('backend.index');
Route::get('/backend/index', [BackendController::class, 'index'])->name('backend.index');

Route::resource('backend/post', BackendPostController::class,['names' => 'backend.post']);

Route::resource('backend/coment', BackendComentController::class,['names' => 'backend.coment']);

Route::get('backend/coment/create/{idcoment}', [BackendComentController::class, 'createComentPo'])->name('backend.ticket.createcomentpo');

Route::get('backend/coment/{idpost}/coment', [BackendComentController::class, 'showComents'])->name('backend.ticket.showcoments');

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/frontend', [FrontendController::class, 'index'])->name('frontend.index');

Route::get('/frontend/{idpost}', [FrontendController::class, 'show'])->name('frontend.show');