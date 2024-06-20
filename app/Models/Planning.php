<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model{
    use HasFactory;
    protected $table = 'plannings';

    protected $fillable = [
        'group_id',
        'teacher_id',
        'discipline_id',
        'classes',
        'startDate',
        'endDate',
        'date',
        'content',
        'skills',
        'resource',
        'metodology',
        'project'
    ];

    protected $hidden = [

    ];
    
    protected $casts = [

    ];

    //Eloquent Association
    public function group(){
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function discipline(){
        return $this->belongsTo(Discipline::class, 'discipline_id');
    }
}
