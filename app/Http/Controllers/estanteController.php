<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Usuario;
use SICVFG\Empleado;
use SICVFG\Estante;
use DB;
use Session;
use Redirect;
use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;


class estanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado=2;
      $estante= \SICVFG\Estante::All();
        return view('estante.index',compact('estante','estado'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $estante=Estante::All();
      return view('estante.create',compact('estante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
      Estante::create([
        'nombreEst'=>$request['nombreEst'],
         'ubicacionEst'=>$request['ubicacionEst'],
        'estadoEst'=>1,
        
      ]);
      return redirect('/estante')->with('mensaje','registrado con éxito');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $estante=\SICVFG\Estante::findOrFail($id);
        $estante->estadoEst=1; //modificamos el estado 
        $estante->update();
        Session::flash('mensaje','Estante habilitado con exito ');
        return Redirect::to('/estante');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $estante=\SICVFG\Estante::find($id);
       return view('estante.edit',['estante'=>$estante]);

     
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
        $estante= Estante::find($id);
        $estante->fill($request->all());
        $estante->save();

        Session::flash('mensaje','Estate editado correctamente');
        return Redirect::to('/estante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estante=\SICVFG\Estante::findOrFail($id);
        $estante->estadoEst=0; //modificamos el estado 
        $estante->update();
        Session::flash('mensaje','Estante deshabilitado con exito ');
        return Redirect::to('/estante');
    }

       public function desactivo($id)
    {
       $estado=0;
       $estante=DB::select('SELECT * FROM estantes where estadoEst=0 ');
       return view('estante.index',compact('estante','estado'));
    }
    
    public function activo($id)
    {  
      $estado=1;
       $estante=DB::select('SELECT * FROM estantes where estadoEst=1 ');
       return view('estante.index',compact('estante','estado'));
     }
}
