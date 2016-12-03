<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\User;
use SICVFG\Compra;
use SICVFG\Venta;
use SICVFG\Categoria;
use SICVFG\Estante;
use SICVFG\DetalleVenta;
use SICVFG\DetalleCompra;
use SICVFG\Proveedor;
use SICVFG\Vendedor;
use SICVFG\Producto;
use SICVFG\Presentaciones;
use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
use Session;
use Redirect;
use View;
use DB;
use Response;

use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;



class detalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleventas= \SICVFG\DetalleVenta::All();
        return view('detalleventas.index',compact('detalleventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $productos=Producto::All();
        $ventas=Venta::All();
        return view('detalleventas.create',compact('productos','ventas'));
    }

  public function getCodigoProd(Request $request, $id){
      if($request->ajax()){
        $cod=Producto::getCodProd($id);
        return response()->json($cod);
      }
    }


       public function getCodigoVen(Request $request, $id){
      if($request->ajax()){
        $cod=Venta::getCodVen($id);
        return response()->json($cod);
      }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalleventas=$detalleventas::DetalleVenta;
        
         \SICVFG\DetalleVenta::create([
        'producto_id'=>$request['detalleCompra_id'],
        'cantidad'=> $request['cantidad'],
        'descuento'=> $request['descuento'],
        'precioVenta'=> $request['precioVenta'],
        'venta_id'=> $request['venta_id'],

      ]);
      return redirect('/detalleventas')->with('mensaje','Registrado');
   // return "Usuario Registrado";

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
