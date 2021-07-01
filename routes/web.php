<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [InstructionController::class, 'index'])
    ->name('index');

Route::get('create', [InstructionController::class, 'create'])
    ->name('create');
    
Route::post('store', [InstructionController::class, 'store'])
    ->name('store');

Route::get('/show/{instruction}', [InstructionController::class, 'show'])
    ->name('show');

Route::get('edit/{instruction}', [InstructionController::class, 'edit'])
    ->name('edit');

Route::post('update/{instruction}', [InstructionController::class, 'update'])
    ->name('update');

Route::post('destroy/{instruction}', [InstructionController::class, 'destroy'])
    ->name('destroy');

