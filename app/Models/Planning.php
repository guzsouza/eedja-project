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
        'contents',
        'resume',
        'skills',
        'resources',
        'methodologies',
        'projects',
    ];

    protected $hidden = [

    ];
    
    protected $casts = [

    ];

    public function spreadsheet(){
        return $this->belongsTo(Spreadsheet::class, 'spreadsheet_id');
    }
}
