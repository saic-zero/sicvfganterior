<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
use DB;
use SICVFG\DetalleCompra;
use SICVFG\DetalleVenta;
class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $detallecompras=DB::select('select d.id,p.nombreProd, d.cantidad, d.precioMinVenta,
        //  d.precioMaxVenta,d.fechaVencimiento,d.lote,e.nombreEst,pr.nombrePre from productos p,
        //   detalle_compras d, presentaciones pr, estantes e
        //    where p.id=d.producto_id and pr.id=d.presentacion_id and e.id=d.estante_id
        //    order by p.nombreProd, d.fechaVencimiento');

        $detallecompras= DetalleCompra::orderBy('producto_id')->orderBy('created_at','asc')->paginate(20);

        $detalle= new DetalleCompra;

       return view('inventario.inventario',compact('detallecompras','detalle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
