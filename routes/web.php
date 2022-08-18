<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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
Route::post('/usuarios', [UserController::class,'store'])->name('users.strore');
Route::put('/usuarios/{user}', [UserController::class,'update'])->name('users.update');
Route::delete('/usuarios/{user}', [UserController::class,'destroy'])->name('users.destroy');

require __DIR__.'/auth.php';
