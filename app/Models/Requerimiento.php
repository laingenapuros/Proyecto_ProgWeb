<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['cliente_id', 'identificador', 'parrafo']; //que puede enviar el usuario

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
