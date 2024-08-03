<?php
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\MessagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('applicants', [ApplicantController::class, 'index'])->name('applicants.index');
Route::get('applicants/{applicantID}', [ApplicantController::class, 'show'])->name('applicants.show');
Route::post('applicants', [ApplicantController::class, 'store'])->name('applicants.store');


Route::get('messages', [MessagesController::class, 'index'])->name('messages.index');
Route::get('messages/{messageID}', [MessagesController::class, 'show'])->name('messages.show');
Route::post('messages', [MessagesController::class, 'store'])->name('messages.store');


Route::get('products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductsController::class, 'show'])->name('products.show');
Route::post('products', [ProductsController::class, 'store'])->name('products.store');
Route::put('products/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');
