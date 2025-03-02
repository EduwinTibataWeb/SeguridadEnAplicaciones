<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Usuario;
use App\Models\Producto;
use App\Models\FormaPago;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        return view('facturas.index', [
            'facturas' => Factura::with(['empleado', 'cliente', 'producto', 'formaPago'])->get()
        ]);
    }

    public function create()
    {
        return view('facturas.create', [
            'empleados' => Usuario::where('rol_id', 2)->get(),
            'clientes' => Usuario::where('rol_id', 3)->get(),
            'productos' => Producto::all(),
            'formas_pago' => FormaPago::all() // Cambio aquí
        ]);
    }

    public function store(Request $request)
    {
        $factura = Factura::create($request->validate([
            'id_empleado' => 'required|exists:usuarios,id',
            'id_cliente' => 'required|exists:usuarios,id',
            'id_pago' => 'required|exists:forma_pago,id',
            'id_producto' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0'
        ]));
        return redirect()->route('facturas.index')->with('success', 'Factura creada exitosamente');
    }

    public function show($id)
    {
        return view('facturas.show', [
            'factura' => Factura::with(['empleado', 'cliente', 'producto', 'formaPago'])->findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('facturas.edit', [
            'factura' => Factura::findOrFail($id),
            'empleados' => Usuario::where('rol_id', 2)->get(),
            'clientes' => Usuario::where('rol_id', 3)->get(),
            'productos' => Producto::all(),
            'formasPago' => FormaPago::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $factura = Factura::findOrFail($id);
        $factura->update($request->validate([
            'id_empleado' => 'required|exists:usuarios,id',
            'id_cliente' => 'required|exists:usuarios,id',
            'id_pago' => 'required|exists:forma_pago,id',
            'id_producto' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0'
        ]));
        return redirect()->route('facturas.index')->with('success', 'Factura actualizada correctamente');
    }

    public function destroy($id)
    {
        Factura::destroy($id);
        return redirect()->route('facturas.index')->with('success', 'Factura eliminada correctamente');
    }
}
