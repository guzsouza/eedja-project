<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Teacher;
use App\Models\Group;

class TeacherGroupAssociation extends Model{
    use HasFactory;
    protected $table = 'teacher_group_associations';

    protected $fillable = [
        'group_id',
        'teacher_id'
    ];
    
    protected $hidden = [

    ];
    
    protected $casts = [

    ];

    //Realações Eloquent
    //belongsTo
    public function groups(){
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function teachers(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
