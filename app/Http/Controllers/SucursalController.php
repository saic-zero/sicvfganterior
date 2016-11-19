<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;
use SICVFG\Http\Requests;
use SICVFG\Http\Requests\SucursalRequest;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Sucursal;
use SICVFG\Bitacora;
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
      $sucursals=DB::select('SELECT * FROM sucursals where estadoSuc=1 ');
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
      Bitacora::bitacora("Registro de nueva sucursal: ".$request['nombreSuc']);
      return redirect('/sucursal')->with('mensaje','Registro guardado con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $sucursals=\SICVFG\Sucursal::findOrFail($id);
      $sucursals->estadoSuc=1; //modificamos el estado
      $sucursals->update();
      Bitacora::bitacora("Sucursal  ".$sucursals['nombreSuc']." Habilitada");
      Session::flash('mensaje','Sucursal Habilitada con Éxito');
      return Redirect::to('/sucursal');
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
      Bitacora::bitacora("Modificación de sucursal: ".$request['nombreSuc']);
      Session::flash('mensaje','Sucursal editada correctamente');
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

      $suc=DB::select('select * from sucursals');
          $cuenta=0;
          foreach ($suc as $su) {
            $cuenta=$cuenta+1;
          }
          if($cuenta<=1){
            Session::flash('mensaje','No se puede dar de baja la Sucursal porque solo hay una');
            return Redirect::to('/sucursal');

          }else{
            $sucursals=\SICVFG\Sucursal::findOrFail($id);
            $sucursals->estadoSuc=0; //modificamos el estado
            $sucursals->update();
            Bitacora::bitacora("Sucursal ".$sucursals['nombreSuc']." Deshabilitada");
            $empleado=\SICVFG\Empleado::where('sucursal_id',$id)->update(['estadoEmp'=>0]);
            Session::flash('mensaje','Sucursal Deshabilitada con Éxito, es posible que tuviera empleados registrados los cuales tambien se deshabilitaron');
            return Redirect::to('/sucursal');
          }


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
