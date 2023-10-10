<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function cliente(){
        return $this->belongsTo($Cliente::class);
    }
}
