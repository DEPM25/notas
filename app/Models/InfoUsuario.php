<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoUsuario extends Model
{
    use HasFactory;

    protected $table = 'info_usuarios';

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
