<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['identificador', 'parrafo', 'cliente_id']; //lo que puede enviar el usuario

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
