<?php

use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('administrator')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'showAdministratorDashboard'])->name('admin.dashboard');

    Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('users/show/{id}', [UserController::class, 'show'])->name('admin.users.show');
});
