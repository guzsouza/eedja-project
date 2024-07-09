<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model{
    use HasFactory;
    protected $table = 'plannings';

    protected $fillable = [
        'spreadsheet_id',
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

    public function spreadsheet(){
        return $this->belongsTo(Spreadsheet::class, 'spreadsheet_id');
    }
}
