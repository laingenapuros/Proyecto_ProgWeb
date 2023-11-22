<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    public $timestamps = false;

    public function admins(){
        return $this->belongsToMany(Admin::class);
    }
}
