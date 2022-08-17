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

Route::get('/usuarios', [UserController::class,'index'])->name('members.index');
Route::get('/usuarios/create', [UserController::class,'create'])->name('members.create');
Route::get('/usuarios/{user}/edit', [UserController::class,'edit'])->name('members.edit');
Route::get('/usuarios/{user}/show', [UserController::class,'show'])->name('members.show');
Route::post('/usuarios', [UserController::class,'store'])->name('members.strore');
Route::put('/usuarios/{user}', [UserController::class,'update'])->name('members.update');
Route::delete('/usuarios/{user}', [UserController::class,'destroy'])->name('members.destroy');

require __DIR__.'/auth.php';
