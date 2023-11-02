<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre', 'cantidad', 'telefono', 'producto_men', 'user_id']; //que puede enviar el usuario
   //protected $guarded = ['id']; //que no puede enviar el usuario
    
    public function requerimientos(){
        return $this->hasMany(Requerimiento::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function productos(){
        return $this->belongsToMany(Producto::class);
    }
}
