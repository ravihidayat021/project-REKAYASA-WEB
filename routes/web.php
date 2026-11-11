<?php

use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/profile', [MahasiswaController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index']) ->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm']) ->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login']) ->name('admin.login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout']) ->name('admin.logout');

Route::prefix('admin')->middleware('auth')->group(function () {
   Route::get('/', function () {
        return view('admin.home');
    })->name('admin.dashboard');


    Route::get('/projects/pdf', [AdminProjectController::class, 'cetakPDF'])
        ->name('projects.pdf');

    Route::resource('projects', AdminProjectController::class);

    Route::get('/logout', function () {
        return redirect()->route('home');
    })->name('logout');

});