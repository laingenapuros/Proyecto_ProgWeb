<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['admin_id', 'identificador', 'parrafo']; //que puede enviar el usuario

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}