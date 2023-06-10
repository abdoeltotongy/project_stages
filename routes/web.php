<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StageController;

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
    return view('project.create');
});

Route::get('stage',[StageController::class, 'index'])->name('stage');
Route::post('stage',[StageController::class, 'store']) ;
Route::post('stage/update', [StageController::class, 'update'])->name('stage.update');
Route::get('stage/delete/{stage}', [StageController::class, 'delete']);


Route::resource('project', ProjectController::class );
