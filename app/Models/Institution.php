<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'address',
        'phone',
        'email',
        'logo_path',
        'location',
        'vision',
        'mission',
    ];
}
