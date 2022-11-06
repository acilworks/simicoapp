<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OdcMainController;
use App\Http\Controllers\PortMainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchOdcController;

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

Route::get('/', function () {
    return view('login.index', [
        "title" => "Sistem Informasi Main Core ODC"
    ]);
});

    

// Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', function() 
{
    return view('home.index', [
        'title' => 'Home']);
})->middleware('auth');

Route::get('/portmain', [PortMainController::class, 'index'])->middleware('auth');
Route::get('/searchodc', [SearchOdcController::class, 'index'])->middleware('auth');



Route::get('/odcmain', [OdcMainController::class, 'index'])->middleware('auth');
Route::post('odcmain', [OdcMainController::class, 'import'])->name('odcmain.import')->middleware('auth');




