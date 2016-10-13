<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\User;
use SICVFG\DetalleCompra;
use SICVFG\Producto;
use SICVFG\Compra;
use SICVFG\Estante;
use Session;
use Redirect;
use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;



class detallecompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $detallecompras= \SICVFG\DetalleCompra::All();
        return view('detallecompras.index',compact('detallecompras'));
    }
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\H\SICVFG\ttp\Response
     */
    public function create()
    {
        $estante=Estante::All();
        $productos=Producto::All();
        $compras=Compra::All();
        return view('detallecompras.create',compact('productos','compras','estante'));
    }

    public function getCodigoProd(Request $request, $id){
      if($request->ajax()){
        $cod=Producto::getCodProd($id);
        return response()->json($cod);
      }
    }
     public function getCodigoCom(Request $request, $id){
      if($request->ajax()){
        $cod=Compra::getCodCom($id);
        return response()->json($cod);
      }
    }
    public function getCodigoEst(Request $request, $id){
      if($request->ajax()){
        $cod=Compra::getCodEst($id);
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
        $detallecompras=$detallecompras::DetalleCompra;
        
         \SICVFG\DetalleCompra::create([
        'producto_id'=>$request['producto_id'],
        'cantidad'=> $request['cantidad'],
        'precioCompra'=> $request['precioCompra'],
        'precioMinVenta'=> $request['precioMinVenta'],
        'precioMaxVenta'=>$request['precioMaxVenta'],
        'FechaVencimiento'=> $request['FechaVencimiento'],
        'lore'=> $request['lote'],
        'compra_id'=> $request['compra_id'],
        'estante_id'=> $request['estante_id'],
        
       

      ]);
      return redirect('/detallecompras')->with('mensaje','Registrado');
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
      $productos=Producto::All();
      $compras=Compra::All();
      $estante=Estante::All();
      $detallecompras= \SICVFG\DetalleCompra::find($id);
      return view('Dcompras.edit',['detalleCompras'=>$detalleCompras],compact('productos','compras','estante'));
      
      
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
        $detallecompras= \SICVFG\DetalleCompras::find($id);
        $detallecompras->fill($request->all());
        $detallecompras->save();

        Session::flash('mensaje',' editado correctamente');
        return Redirect::to('/detallecompras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \SICVFG\DetalleCompra::destroy($id);
        Session::flash('mensaje','comras eliminado correctamente');
        return Redirect::to('/detallecompras');
    }


}