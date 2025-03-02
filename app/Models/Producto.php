<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $timestamps = true; // Asegura que Laravel maneje las fechas automáticamente

    protected $table = 'productos';

    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock'];

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'id_producto');
    }
}
