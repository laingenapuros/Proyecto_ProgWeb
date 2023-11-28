<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'empleados';
    public $timestamps = false;

    public function admins(){
        return $this->belongsToMany(Admin::class);
    }
}
