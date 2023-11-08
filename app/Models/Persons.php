<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $fillable = [
        'first_name', // Add 'first_name' to the fillable attributes
        'last_name',
        'gender',
        'email',
        'phone',
        'country',
        'region',
        'date_of_birth',
        'education_level',
        'role',
    ];
    
    use HasFactory;
}
