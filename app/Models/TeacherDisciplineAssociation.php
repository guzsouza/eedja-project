<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Teacher;
use App\Models\Discipline;

class TeacherDisciplineAssociation extends Model{
    use HasFactory;
    protected $table = 'teacher_discipline_associations';

    protected $fillable = [
        'discipline_id',
        'teacher_id'
    ];
    
    protected $hidden = [

    ];
    
    protected $casts = [

    ];

    //Relações Eloquent
    //belongsTo
    public function teachers(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
    public function disciplines(){
        return $this->belongsTo(Discipline::class, 'discipline_id');
    }
}
