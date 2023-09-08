<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_user extends Model
{
    use HasFactory;

    protected $table = 'info_usuarios';

    protected $hidden = [
        'municipio_id',
        'tipo_documento_id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'info_usuarios_NIUP','NIUP');
    }

    public function municipio()
    {
        return $this->hasOne(Municipio::class,'id', 'municipio_id');
    }

    public function documento()
    {
        return $this->hasOne(Tipo_documento::class,'id', 'tipo_documento_id');
    }
}
