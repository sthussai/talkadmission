<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'finish_time',
        'comments',
        'mentor_id',
        'applicant_id',
    ];
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
 
    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
