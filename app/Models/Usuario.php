<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    public $timestamps = true;
    protected $fillable = ['nombre', 'apellido', 'celular', 'correo', 'direccion', 'rol_id'];


    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }

    public function facturasEmpleado()
    {
        return $this->hasMany(Factura::class, 'id_empleado');
    }

    public function facturasCliente()
    {
        return $this->hasMany(Factura::class, 'id_cliente');
    }
}
