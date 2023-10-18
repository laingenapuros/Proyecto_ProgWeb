<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'cantidad', 'telefono', 'producto_men', 'user_id']; //que puede enviar el usuario
   //protected $guarded = ['id']; //que no puede enviar el usuario
    
    public function requerimientos(){
        return $this->hasMany(Requerimiento::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
