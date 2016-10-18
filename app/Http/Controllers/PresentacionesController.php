<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use DB;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Http\Requests\PresentacionCreateRequest;
use SICVFG\Presentaciones;
use SICVFG\Producto;
use Session;
use Redirect;
use View;

class PresentacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
    }

        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    { 
     //Obtenemos el id de la presentacion respectiva 
        $id = \SICVFG\Presentaciones::all()->count();
        $pres = new Presentaciones;
        $pres->id = $id;
        $id= $pres->id;

        $estado=2;
        $nombre = Presentaciones::nombreProd($producto);
        $presentacion = Presentaciones::where('producto_id','=',$producto)->orderBy('equivale')->paginate(8);
     
      return view('presentaciones.show',compact('presentacion','producto','nombre','estado','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $productos=\SICVFG\Producto::All();
     $presentaciones= \SICVFG\Presentaciones::find($id);
          $producto=$presentaciones->producto_id;
          $nombreProd = Presentaciones::nombreProd($producto);
     
     return view('presentaciones.edit',compact('presentaciones','productos','nombreProd','producto'));//si no
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
    $presentaciones= \SICVFG\Presentaciones::find($id);
    $presentaciones->fill($request->all());
    $presentaciones->save();
      
          $estado=2;
          $prese=\SICVFG\Presentaciones::findOrFail($id);
          $producto=$prese->producto_id;
          $nombre = Presentaciones::nombreProd($producto);
          $presentacion = Presentaciones::where('producto_id','=',$producto)->orderBy('equivale')->paginate(8);
    Session::flash('mensaje','presentación Editado con Exito');
    return view('presentaciones.show',compact('presentacion','estado','nombre','producto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
      {
        $presentaciones=\SICVFG\Presentaciones::findOrFail($id);
        $presentaciones->estadoPres=0; //modificamos el estado 
        $presentaciones->update();
        Session::flash('mensaje','presentación Deshabilitada con Exito');
              
           
              $producto=$presentaciones->producto_id;
              $estado=2;
              $nombre = Presentaciones::nombreProd($producto);
              $presentacion = Presentaciones::where('producto_id','=',$producto)->orderBy('equivale')->paginate(8);
      return view('presentaciones.show',compact('presentacion','producto','nombre','estado'));
       }


         //Nuevas Funciones

    public function darAlta($id)
        {
        $presentaciones=\SICVFG\Presentaciones::findOrFail($id);
        $idProducto=$presentaciones->producto_id;

        $producto=\SICVFG\Producto::findOrFail($idProducto);
        $estadoProducto=$producto->estadoProd;

                if($estadoProducto==1)
                {//inicio condicion 1
                    $presentaciones->estadoPres=1; //modificamos el estado 
                    $presentaciones->update();
                    Session::flash('mensaje','presentación Habilitada con Exito'); 
                }else{

                     $presentaciones->estadoPres=0; //modificamos el estado 
                     $presentaciones->update();
                     Session::flash('mensaje','La Presentación no se Puede Habilitar, ya que el producto al que pertenece esta Inactivo');
                     return Redirect::to('/producto');  
                }//fin condicion 1
              
           
              $producto=$presentaciones->producto_id;
              $estado=2;
              $nombre = Presentaciones::nombreProd($producto);
              $presentacion = Presentaciones::where('producto_id','=',$producto)->orderBy('equivale')->paginate(8);
      return view('presentaciones.show',compact('presentacion','producto','nombre','estado'));
        }

   
    public function desactivo($producto)
    {
     $id = \SICVFG\Presentaciones::all()->count();
     $pres = new Presentaciones;
     $pres->id = $id;
     $id= $pres->id;
              $estado=0;
              $nombre = Presentaciones::nombreProd($producto);
              $presentacion = Presentaciones::where('producto_id','=',$producto)->orderBy('equivale')->paginate(8);
      return view('presentaciones.show',compact('presentacion','producto','nombre','estado','id'));
    }
   

   public function activo($producto)
    {
        // $estado=1;
        // $presentacion=\SICVFG\Presentaciones::findOrFail($id);
        // $obtenido=DB::select('SELECT p.nombreProd,p.id,pre.nombrePre,pre.id FROM productos p, presentaciones pre where pre.producto_id=p.id and pre.producto_id="$id"');
        // $nombre = Presentaciones::nombreProd($obtenido);
        
        $id = \SICVFG\Presentaciones::all()->count();
        $pres = new Presentaciones;
        $pres->id = $id;
        $id= $pres->id;

      $estado=1;
      $nombre = Presentaciones::nombreProd($producto);
      $presentacion = Presentaciones::where('producto_id','=',$producto)->orderBy('equivale')->paginate(8);
      return view('presentaciones.show',compact('presentacion','producto','nombre','estado','id'));
   }

      
       public function todos($producto)
    {
        $id = \SICVFG\Presentaciones::all()->count();
        $pres = new Presentaciones;
        $pres->id = $id;
        $id= $pres->id;

      $estado=2;
      $nombre = Presentaciones::nombreProd($producto);
      $presentacion = Presentaciones::where('producto_id','=',$producto)->orderBy('equivale')->paginate(8);
      return view('presentaciones.show',compact('presentacion','producto','nombre','estado','id'));
    }

        public function todosAtras($producto)
    {
        $id = \SICVFG\Presentaciones::all()->count();
        $pres = new Presentaciones;
        $pres->id = $id;
        $id= $pres->id;

      $estado=2;
      $nombre = Presentaciones::nombreProd($producto);
      $presentacion = Presentaciones::where('producto_id','=',$producto)->orderBy('equivale')->paginate(8);
      return view('presentaciones.show',compact('presentacion','producto','nombre','estado','id'));
    }

    
    public function crear($producto)
    {
      $nombreProd = \SICVFG\Presentaciones::nombreProd($producto);
      return view('presentaciones.crear',compact('producto','nombreProd'));
    }

    public function guardar(Request $request, $producto)
    {   //Bitacoras::bitacora("Registro de nueva presentación: ".$request['nombre']);
        $id = \SICVFG\Presentaciones::all()->count();
        $pres = new Presentaciones;
        //$pres->id = $id;
        $pres->nombrePre = $request->nombrePre;
        $pres->equivale = $request->equivale;
        $pres->producto_id = $producto;
        $pres->save();
        return redirect('/presentaciones/'.$producto)->with('mensaje','Registro Guardado');
    }


}
