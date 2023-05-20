<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryBook extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = [];
    public function perpus(): HasMany
    {
        return $this->hasMany(Perpus::class, 'categorybook_id');
    }    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
