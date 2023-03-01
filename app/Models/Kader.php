<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;

class Kader extends Model
{
    use HasFactory;
    protected $table = 'Kader';
    // fungsi protected guarded untuk meng fillabel semuanya
    protected $guarded = [];



    // protected $fillabel = [
    //     'nama', 'photo', '_token'
    // ];
}
