<?php

namespace Database\Seeders;

use App\Models\Discipline;
use App\Models\Group;
use App\Models\Planning;
use App\Models\TeacherDisciplineAssociation;
use App\Models\TeacherGroupAssociation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\DisciplineSeeder;
use Database\Seeders\GroupDisciplineAssociationSeeder;
use Database\Seeders\GroupSeeder;
use Database\Seeders\GroupStudentsSeeder;
use Database\Seeders\PlanningSeeder;
use Database\Seeders\ShiftSeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\TeacherDisciplineAssociationSeeder;
use Database\Seeders\TeacherGroupAssociationSeeder;
use Database\Seeders\TeachersSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        $this->call(DisciplineSeeder::class);
        $this->call(ShiftSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TeachersSeeder::class);
        
        $this->call(GroupSeeder::class);

        $this->call(GroupDisciplineAssociationSeeder::class);
        $this->call(TeacherDisciplineAssociationSeeder::class);
        $this->call(TeacherGroupAssociationSeeder::class);
        $this->call(GroupStudentsSeeder::class);
        $this->call(PlanningSeeder::class);
    }
}
