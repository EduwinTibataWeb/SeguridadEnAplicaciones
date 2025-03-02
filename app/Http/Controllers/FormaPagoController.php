<?php

namespace App\Http\Controllers;

use App\Models\FormaPago;
use Illuminate\Http\Request;

class FormaPagoController extends Controller
{
    public function index()
    {
        $formasPago = FormaPago::all();
        return view('formas_pago.index', compact('formasPago'));
    }

    public function create()
    {
        return view('formas_pago.create');
    }

    public function store(Request $request)
    {
        $formaPago = FormaPago::create($request->validate([
            'nombre_forma_pago' => 'required|string|max:50'
        ]));
        return redirect()->route('formas_pago.index')->with('success', 'Forma de pago creada correctamente.');
    }

    public function show($id)
    {
        return response()->json(FormaPago::findOrFail($id), 200);
    }

    public function edit($id)
    {
        $formaPago = FormaPago::findOrFail($id);
        return view('formas_pago.edit', compact('formaPago'));
    }

    public function update(Request $request, $id)
    {
        $formaPago = FormaPago::findOrFail($id);
        $formaPago->update($request->validate([
            'nombre_forma_pago' => 'required|string|max:50'
        ]));
        return redirect()->route('formas_pago.index')->with('success', 'Forma de pago actualizada correctamente.');
    }

    public function destroy($id)
    {
        FormaPago::destroy($id);
        return redirect()->route('formas_pago.index')->with('success', 'Forma de pago eliminada correctamente.');
    }
}
