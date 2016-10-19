<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\User;
use SICVFG\Compra;
use SICVFG\Categoria;
use SICVFG\Estante;
use SICVFG\Detallecompra;
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

class compraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $compras= \SICVFG\Compra::All();
       $detallecompras= \SICVFG\DetalleCompra::All();
        $vendedor=\SICVFG\Vendedor::lists('nombreVen','id');
        return view('compras.index',compact('compras','detallecompras'));
        return view('detallecompras.index',compact('detallecompras','proveedors'));
    }


  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\H\SICVFG\ttp\Response
     */
    public function create()
    {

        $estantes=Estante::All();
        $vendedor=Vendedor::All();
        $categorias=Categoria::All();
        return view('compras.create',compact('estantes','vendedor','categorias'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $compra=new Compra;
         
         $compra->numComprobanteCompra = $request->numComprobanteCompra;
         $compra->tipoCompra = $request->tipoCompra;
         $compra->fechaCompra = $request->fechaCompra;
         $compra->descripcionCompra = $request->descripcionCompra;
         $compra->usuario_id = 1;
          $compra->vendedor_id = $request->vendedor_id;
         $compra->save();         

      foreach ($request->articulos as $k => $a) {
      $detalle = new DetalleCompra;
      $i=1;
      $prod = Producto::where('codProducto','=', $a)->first();
      $detalle->producto_id = $prod->id;
      $detalle->cantidad = $request->cantidad[$k];
      $detalle->precioCompra = $request->precioC[$k];
      $detalle->precioMinVenta = $request->pmv[$k];
      $detalle->precioMaxVenta = $request->pmav[$k];
      $detalle->fechaVencimiento = $request->vencimiento[$k];
      $detalle->lote = $request->lote[$k];
      $detalle->compra_id =$compra->id;
      $detalle->estante_id = $request->estante[$k];      
      $pre = Presentaciones::where('nombrePre','=', $request->presentaciones[$k])->first();
      $detalle->presentacion_id = $pre->id;
      $i=$i+1;
      $detalle->save();
    }
       return redirect('/compras')->with('mensaje','Registrado con exito');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         $compraObtenida =\SICVFG\Compra::find($id);
         $detalleObtenido =\SICVFG\DetalleCompra::where('compra_id',$id)->get();
         $w =\SICVFG\DetalleCompra::where('compra_id',$id)->count();
      
         return view('compras.show',compact('compraObtenida','w','detalleObtenido'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




     public function edit($id)
     {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function productospresentaciones($codProd){
      $producto=Producto::where('codProducto',$codProd)->get();
      foreach ($producto as $p) {
        $idProducto=$p->id;
      }
      $presentaciones=Presentaciones::where('producto_id',$idProducto)->get();
      return Response::json($presentaciones);
    }

    public function nombrePresentacionCompra($presentacion){
      $presentaciones=Presentaciones::where('id',$presentacion)->get();
      foreach ($presentaciones as $p) {
        $nombrePresentacion=$p->nombrePre;
      }
      return Response::json($nombrePresentacion);
    }


}
