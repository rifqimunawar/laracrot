<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perpus extends Model
{
    use HasFactory, Sluggable;
    protected $table = ('perpus');
    protected $guarded = [];

    public function categorybooks(): BelongsTo
    {
        return $this->belongsTo(CategoryBook::class, 'categorybook_id');
    }    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
