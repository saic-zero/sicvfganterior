<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Cargo;
use SICVFG\Sucursal;
use Session;
use Redirect;
use View;

class primeraSucController extends Controller
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
    public function store(Request $request)
    {
      Cargo::create([
        'nombreCargo'=>'Administrador',
      ]);

      Sucursal::create([
        'nombreSuc'=>$request['nombreSuc'],
        'representanteSuc'=>$request['representanteSuc'],
        'direccionSuc'=>$request['direccionSuc'],
        'telefonoSuc'=>$request['telefonoSuc'],
      ]);
      $cargos=Cargo::All();
      $sucursals=Sucursal::All();
      return view('primero/formulario/frmEmpleado',compact('sucursals','cargos'));
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
