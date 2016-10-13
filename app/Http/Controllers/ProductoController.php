<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Http\Requests\ProductoCreateRequest;
use SICVFG\Http\Requests\ProductoUpdateRequest;
use SICVFG\Producto;
use Session;
use Redirect;
use View;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    { 
     $estado=2;
     $categorias=\SICVFG\Categoria::lists('nombreCategoria','id');
     $productos= \SICVFG\Producto::All();
     return view('producto.index',compact('productos','estado','categorias'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $categorias=\SICVFG\Categoria::lists('nombreCategoria','id');
     return view('producto.create',compact('categorias'));
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoCreateRequest $request)
    {
       $productos = new Producto();
       $productos->codProducto = $request['codProducto'];
       $productos->nombreProd = $request['nombreProd'];
       $productos->descripcionProd = $request['descripcionProd'];
       $productos->stockMinimo = $request['stockMinimo'];
       $productos->stockMaximo = $request['stockMaximo'];
       $productos->categoria_id = $request['categoria_id'];
       $productos->save();
       $idproducto = $productos->id;
     return redirect::to('presentaciones/crear/'.$idproducto);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $c =\SICVFG\Producto::find($id);
         $p =\SICVFG\Presentaciones::where('producto_id',$id)->orderBy('equivale','asc')->paginate(8);
         $pp =\SICVFG\Presentaciones::where('producto_id',$id)->orderBy('equivale','desc')->get();
         $w =\SICVFG\Presentaciones::where('producto_id',$id)->count();
         //$dc = Detallecompras::where('producto_id',$id)->where('entrega',false)->get();
         $cant = $prec = 0;
         // foreach ($dc as $xdc) {
         //   $cant += Productos::unidades($xdc->presentacion_id,$xdc->cantidad);
         //   $prec += $xdc->precio;
         // }
         if($cant == 0){
           $precu = 0;
         }else{
           $precu = $prec / $cant;
         }
         return view('producto.show',compact('c','p','w','precu','cant','pp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $categorias=\SICVFG\Categoria::All(); 
     $producto= \SICVFG\Producto::find($id);
     if(is_null($producto))//Si el producto no existe
       {
        App::abort(404);
       }
     return view('producto.edit',compact('producto','categorias'));//si no
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoUpdateRequest $request, $id)
    {
        $producto= \SICVFG\Producto::find($id);
        $producto->fill($request->all());
        $producto->save();
       
        Session::flash('mensaje','Producto Editado con Exito');
        return Redirect::to('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Esta funcion se encarga de Deshabilitar Un producto
    public function destroy($id)
    {
        //
        $productos=\SICVFG\Producto::findOrFail($id);
        $productos->estadoProd=0; //modificamos el estado a uno asumir que esta deshabilitado
        $productos->update();
        Session::flash('mensaje','Producto Deshabilitado con Exito');
        return Redirect::to('/producto');
    }



    //Funciones Creadas
    //Esta funcion se encarga de Habilitar Un producto
    public function darAlta($id){
         $productos=\SICVFG\Producto::findOrFail($id);
         $productos->estadoProd=1;
         $productos->update();
        // Bitacoras::bitacora("Producto activado: ".$productos['nombre']);
         Session::flash('mensaje','Producto Habilitado con Exito');
         return Redirect::to('/producto');
    }

    //Esta Funcion nos proporciona el control de los productos que se encuentran Deshabilitados
   public function desactivo($id)
    {
        $estado=0;
        $productos= \SICVFG\Producto::All();
        return view('producto.index',compact('productos','estado'));
    }

    //Esta Funcion nos proporciona el control de los productos que se encuentran Habilitados
    public function activo($id)
    {
        $estado=1;
        $productos= \SICVFG\Producto::All();
        return view('producto.index',compact('productos','estado'));
    }

   

}
