<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GroupController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\RegimentController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\GroupStudentController;
use App\Http\Controllers\TeacherGroupAssociationController;
use App\Http\Controllers\GroupDisciplineAssociationController;
use App\Http\Controllers\TeacherDisciplineAssociationController;


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
});

/*
Route::prefix('/disciplinas')->group(function(){
    Route::get('/criar', [DisciplineController::class, 'create'])->name('discipline.create');
    Route::get('/editar', [DisciplineController::class, 'edit'])->name('discipline.edit');
    Route::get('/', [DisciplineController::class, 'index'])->name('discipline.index');
    Route::post('/', [DisciplineController::class, 'store'])->name('discipline.store');
    Route::get('/{id}', [DisciplineController::class, 'show'])->name('discipline.show');
    Route::put('/{id}', [DisciplineController::class, 'update'])->name('discipline.update');
    Route::delete('/{id}', [DisciplineController::class, 'destroy'])->name('discipline.destroy');
});
*/

require __DIR__.'/auth.php';
