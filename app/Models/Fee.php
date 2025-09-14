<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'classroom_id',
        'term_1_amount',
        'term_2_amount',
        'term_3_amount', 
        'year',
        'description',
    ];

    /**
     * Get the school that owns the fee.
     */
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    /**
     * Get the classroom associated with this fee.
     */
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function getAmountAttribute()
    {
        return $this->term_1_amount + $this->term_2_amount + $this->term_3_amount;
    }

}
