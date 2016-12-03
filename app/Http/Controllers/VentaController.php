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

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $ventas= \SICVFG\Venta::All();
       return view('ventas.index',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //Para poder generar el modal del inventario en las ventas
        $detallecompras= DetalleCompra::orderBy('producto_id')->orderBy('created_at','asc')->paginate(50000);
        $detalle= new DetalleCompra;
       //Para llevar el control de las facturas incrementalmente
        $v=DB::table('ventas')->count();
        $NF=$v+1;
       
        $productos=Producto::where('estadoProd',true)->orderBy('nombreProd')->get();
        $empleados=DB::select('SELECT * FROM empleados where estadoEmp=1 ');
        $ventas=\SICVFG\Venta::All();
        return view('ventas.create',compact('productos','empleados','ventas','NF','detallecompras','detalle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $venta=new Venta;

         $venta->numfactura = $request->numfactura;
         $venta->fechaVenta = $request->fechaVenta;
         $venta->cliente = $request->cliente;
         $venta->usuario_id =$request->user_id;
         $venta->totalVenta = $request->totalVenta;
         $venta->save();


      foreach ($request->articulos as $k => $a) {
      $detalle = new DetalleVenta;
      $i=1;


      // $producto=Producto::where('codProducto',$articulo)->get();
      // foreach ($producto as $p) {
      //   $idProducto=$p->id;
      // }

      // $prod = DetalleCompra::where('producto_id','=',$idProducto)->get();
      // $detalle->detalleCompra_id = $prod->id;

      $prod = Producto::where('codProducto','=', $a)->first();
      $detalle->detalleCompra_id = $prod->id;
      $detalle->cantidad = $request->cantidad[$k];
      $detalle->descuento = $request->descuento[$k];
      $detalle->precioventa = $request->precioventa[$k];
      $detalle->venta_id =$venta->id;
      $pre = Presentaciones::where('nombrePre','=', $request->presentaciones[$k])->first();
      $detalle->presentacion_id = $pre->id;
      $i=$i+1;
      $detalle->save();
    }
       return redirect('/ventas')->with('mensaje','Venta realizada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      // funcion para obtener el nombre del producto a comprar
    public function nombreproducto($codProd){
      $producto=Producto::where('codProducto',$codProd)->get();
      foreach ($producto as $p) {
        $nombProd=$p->nombreProd;
      }
      return Response::json($nombProd);
    }
// funcion que devuelve todas las presentaciones asociadas aun producto en especifico
    public function productospresentaciones($codProd){
      $producto=Producto::where('codProducto',$codProd)->get();
      foreach ($producto as $p) {
        $idProducto=$p->id;
        $nombProd=$p->nombreProd;
      }
      // $presentaciones=DB::select('SELECT pre.nombrePre,pro.nombreProd FROM presentaciones pre,productos pro where pre.producto_id=pro.id and pre.producto_id',$idProducto );

       $presentaciones=Presentaciones::where('producto_id',$idProducto)->get();
      return Response::json($presentaciones);
    }

    public function nombrePresentacionVenta($presentacion){
      $presentaciones=Presentaciones::where('id',$presentacion)->get();
      foreach ($presentaciones as $p) {
        $nombrePresentacion=$p->nombrePre;
      }
      return Response::json($nombrePresentacion);
    }

    
    public function show($id)
    {
          $ventaObtenida =\SICVFG\Venta::find($id);
         $detalleObtenido =\SICVFG\DetalleVenta::where('venta_id',$id)->get();
         $w =\SICVFG\DetalleVenta::where('venta_id',$id)->count();
         return view('ventas.show',compact('ventaObtenida','w','detalleObtenido'));
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
