<?php

use App\Http\Controllers\AuditLogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MainHeadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::resource('main-heads', MainHeadController::class);
    Route::get('/main-heads', [MainHeadController::class, 'index'])->name('main-heads.index');
    Route::post('/main-heads', [MainHeadController::class, 'create'])->name('main-heads.create');
    Route::get('/main-heads{id}/edit', [MainHeadController::class, 'edit'])->name('main-heads.edit');
    Route::resource('main-heads', MainHeadController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('audit-logs', AuditLogController::class);

    Route::get('/select-company', [App\Http\Controllers\CompanyController::class, 'select'])->middleware('auth')->name('select-company');
    Route::post('/select-company', [App\Http\Controllers\CompanyController::class, 'storeSelection'])->middleware('auth')->name('select-company.store');

    Route::resource('users', UserController::class);
    Route::resource('groups', GroupController::class);


    // Route::middleware(['auth'])->group(function () {
    //     Route::get('/register-user', [UserController::class, 'create'])->name('user.create');
    //     Route::get('/register-user', [UserController::class, 'index'])->name('user.index');
    //     Route::post('/register-user', [UserController::class, 'store'])->name('internal.register.store');
    // });

});

require __DIR__.'/auth.php';
