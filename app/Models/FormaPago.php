<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    use HasFactory;

    protected $table = 'forma_pago';

    protected $fillable = ['nombre_forma_pago'];

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'id_pago');
    }
}
