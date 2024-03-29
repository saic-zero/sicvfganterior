<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Compra;
use SICVFG\DetalleCompra;
use SICVFG\Proveedor;
use SICVFG\Producto;
use SICVFG\Presentaciones;
use Session;
use DB;
use Redirect;

class RProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function RPAntiguedad()
    {
      // $detalle=DetalleCompra::all();
      $detalle=DB::select('SELECT d.lote,p.nombreProd,pr.nombrePre,d.cantidad,c.fechaCompra,
        d.fechaVencimiento,v.nombreVen,v.telefonoVen
        from detalle_compras d,productos p,presentaciones pr,compras c,vendedors v
        where d.compra_id=c.id and d.producto_id=p.id and d.presentacion_id=pr.id and c.vendedor_id=v.id
        order by c.fechaCompra desc');

      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="compras.informes.porAntiguedad";
      $view =  \View::make($vistaurl, compact('detalle', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
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
