<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Group;
use App\Models\Student;

class GroupStudent extends Model{
    use HasFactory;
    protected $table = 'group_students';

    protected $fillable = [
        'group_id',
        'student_id'
    ];
    
    protected $hidden = [

    ];
    
    protected $casts = [

    ];

    //Eloquent Association
    //belongsTo
    public function groups(){
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
