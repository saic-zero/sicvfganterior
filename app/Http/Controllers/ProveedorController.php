<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Proveedor;
use Session;
use Redirect;
use SICVFG\Http\Requests;
use SICVFG\Http\Requests\ProveedorCreateRequest;
use SICVFG\Http\Requests\ProveedorUpdateRequest;
use SICVFG\Http\Controllers\Controller;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $estado=2;
       $proveedors= \SICVFG\Proveedor::all();
        return view('proveedor.index',compact('proveedors','estado'));
    }
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\H\SICVFG\ttp\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorCreateRequest $request)
    {
         \SICVFG\Proveedor::create([
        'nombreProv'=>$request['nombreProv'],
        'RUC'=> $request['RUC'],
        'correoProv'=> $request['correoProv'],
        'direccionProv'=>$request['direccionProv'],
        'telefonoProv'=> $request['telefonoProv'],
       ]);
      return redirect('/proveedor')->with('mensaje','Proveedor Agregado con Exito');
  }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//El metodo show se utilizara en este caso para habilitar un proveedor
    {
        
        $proveedor=\SICVFG\Proveedor::findOrFail($id);
        $proveedor->estadoProv=1; //modificamos el estado 
        $proveedor->update();
         Session::flash('mensaje','Proveedor Habilitado con Exito');
        return Redirect::to('/proveedor');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
     {
      $proveedor= \SICVFG\Proveedor::find($id);
      return view('proveedor.edit',['proveedor'=>$proveedor]);
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProveedorUpdateRequest $request, $id)
    {
        $proveedor= \SICVFG\Proveedor::find($id);
        $proveedor->fill($request->all());
        $proveedor->save();

        Session::flash('mensaje','Proveedor Editado con Exito');
        return Redirect::to('/proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
    
        $proveedor=\SICVFG\Proveedor::find($id);
        $proveedor->estadoProv=false; //modificamos el estado a cero asumir que esta deshabilitado
        $proveedor->save();
         Session::flash('mensaje','Proveedor Deshabilitado con Exito');
        return Redirect::to('/proveedor');
    }


      public function desactivo($id)
    {
         $estado=0;
        $proveedors= \SICVFG\Proveedor::All();
        return view('proveedor.index',compact('proveedors','estado'));
    }
    public function activo($id)
    {
        $estado=1;
        $proveedors= \SICVFG\Proveedor::All();
        return view('proveedor.index',compact('proveedors','estado'));
    }

}
