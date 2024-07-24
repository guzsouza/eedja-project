<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserRole;
use App\Http\Middleware\CheckSpreadsheetOwner;


// Route::get('/teste', [Controller::class, 'teste']);

//viewWelcome
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/error', function(){
    return view('httpError');
})->name('error');

    //Registro
Route::get('/registro', function(){
    return redirect()->route('register');
});

//middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [PlanningController::class, 'index'])->name('dashboard');

    Route::middleware(CheckUserRole::class . ':staff')->group(function(){
        Route::get('/planilha/{id}', [SpreadsheetController::class, 'showById'])->name('spreadsheet.showById');
        Route::get('/planilha', [SpreadsheetController::class, 'show'])->name('spreadsheet.show');
        Route::get('/planejamentos', [PlanningController::class, 'show'])->name('planning.show');
        Route::post('/planilha', [SpreadsheetController::class, 'store'])->name('spreadsheet.store');

        Route::middleware(CheckSpreadsheetOwner::class)->group(function() {
            //Planilha
            Route::put('/planilha/{id}', [SpreadsheetController::class, 'update'])->name('spreadsheet.update');
            //Planejamentos
            Route::post('/planilha/{id}/planejamentos', [PlanningController::class, 'store'])->name('planning.store');
            Route::put('/planilha/{id}/planejamentos/{planning_id}', [PlanningController::class, 'update'])->name('planning.update');
            Route::delete('/planilha/{id}/planejamentos/{planning_id}', [PlanningController::class, 'destroy'])->name('planning.delete');
        });
    });

    //Rotas somente para adminstradores
    Route::middleware(CheckAdminRole::class .':admin')->group(function(){
        Route::resource('disciplinas', DisciplineController::class);
        Route::resource('grupos', GroupController::class);
        Route::resource('turnos', ShiftController::class);
        Route::resource('estudantes', StudentController::class);
        Route::resource('professores', TeacherController::class);

        //Grupos-e-disciplinas
        Route::prefix('/grupos-disciplinas')->group(function(){
            Route::get('/criar', [GroupDisciplineAssociationController::class, 'create'])->name('groupDiscipline.create');
            Route::get('/editar', [GroupDisciplineAssociationController::class, 'edit'])->name('groupDiscipline.edit');
            Route::get('/', [GroupDisciplineAssociationController::class, 'index'])->name('groupDiscipline.index');
            Route::post('/', [GroupDisciplineAssociationController::class, 'store'])->name('groupDiscipline.store');
            Route::get('{group_id}/{discipline_id}', [GroupDisciplineAssociationController::class, 'show'])->name('groupDiscipline.show');
            Route::put('{group_id}/{discipline_id}', [GroupDisciplineAssociationController::class, 'update'])->name('groupDiscipline.update');
            Route::delete('{group_id}/{discipline_id}', [GroupDisciplineAssociationController::class, 'destroy'])->name('groupDiscipline.destroy');
        });

        //Grupos-e-alunos
        Route::prefix('/grupos-alunos')->group(function(){
            Route::get('/criar', [GroupStudentController::class, 'create'])->name('groupStudent.create');
            Route::get('/editar', [GroupStudentController::class, 'edit'])->name('groupStudent.edit');
            Route::get('/', [GroupStudentController::class, 'index'])->name('groupStudent.index');
            Route::post('/', [GroupStudentController::class, 'store'])->name('groupStudent.store');
            Route::get('{group_id}/{student_id}', [GroupStudentController::class, 'show'])->name('groupStudent.show');
            Route::put('{group_id}/{student_id}', [GroupStudentController::class, 'update'])->name('groupStudent.update');
            Route::delete('{group_id}/{student_id}', [GroupStudentController::class, 'destroy'])->name('groupStudent.destroy');
        });

        //Professores-e-disciplinas
        Route::prefix('/professores-disciplinas')->group(function(){
            Route::get('/criar', [TeacherDisciplineAssociationController::class, 'create'])->name('teacherDiscipline.create');
            Route::get('/editar', [TeacherDisciplineAssociationController::class, 'edit'])->name('teacherDiscipline.edit');
            Route::get('/', [TeacherDisciplineAssociationController::class, 'index'])->name('teacherDiscipline.index');
            Route::post('/', [TeacherDisciplineAssociationController::class, 'store'])->name('teacherDiscipline.store');
            Route::get('{teacher_id}/{discipline_id}', [TeacherDisciplineAssociationController::class, 'show'])->name('teacherDiscipline.show');
            Route::put('{teacher_id}/{discipline_id}', [TeacherDisciplineAssociationController::class, 'update'])->name('teacherDiscipline.update');
            Route::delete('{teacher_id}/{discipline_id}', [TeacherDisciplineAssociationController::class, 'destroy'])->name('teacherDiscipline.destroy');
        });


        //Professores-e-disciplinas
        Route::prefix('/professores-grupos')->group(function(){
            Route::get('/criar', [TeacherGroupAssociationController::class, 'create'])->name('teacherGroup.create');
            Route::get('/editar', [TeacherGroupAssociationController::class, 'edit'])->name('teacherGroup.edit');
            Route::get('/', [TeacherGroupAssociationController::class, 'index'])->name('teacherGroup.index');
            Route::post('/', [TeacherGroupAssociationController::class, 'store'])->name('teacherGroup.store');
            Route::get('{teacher_id}/{group_id}', [TeacherGroupAssociationController::class, 'show'])->name('teacherGroup.show');
            Route::put('{teacher_id}/{group_id}', [TeacherGroupAssociationController::class, 'update'])->name('teacherGroup.update');
            Route::delete('{teacher_id}/{group_id}', [TeacherGroupAssociationController::class, 'destroy'])->name('teacherGroup.destroy');
        });
    });
});

require __DIR__.'/auth.php';
