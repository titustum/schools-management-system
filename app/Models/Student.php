<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id', 'classroom_id', 'admission_no',
        'first_name', 'middle_name', 'last_name',
        'gender', 'dob', 'parent_name', 'parent_phone', 'photo',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    // Accessor for full_name
    public function getFullNameAttribute()
    {
        return trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }

    // Example: Balance calculation
    public function balance()
    {
        $expected = $this->classroom->fees()->sum('amount');
        $paid = $this->payments()->sum('amount');

        return $expected - $paid;
    }
}
