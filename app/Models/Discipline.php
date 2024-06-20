<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TeacherDisciplineAssociation;
use App\Models\GroupDisciplineAssociation;

class Discipline extends Model{
    use HasFactory;
    protected $table = 'disciplines';

    protected $fillable = [
        'name',
    ];
    
    protected $hidden = [

    ];
    
    protected $casts = [

    ];

    //Relações Eloquent

    //has
    public function teacherAssociation(){
        return $this->hasMany(TeacherDisciplineAssociation::class);
    }

    public function groupsAssociation(){
        return $this->hasMany(GroupDisciplineAssociation::class);
    }
    
}
