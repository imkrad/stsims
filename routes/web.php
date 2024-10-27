<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['2fa','auth','verified'])->group(function () {
    Route::resource('/profile', App\Http\Controllers\Auth\ProfileController::class);
});

Route::middleware(['2fa','auth','verified','is_active','menu'])->group(function () {
    Route::get('/prospectus', [App\Http\Controllers\DashboardController::class, 'prospectus']);
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/search', [App\Http\Controllers\DashboardController::class, 'search']);
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::post('/import', [App\Http\Controllers\ImportController::class, 'store']);
    Route::get('/import/qualifiers', [App\Http\Controllers\ImportController::class, 'qualifiers']);

    Route::resource('/executive', App\Http\Controllers\ExecutiveController::class);
    Route::resource('/references', App\Http\Controllers\ReferenceController::class);
    Route::resource('/management', App\Http\Controllers\ManagementController::class);

    Route::resource('/qualifiers', App\Http\Controllers\Operation\QualifierController::class);
    Route::resource('/scholars', App\Http\Controllers\Operation\ScholarController::class);
    Route::resource('/schools', App\Http\Controllers\Operation\SchoolController::class);
    Route::resource('/enrollments', App\Http\Controllers\Operation\EnrollmentController::class);
    Route::resource('/benefits', App\Http\Controllers\Operation\BenefitController::class);
    Route::resource('/insights', App\Http\Controllers\Operation\InsightController::class);
    Route::resource('/reports', App\Http\Controllers\Operation\ReportController::class);
    Route::resource('/others', App\Http\Controllers\Operation\OtherController::class);
});

require __DIR__.'/auth.php';
