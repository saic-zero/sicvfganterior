<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Requests\LoginRequest;
use SICVFG\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;
use Crypt;
use SICVFG\User;
use SICVFG\Empleado;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
// {{-- imagenesEmpleados/{{!!Auth::user()->nombre_img!!}} --}}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Auth::attempt(['name'=>$request['name'],'password'=>$request['password']])){
        $emp=$request['name'];
        $estadoUsuario=User::where('name',$emp)->get(); //obtengo el estado del usuario a ingresar
        $autorizado=$estadoUsuario->last()->estadoUsu;
          if($autorizado==1){ //si el estado del uuario es 1 es por que esta activo y puede ingresar al sistema
            $datos=Empleado::where('codEmpleado',$emp)->get(); //obtengo los datos del usuario a ingresar al sistema
            $nombre=$datos->last()->nombresEmp; //obtengo el nombre del empleado
            $apellido=$datos->last()->apellidosEmp;
                return view('index',compact('nombre','apellido'));
          }else{
            return redirect('/')->with('mensaje','El usuario que intenta acceder al sistema no esta activo');
          }

        }else{
            return redirect('/')->with('mensaje','Sus credenciales no son válidas');
        }
    }

public function logout()
{
  Auth::logout();
  return Redirect::to('/');
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
