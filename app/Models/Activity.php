<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'tipodeactividad', 'fecha', 'nota', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
