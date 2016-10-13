<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
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
      $estado=2;
      $presentaciones= \SICVFG\Presentaciones::All();
     return view('presentaciones.index',compact('presentaciones','estado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $productos=\SICVFG\Producto::lists('nombreProd','id');
     return view('presentaciones.create',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        \SICVFG\Presentaciones::create([
        'nombrePre'=>$request['nombrePre'],
        'equivale'=>$request['equivale'],
         'ganancia'=> $request['ganancia'],
        'producto_id'=>$request['producto_id'],
        ]);
        return redirect('/presentaciones')->with('mensaje','presentacion Agregado con Exito');
        
    }

        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $presentaciones=\SICVFG\Presentaciones::findOrFail($id);
        $presentaciones->estadoPres=1; //modificamos el estado 
        $presentaciones->update();
        Session::flash('mensaje','presentación Habilitada con Exito');
        return Redirect::to('/presentaciones');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
              //return"Se esta editando el producto #".$id;
     $productos=\SICVFG\Producto::All();
     $presentaciones= \SICVFG\Presentaciones::find($id);
     if(is_null($presentaciones))//Si no existe
       {
        App::abort(404);
       }
     return view('presentaciones.edit',compact('presentaciones','productos'));//si no
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
       
        Session::flash('mensaje','presentación Editado con Exito');
        return Redirect::to('/presentaciones');
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
        return Redirect::to('/presentaciones');
    }

 public function desactivo($id)
    {
        $estado=0;
        $presentaciones= \SICVFG\Presentaciones::All();
        return view('presentaciones.index',compact('presentaciones','estado'));
    }
    public function activo($id)
    {
        $estado=1;
        $presentaciones= \SICVFG\Presentaciones::All();
        return view('presentaciones.index',compact('presentaciones','estado'));
    }

}
