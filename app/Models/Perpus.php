<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perpus extends Model
{
    use HasFactory;
    protected $table = ('perpus');
    protected $guarded = [];

    public function categorybooks(): BelongsTo
    {
        return $this->belongsTo(CategoryBook::class, 'categorybooks_id');
    }
}
