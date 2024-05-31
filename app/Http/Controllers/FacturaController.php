<?php

namespace App\Http\Controllers;

use App\Models\Factura;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $facturas = Factura::all();
        return response()->json($facturas, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $factura = Factura::create($request->all());
        return response()->json($factura, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $factura = Factura::findOrFail($id);
        $factura->update($request->all());
        return response()->json($factura, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $factura = Factura::findOrFail($id);
        $factura->delete();
        return response()->json(null, 204);
    }
}
