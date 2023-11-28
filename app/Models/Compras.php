<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [ 'identificador', 'parrafo', 'admin_id']; //que puede enviar el usuario

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}