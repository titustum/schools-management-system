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

    // belongs to Institution
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    // belongs to Teacher (User)
    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id', 'teacher_id');
    }
}
