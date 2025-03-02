<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'factura';

    protected $fillable = [
        'fecha', 'id_empleado', 'id_cliente', 'id_pago', 'id_producto', 'cantidad', 'total'
    ];

    public function empleado()
    {
        return $this->belongsTo(Usuario::class, 'id_empleado');
    }

    public function cliente()
    {
        return $this->belongsTo(Usuario::class, 'id_cliente');
    }

    public function formaPago()
    {
        return $this->belongsTo(FormaPago::class, 'id_pago');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
