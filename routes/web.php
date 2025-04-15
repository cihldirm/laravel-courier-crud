<?php

use App\Http\Controllers\CourierController;
use App\Http\Livewire\CouriersComponent;
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

Route::get('/couriers', [CourierController::class, 'index'])->name('couriers.index');

Route::get('couriers-crud', CouriersComponent::class);
