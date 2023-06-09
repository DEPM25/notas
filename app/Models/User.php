<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';

    public function roles()
    {
        return $this->belongsTo(Role::class, 'rol_id', 'id');
    }

    public function infoUsuario()
    {   
        return $this->hasOne(InfoUsuario::class, 'usuario_id');
    }   
}
