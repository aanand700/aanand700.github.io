<?php

use App\Http\Controllers\DRPPController;
use App\Http\Controllers\EBCController;
use App\Http\Controllers\PDIController;
use App\Http\Controllers\SBRController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\UserDetailsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/index', function () {
//     return view('index');
// });

Auth::routes();
// Route::get('/dashboard', [StaticPagesController::class, 'showDashboard'])->name('dashboard');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/', [StaticPagesController::class, 'showDashboard'])->name('home');
    Route::get('/user/details', [UserDetailsController::class, 'showUserDetails'])->name('show.user.details');
    Route::post('/submit-user-details', [UserDetailsController::class, 'submitDetails']);

    Route::post('/store/ebc', [EBCController::class, 'storeEBC'])->name('store.ebc');
    Route::post('/store/drpp', [DRPPController::class, 'storeDRPP'])->name('store.drpp');
    Route::post('/store/sbr', [SBRController::class, 'storeSBR'])->name('store.sbr');
    Route::post('/store/pdi', [PDIController::class, 'storePDI'])->name('store.pdi');

});
