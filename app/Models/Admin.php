<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre', 'correo', 'password','user_id']; //que puede enviar el usuario
    //protected $guarded = ['id']; //que no puede enviar el usuario
     
     public function compras(){
         return $this->hasMany(Compras::class);
     }
     public function user(){
        return $this->belongsTo(User::class);
    }
    public function empleados(){
        return $this->belongsToMany(Empleado::class);
    }
 }
