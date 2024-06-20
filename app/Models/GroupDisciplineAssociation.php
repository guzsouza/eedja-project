<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupDisciplineAssociation extends Model{
    use HasFactory;
    protected $table = 'group_discipline_associations';

    protected $fillable = [
        'group_id',
        'discipline_id'
    ];
    
    protected $hidden = [

    ];
    
    protected $casts = [

    ];

    //Relações Eloquent

    //belongsTo
    public function groups(){
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function disciplines(){
        return $this->belongsTo(Discipline::class, 'discipline_id');
    }
}
