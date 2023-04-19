<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rayon extends Model
{
    use HasFactory, Sluggable;
    protected $table='rayon';
    protected $fillable=['rayon', 'slug'];

    // Define the accessor for the slug
    public function getSlugAttribute()
    {
        return Str::slug($this->rayon);
    }

    public function users()
    {
        return $this->hasMany (User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'rayon'
            ]
        ];
    }
}
