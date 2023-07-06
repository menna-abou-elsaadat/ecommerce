<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LoginForm;
use App\Http\Livewire\RegisterForm;
use App\Http\Livewire\Products\Form as ProductForm;
use App\Http\Livewire\Products\Table as ProductTable;
use App\Http\Livewire\Products\Details as ProductDetails;
use App\Http\Livewire\Cart;
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
Route::get('/',LoginForm::class)->name('login');
Route::get('/register',RegisterForm::class);
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});

Route::prefix('products')->middleware(['auth'])->group(function () {
    Route::get('/form',ProductForm::class);
    Route::get('/table',ProductTable::class);
    Route::get('{product_id}/details',ProductDetails::class);
});

Route::prefix('cart')->middleware(['auth'])->group(function () {
    Route::get('/details',Cart::class);
});
