<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Requests\EmpleadoCreateRequest;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Empleado;
use Input;
use Session;
use Redirect;
use View;
use Response;

class primerEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

      $empleados=Empleado::All();
      return view('primero/formulario/frmUsuario',compact('empleados'));
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
