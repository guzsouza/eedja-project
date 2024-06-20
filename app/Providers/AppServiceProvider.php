<?php

namespace App\Providers;

use App\Models\Discipline;
use Illuminate\Support\ServiceProvider;

use App\Services\DisciplineService;
use App\Services\GroupDisciplineAssociationService;
use App\Services\GroupService;
use App\Services\GroupStudentService;
use App\Services\PlanningService;
use App\Services\RegimentService;
use App\Services\ShiftService;
use App\Services\StudentService;
use App\Services\TeacherDisciplineAssociationService;
use App\Services\TeacherGroupAssociationService;
use App\Services\TeacherService;

class AppServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(DisciplineService::class, function($app){
            return new DisciplineService();
        });

        $this->app->singleton(GroupDisciplineAssociationService::class, function($app){
            return new GroupDisciplineAssociationService();
        });

        $this->app->singleton(GroupService::class, function($app){
            return new GroupService();
        });

        $this->app->singleton(GroupStudentService::class, function($app){
            return new GroupStudentService();
        });

        $this->app->singleton(PlanningService::class, function($app){
            return new PlanningService();
        });

        $this->app->singleton(RegimentService::class, function($app){
            return new RegimentService();
        });

        $this->app->singleton(ShiftService::class, function($app){
            return new ShiftService();
        });

        $this->app->singleton(StudentService::class, function($app){
            return new StudentService();
        });

        $this->app->singleton(TeacherService::class, function($app){
            return new TeacherService();
        });

        $this->app->singleton(TeacherDisciplineAssociationService::class, function($app){
            return new TeacherDisciplineAssociationService();
        });

        $this->app->singleton(TeacherGroupAssociationService::class, function($app){
            return new TeacherGroupAssociationService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
