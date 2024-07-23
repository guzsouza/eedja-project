<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TeacherDisciplineAssociation;
use App\Models\TeacherGroupAssociation;

class Teacher extends Model{
    use HasFactory;
    protected $table = 'teachers';

    protected $fillable = [
        'name',
        'lastname',
    ];
    
    protected $hidden = [

    ];
    
    protected $casts = [

    ];
    
    //Relações eloquent
    //belongsTo
    public function disciplines(){
        return $this->belongsToMany(Discipline::class, 'teacher_discipline_associations', 'discipline_id', 'teacher_id');
    }

    public function groups(){
        return $this->belongsToMany(Group::class, 'teacher_group_association', 'group_id', 'teacher_id');
    }

    //hasMany
    public function disciplinesAssociations(){
        return $this->hasMany(TeacherDisciplineAssociation::class);
    }

    public function groupsAssociation(){
        return $this->hasMany(TeacherGroupAssociation::class);
    }
}

/*
    // Para associar um professor a uma disciplina
    $teacher->discipline()->attach($discipline_id);

    // Para remover a associação de um teacher a uma disciplina
    $teacher->discipline()->detach($discipline_id);

    // Para sincronizar as discipline associadas a um teacher
    $teacher->discipline()->sync([$discipline1_id, $discipline2_id]);
*/