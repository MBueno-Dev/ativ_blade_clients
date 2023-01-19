<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    return view('clients');
});

Route::post('/clients/store', [ClientController::class, 'store']);
Route::get('/clients/show/{client}', [ClientController::class, 'show']);
Route::get('/clients/name/{name}', [ClientController::class, 'show_name']);
Route::get('/clients/search/{text}', [ClientController::class, 'search_text']);
Route::get('/clients/bills/{client}', [ClientController::class, 'search_bills_client']);
Route::get('/bills/expensive/{value}', [ClientController::class, 'search_bills_exp']);
Route::get('/bills/between/{value1}/{value2}', [ClientController::class, 'search_bills_vals']);