<?php

namespace App\Models;

use App\Models\User;
use Laravel\Sanctum\Guard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kader extends Model
{
    use HasFactory;
    protected $table = 'Kader';
    // fungsi protected guarded untuk meng fillabel semuanya
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // protected $fillabel = [
    //     'nama', 'photo', '_token'
    // ];
}
