<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'institution_id',
        'class_id',
        'parent_id',
        'first_name',
        'last_name',
        'admission_number',
        'date_of_birth',
        'gender',
        'photo_path',
        'status',
    ];
}
