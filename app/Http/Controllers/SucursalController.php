<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;
use SICVFG\Http\Requests;
use SICVFG\Http\Requests\SucursalRequest;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Sucursal;
use Session;
use Redirect;
use View;
use DB;


class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sucursals= \SICVFG\Sucursal::All();
       return view ('sucursal.index',compact('sucursals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('sucursal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SucursalRequest $request)
    {
      Sucursal::create([
        'nombreSuc'=>$request['nombreSuc'],
        'representanteSuc'=>$request['representanteSuc'],
        'direccionSuc'=>$request['direccionSuc'],
        'telefonoSuc'=>$request['telefonoSuc'],
      ]);
      return redirect('/sucursal')->with('mensaje','Registro guardado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sucursals= Sucursal::find($id);
      return view('sucursal.edit',compact('sucursals'));
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
      $sucursal =Sucursal::find($id);
      $sucursal->fill($request->all());
      $sucursal->save();

      Session::flash('mensaje1','Sucursal editada correctamente');
      return Redirect::to('/sucursal');
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

    public function desactivo($id)
    {
        $sucursals=DB::select('SELECT * FROM sucursals where estadoSuc=0 ');
        return view('sucursal.index',compact('sucursals'));
    }
    public function activo($id)
    {
        $sucursals=DB::select('SELECT * FROM sucursals where estadoSuc=1 ');
        return view('sucursal.index',compact('sucursals'));
    }
}
