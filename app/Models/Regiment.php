<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Group;

class Regiment extends Model{
    use HasFactory;
    protected $table = 'regiments';

    protected $fillable = [
        'name'
    ];
    
    protected $hidden = [

    ];
    
    protected $casts = [

    ];

    //Eloquent Association
    //has
    public function groupAssociation(){
        return $this->hasOne(Group::class);
    }
}
