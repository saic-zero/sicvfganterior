<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Requests\CargosRequest;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Cargo;
use SICVFG\Bitacora;
use Session;
use DB;
use Redirect;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cargos=DB::select('SELECT * FROM cargos where estadoCargo=1 ');
       return view ('cargo.index',compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargosRequest $request)
    {
      Cargo::create([
        'nombreCargo'=>$request['nombreCargo'],
      ]);
      Bitacora::bitacora("Registro de nuevo cargo: ".$request['nombreCargo']);
      return redirect('/cargo')->with('mensaje','Registro guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cargos=\SICVFG\Cargo::findOrFail($id);
      $cargos->estadoCargo=1; //modificamos el estado
      $cargos->update();
      Bitacora::bitacora("Cargo  ".$cargos['nombreCargo']." Habilitado");
      Session::flash('mensaje','Cargo Habilitado con Éxito');
      return Redirect::to('/cargo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cargos= Cargo::find($id);
      return view('cargo.edit',compact('cargos'));
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
      $cargo =Cargo::find($id);
      $cargo->fill($request->all());
      $cargo->save();
      Bitacora::bitacora("Modificación de cargo: ".$request['nombreCargo']);
      Session::flash('mensaje','Datos modificados correctamente');
      return Redirect::to('/cargo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cargos=\SICVFG\Cargo::findOrFail($id);
      $cargos->estadoCargo=0; //modificamos el estado
      $cargos->update();
      Bitacora::bitacora("Cargo ".$cargos['nombreCargo']." Deshabilitado");
      Session::flash('mensaje','Cargo Deshabilitado con Éxito');
      return Redirect::to('/cargo');
    }

    public function desactivo($id)
    {
        $cargos=DB::select('SELECT * FROM cargos where estadoCargo=0 ');
        return view('cargo.index',compact('cargos'));
    }
    public function activo($id)
    {
      $cargos=DB::select('SELECT * FROM cargos where estadoCargo=1 ');
      return view('cargo.index',compact('cargos'));
    }
}
