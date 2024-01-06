<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($applicant) {
                $user = User::latest()->first();
                $user->userable_id = $applicant->id;
                $user->userable_type = 'App\Models\Appicant';
                $user->save();            
        });
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}


