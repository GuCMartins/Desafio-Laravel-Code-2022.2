<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::middleware(['auth', 'verified'])->group(function () {

    // >>> insira suas rotas aqui !!!!! <<<
    
    Route::get('/', function () {
        return view('dashboard');
    })/*->middleware('auth')*/;
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })/*->middleware(['auth'])*/->name('dashboard');
    
});


Route::get('/dale', function() {
    return view('dale');
});

Route::get('/usuarios', [UserController::class,'index'])->name('users.index');
Route::get('/usuarios/create', [UserController::class,'create'])->name('users.create');
Route::get('/usuarios/{user}/edit', [UserController::class,'edit'])->name('users.edit');
Route::get('/usuarios/{user}/show', [UserController::class,'show'])->name('users.show');
Route::post('/usuarios', [UserController::class,'store'])->name('users.store');
Route::put('/usuarios/{user}', [UserController::class,'update'])->name('users.update');
Route::delete('/usuarios/{user}', [UserController::class,'destroy'])->name('users.destroy');

Route::get('/produtos', [ProductController::class,'index'])->name('products.index');
Route::get('/produtos/create', [ProductController::class,'create'])->name('products.create');
Route::get('/produtos/{product}/edit', [ProductController::class,'edit'])->name('products.edit');
Route::get('/produtos/{product}/show', [ProductController::class,'show'])->name('products.show');
Route::post('/produtos', [ProductController::class,'store'])->name('products.store');
Route::put('/produtos/{product}', [ProductController::class,'update'])->name('products.update');
Route::delete('/produtos/{product}', [ProductController::class,'destroy'])->name('products.destroy');


require __DIR__.'/auth.php';
