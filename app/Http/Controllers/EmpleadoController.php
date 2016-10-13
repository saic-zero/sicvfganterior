<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use SICVFG\Http\Requests;
use SICVFG\Http\Requests\EmpleadoCreateRequest;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Empleado;
use SICVFG\Sucursal;
use SICVFG\User;
use SICVFG\Cargo;
use Session;
use Redirect;
use DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
      $empleados= \SICVFG\Empleado::All();
        return view('empleado.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursals=Sucursal::All();
        $cargos=Cargo::All();
        return view('empleado.create',compact('sucursals','cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoCreateRequest $request)
    {

      Empleado::create([
        'codEmpleado'=>$request['codEmpleado'],
        'nombresEmp'=>$request['nombresEmp'],
        'apellidosEmp'=> $request['apellidosEmp'],
        'direccionEmp'=>$request['direccionEmp'],
        'fechaNacimiento'=>$request['fechaNacimiento'],
        'sexo'=>$request['sexo'],
        'telefonoEmp'=>$request['telefonoEmp'],
        'DUI'=>$request['DUI'],
        'NIT'=>$request['NIT'],
        'numAFP'=>$request['numAFP'],
        'numISSS'=>$request['numISSS'],
        'referenciaLaboral'=> $request['referenciaLaboral'],
        'fechaIngrSuc'=>$request['fechaIngrSuc'],
        'sucursal_id'=> $request['sucursal_id'],
        'cargo_id'=> $request['cargo_id'],
      ]);

      //Empleado:create($request->All());

      return redirect('/empleado')->with('mensaje','registrado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $empleados=\SICVFG\Empleado::findOrFail($id);
      $empleados->estadoEmp=1; //modificamos el estado a uno asumir que esta habilitado
      $empleados->update();
      Session::flash('mensaje','Empleado Deshabilitado con Exito');
      return Redirect::to('/empleado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $empleados= Empleado::find($id);
      $sucursals=Sucursal::All();
      $cargos=Cargo::All();
      return view('empleado.edit',compact('empleados','sucursals','cargos'));
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
      $empleado= Empleado::find($id);

      $empleado->fill($request->all());
      $empleado->save();

      Session::flash('mensaje','Empleado editado correctamente');
      return Redirect::to('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $empleados=\SICVFG\Empleado::findOrFail($id);
      $empleados->estadoEmp=0; //modificamos el estado a uno asumir que esta deshabilitado
      $empleados->update();
      //si el empleado posee una cuenta de usuario tambien se deshabilita
      // $buscarUsuario=DB::select('SELECT * FROM users where estadoUsu=1 and user_id=',$id);
      // if($buscarUsuario!=null){
      //   $user=\SICVFG\User::findOrFail($buscarUsuario->id);
      //   $user->estadoUsu=0; //modificamos el estado a uno asumir que esta deshabilitado
      //   $user->update();
      // }

      Session::flash('mensaje','Empleado Deshabilitado con Exito');
      return Redirect::to('/empleado');
    }

    public function desactivo($id)
    {
        $empleados=DB::select('SELECT * FROM empleados where estadoEmp=0 ');
          return view('empleado.index',compact('empleados'));
    }
    public function activo($id)
    {
      $empleados=DB::select('SELECT * FROM empleados where estadoEmp=1 ');
        return view('empleado.index',compact('empleados'));
    }

}
