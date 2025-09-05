<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $fillable = [
        'institution_id',
        'name',
        'teacher_id', 
        'level',
    ];
}
