<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Agrega esta línea para importar la clase User
use App\Models\User;

class Client extends Model

{
    protected $fillable = [
        'nombre', 'descripcion', 'direccion', 'web', 'industria', 'estado', 'telefono', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
