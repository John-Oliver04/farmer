<?php

use App\Http\Controllers\DamagesController;
use Illuminate\Support\Facades\Route;
use App\Models\Damages;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/dashboard-register',[DamagesController::class,'store']
)->middleware(['auth'])->name('dashboard-register');

Route::post('/dashboard-addimage',[DamagesController::class,'addimage']
)->middleware(['auth'])->name('dashboard-addimage');



require __DIR__.'/auth.php';
