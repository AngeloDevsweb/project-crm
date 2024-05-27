<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'titulo', 'descripcion', 'fecha_inicio', 'fecha_fin', 'monto', 'estado', 'etapa', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
