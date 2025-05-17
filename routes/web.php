<?php

use App\Http\Controllers\AuditLogController;
use App\Http\Controllers\Registration\BankController;
use App\Http\Controllers\Registration\CityController;
use App\Http\Controllers\Registration\CompanyController;
use App\Http\Controllers\Registration\CompanySelectionController;
use App\Http\Controllers\Registration\GroupController;
use App\Http\Controllers\Registration\MainHeadController;
use App\Http\Controllers\Registration\ProfileController;
use App\Http\Controllers\Registration\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\Registration\ProjectController;
use App\Http\Controllers\Registration\ResidentialController;
use App\Http\Controllers\Registration\SchedulePeriodController;
use App\Http\Controllers\Registration\CastController;
use App\Http\Controllers\Registration\WarehouseController;

Route::post('/locale', LocaleController::class)->name('locale.change');


// Route::get('/{locale?}', function ($locale = null) {
//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//     }

//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth', 'company.selected'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/select-company', [CompanySelectionController::class, 'showForm'])->name('company.select.form');
    Route::post('/select-company', [CompanySelectionController::class, 'storeSelection'])->name('company.select.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::resource('main-heads', MainHeadController::class);
    // Route::get('/main-heads', [MainHeadController::class, 'index'])->name('main-heads.index');
    // Route::post('/main-heads', [MainHeadController::class, 'create'])->name('main-heads.create');
    // Route::get('/main-heads{id}/edit', [MainHeadController::class, 'edit'])->name('main-heads.edit');
    Route::resource('main-heads', MainHeadController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('audit-logs', AuditLogController::class);

    Route::resource('users', UserController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('cities', CityController::class);
    Route::resource('residentials', ResidentialController::class);
    Route::resource('banks', BankController::class);
    Route::resource('periods', SchedulePeriodController::class);
    Route::resource('casts', CastController::class);
    Route::resource('warehouses', WarehouseController::class);

});

require __DIR__.'/auth.php';
