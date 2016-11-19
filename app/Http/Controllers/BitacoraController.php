<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Bitacora;
use SICVFG\Empleado;
use SICVFG\User;
use Session;
use DB;
use Redirect;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bitacoras=Bitacora::buscar();
      $empleado = new Empleado;
      $users=User::All();
      return view('bitacora.index',compact('bitacoras','empleado','users'));
    }

    public function reporteBitacora(Request $request)
    {
       $fch1=$request->fechaInicial;
       $fch2=$request->fechaFinal;
       $us=$request->usuario;
      $bitacoras = Bitacora::where('usuario_id',$us)->get();
        // $bitacoras=DB::select('SELECT * FROM bitacoras where usuario_id',2);
      // $bitacoras =Bitacora::All();
      $empleado = new Empleado;
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="bitacora.reporteBitacora";
      $view =  \View::make($vistaurl, compact('bitacoras', 'date','date1','empleado','fch1','fch2'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
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
        //
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
