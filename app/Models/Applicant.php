<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Applicant extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $appends = [
        'photo',
    ];

    protected $fillable = [
        'name',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($applicant) {
                $user = User::latest()->first();
                $user->userable_id = $applicant->id;
                $user->userable_type = 'App\Models\Applicant';
                $user->save();            
        });
    }

    
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('avatar')
            ->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->performOnCollections('avatar')
            ->width(50)
            ->height(50);
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }    
}


