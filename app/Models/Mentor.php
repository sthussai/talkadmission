<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($mentor) {
                $user = User::latest()->first();
                $user->userable_id = $mentor->id;
                $user->userable_type = 'App\Models\Mentor';
                $user->save();            
        });
    }
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
