<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'roles_id', 'id');
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'villes_id', 'id');
    }

    public function favorites()
    {
        return $this->hasMany(Favoris::class, 'users_id', 'id');
    }

    public function modules()
    {
        return $this->hasMany(ModuleFormation::class, 'users_id', 'id');
    }

    public function achats()
    {
        return $this->hasMany(ModuleAchat::class, 'users_id', 'id');
    }



}
