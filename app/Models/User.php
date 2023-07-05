<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Role;
use App\Models\Kader;
use App\Models\Galeri;
use App\Models\Category;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravolt\Indonesia\Models\Province;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // protected $guarded=['id'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // public function kader ()
    // {
    //     return $this->hasOne(Kader::class);
    // }

    public function galeri()
    {
        return $this-> hasMany ('App\Models\Galeri');
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }
    public function provinsi()
    {
        return $this->belongsTo(Province::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'username'
            ]
        ];
    }
}
