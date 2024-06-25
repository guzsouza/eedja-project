<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\GroupDisciplineAssociation;
use App\Models\TeacherGroupAssociation;
use App\Models\GroupStudent;
use App\Models\Regiment;
use App\Models\Shift;

class Group extends Model{
    use HasFactory;
    protected $table = 'groups';

    protected $fillable = [
        'shift_id',
        'name'
    ];
    
    protected $hidden = [

    ];
    
    protected $casts = [

    ];

    //Eloquent Associations

    //has
    public function disciplinesAssociations(){
        return $this->hasMany(GroupDisciplineAssociation::class);
    }

    public function teacherAssociations(){
        return $this->hasMany(TeacherGroupAssociation::class);
    }

    public function studentsAssociantions(){
        return $this->hasMany(GroupStudent::class);
    }

    public function shift(){
        return $this->belongsTo(Regiment::class, 'shift_id');
    }

}
