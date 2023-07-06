<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LoginForm;
use App\Http\Livewire\RegisterForm;
use App\Http\Livewire\Products\Form as ProductForm;
use App\Http\Livewire\Products\Table as ProductTable;
use App\Http\Livewire\Products\Details as ProductDetails;
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
Route::get('/',LoginForm::class);
Route::get('/register',RegisterForm::class);

Route::prefix('products')->middleware(['auth'])->group(function () {
    Route::get('/form',ProductForm::class);
    Route::get('/table',ProductTable::class);
    Route::get('{product_id}/details',ProductDetails::class);
});
