<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_documento extends Model
{
    use HasFactory;

    protected $table = 'tipos_documentos';

    public function info_user()
    {
        return $this->belongsTo(Info_user::class,'id', 'tipo_documento_id');
    }
}
