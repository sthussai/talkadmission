<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'med_school',
        'grad_year', 
        'previous_degree', 
        'mmis_attended', 
        'mmis_interviewed', 
        'mentorship_experience', 
        'applicants_helped', 
        'about', 
        'tags', 
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
