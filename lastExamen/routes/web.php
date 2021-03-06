<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\SeederController;
use App\Http\Controllers\MailController;
//use App\Http\Controllers\BiografiaController;

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

//Route::get('/', InicialController::class);
//Route::get('/registro', [InicialController::class,'registro']);

Route::get('/', MainController::class);//controladora de la página principal
Route::get('/migraciones',MigrationController::class);
Route::get('/seeders', SeederController::class);
Route::get('/mail', MailController::class);
Route::get('/savesuggestion', [MailController::class, 'saveSuggest']);
