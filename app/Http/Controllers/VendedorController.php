<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Vendedor;
use Session;
use Redirect;
use SICVFG\Http\Requests\VendedorCreateRequest;
use SICVFG\Http\Requests\VendedorUpdateRequest;
use SICVFG\Http\Controllers\Controller;


class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $estado=2;
       $proveedors=\SICVFG\Proveedor::lists('nombreProv','id');
       $vendedors= \SICVFG\Vendedor::all();
       return view('vendedor.index',compact('vendedors','estado','proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $proveedors=\SICVFG\Proveedor::lists('nombreProv','id');
     return view('vendedor.create',compact('proveedors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendedorCreateRequest $request)
    {
         \SICVFG\Vendedor::create([
        'nombreVen'=>$request['nombreVen'],
        'DUIVen'=> $request['DUIVen'],
        'correoVen'=> $request['correoVen'],
        'direccionVen'=>$request['direccionVen'],
        'telefonoVen'=> $request['telefonoVen'],
        'proveedor_id'=> $request['proveedor_id'],
       ]);
      return redirect('/vendedor')->with('mensaje','Vendedor Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendedor=\SICVFG\Vendedor::findOrFail($id);
        $vendedor->estadoVen=1; //modificamos el estado 
        $vendedor->update();
         Session::flash('mensaje','Vendedor Habilitado con Exito');
        return Redirect::to('/vendedor');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

     $proveedors=\SICVFG\Proveedor::All(); 
     $vendedor= \SICVFG\Vendedor::find($id);
   
     if(is_null($vendedor))
       {
        App::abort(404);
       }
     return view('vendedor.edit',compact('vendedor','proveedors'));//si no
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VendedorUpdateRequest $request, $id)
    {
        $vendedor= \SICVFG\Vendedor::find($id);
        $vendedor->fill($request->all());
        $vendedor->save();

        Session::flash('mensaje','Vendedor Editado con Exito');
        return Redirect::to('/vendedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $vendedor=\SICVFG\Vendedor::findOrFail($id);
        $vendedor->estadoVen=0; //modificamos el estado a cero asumir que esta deshabilitado
        $vendedor->update();
        Session::flash('mensaje','Vendedor Deshabilitado con Exito');
        return Redirect::to('/vendedor');
    }


    public function desactivo($id)
    {
         $estado=0;
        $vendedors= \SICVFG\Vendedor::All();
        return view('vendedor.index',compact('vendedors','estado'));
    }
    public function activo($id)
    {
        $estado=1;
        $vendedors= \SICVFG\Vendedor::All();
        return view('vendedor.index',compact('vendedors','estado'));
    }
}
