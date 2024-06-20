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
use App\Http\Controllers\GroupStudentsController;
use App\Http\Controllers\TeacherGroupAssociationController;
use App\Http\Controllers\GroupDisciplineAssociationController;
use App\Http\Controllers\TeacherDisciplineAssociationController;

Route::apiResource('disiciplinas', DisciplineController::class);
Route::apiResource('grupos-disciplinas', GroupDisciplineAssociationController::class);
Route::apiResource('grupos', GroupController::class);
Route::apiResource('grupos-estudantes', GroupStudentsController::class);
Route::apiResource('planejamentos', PlanningController::class);
Route::apiResource('regimentos', RegimentController::class);
Route::apiResource('turnos', ShiftController::class);
Route::apiResource('estudantes', StudentController::class);
Route::apiResource('professores-disciplinas', TeacherDisciplineAssociationController::class);
Route::apiResource('professores-grupos', TeacherGroupAssociationController::class);
Route::apiResource('professores', TeacherController::class);
