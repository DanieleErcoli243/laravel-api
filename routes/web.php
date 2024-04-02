<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TypeController as AdminTypesController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectsController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
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

//rotta per la home dell'utente 
Route::get('/', GuestHomeController::class)->name('guest.home');

// rotte raggruppate per l'amministratore

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {

    // rotta per la home dell'amministratore
    Route::get('/', AdminHomeController::class)->name('home');

    // rotte necessarie per il progetto
    Route::get('/projects', [AdminProjectsController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [AdminProjectsController::class, 'create'])->name('projects.create');
    Route::get('/projects/{project}', [AdminProjectsController::class, 'show'])->name('projects.show');
    Route::post('/projects', [AdminProjectsController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [AdminProjectsController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [AdminProjectsController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [AdminProjectsController::class, 'destroy'])->name('projects.destroy');

    // rotte per i tipi
    Route::get('/types', [AdminTypesController::class, 'index'])->name('types.index');
    Route::get('/types/create', [AdminTypesController::class, 'create'])->name('types.create');
    Route::post('/types', [AdminTypesController::class, 'store'])->name('types.store');
    Route::get('/types/{type}/edit', [AdminTypesController::class, 'edit'])->name('types.edit');
    Route::put('/types/{type}', [AdminTypeController::class, 'update'])->name('types.update');
    Route::delete('/types/{type}', [AdminTypesController::class, 'destroy'])->name('types.destroy'); 

    

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
