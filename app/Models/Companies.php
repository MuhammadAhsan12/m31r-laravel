<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'name',
        'website',
        'phone',
        'email',
        'contact_person_name',
        'contact_person_email',
        'country_or_registration',
        'registration_year',
        // Add other fields as needed
    ];
    
    use HasFactory;
}
