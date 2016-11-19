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
use SICVFG\Bitacora;
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
      $empleados=DB::select('SELECT * FROM empleados where estadoEmp=1 ');
        return view('empleado.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursals=DB::select('SELECT * FROM sucursals where estadoSuc=1 ');
        $cargos=DB::select('SELECT * FROM cargos where estadoCargo=1 ');
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
      Bitacora::bitacora("Registro de nuevo Empleado: ".$request['codEmpleado']);
      return redirect('/empleado')->with('mensaje','Empleado registrado con éxito');
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
      $idSucursal=$empleados->sucursal_id;
      $sucursal=\SICVFG\Sucursal::findOrFail($idSucursal);
      $estadoSucursal=$sucursal->estadoSuc;
      if ($estadoSucursal==1) {
        $empleados->estadoEmp=1; //modificamos el estado a uno asumir que esta habilitado
        $empleados->update();
        Bitacora::bitacora("Empleado ".$empleados['codEmpleado']." Habilitado");
        Session::flash('mensaje','Empleado Habilitado con Éxito');
        return Redirect::to('/empleado');
      }else{
        Session::flash('mensaje','El empleado no se ha Habilitado ya que la sucursal a la que pertenece esta Inactiva');
        return Redirect::to('/empleado');
      }

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
      Bitacora::bitacora("Modificación de empleado: ".$request['codEmpleado']);
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
      $usuario=\SICVFG\User::where('user_id',$id)->update(['estadoUsu'=>0]);
      Bitacora::bitacora("Empleado ".$empleados['codEmpleado']." Deshabilitado");
      Session::flash('mensaje','Empleado  deshabilitado, es  posible que tuviera asociado ua cuenta de usuario que tambien se deshabilito');
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
    public function reporte()
    {
      $empleados=Empleado::all();
      $cargo = new Cargo;
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="empleado.reporte";
      $view =  \View::make($vistaurl, compact('empleados', 'date','date1','cargo'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }

}
