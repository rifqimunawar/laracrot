<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;
    protected $table='rayon';
    protected $guarded=[];

    public function users()
    {
        return $this->hasMany (User::class);
    }
}
