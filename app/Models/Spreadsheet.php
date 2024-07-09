<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spreadsheet extends Model{
    use HasFactory;
    protected $table = 'spreadsheets';

    protected $fillable = [
        'group_id',
        'teacher_id',
        'discipline_id',
        'bimester',
        'year',
        'classes',
        'startDate',
        'endDate'
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

    public function plannings(){
        return $this->hasMany(Planning::class, 'spreadsheet_id');
    }
}