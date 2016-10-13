<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Input;
use SICVFG\User;
use SICVFG\Empleado;
use Session;
use Redirect;
use SICVFG\Http\Requests;
use SICVFG\Http\Requests\UsuarioCreateRequest;
use SICVFG\Http\Requests\UsuarioUpdateRequest;
use SICVFG\Http\Controllers\Controller;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users=DB::select('SELECT e.nombresEmp,e.apellidosEmp,u.name,u.estadoUsu,u.id  FROM empleados e, users u where u.user_id=e.id ');
      return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $empleados=Empleado::All();
      return view('usuario.create',compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        //obtenemos el campo file definido en el formulario
        $file = Input::file('nombre_img');
         //Creamos una instancia de la libreria instalada
         $image = \Image::make(\Input::file('nombre_img'));
         //Ruta donde queremos guardar las imagenes
         $path = public_path().'/imagenesUsuarios/';
         // Guardar Original
         $image->save($path.$file->getClientOriginalName());

      $codigoEmpleado=$request['user_id'];//obtengo lo que me envia el combo para buscar el id del empleado
      //obtengo el codigo del empleado por medio del id del combo
      $idEmpleado=Empleado::where('codEmpleado',$codigoEmpleado)->get();
      User::create([
        'name'=>$request['name'],
        'password'=> $request['password'],
        'email'=>$request['email'],
        'nombre_img'=>$file->getClientOriginalName(),
        'tipoCuenta'=>$request['tipoCuenta'],
        'user_id'=>$idEmpleado->last()->id,
      ]);
      return redirect('/usuario')->with('mensaje','Usuario ingresado correctamente');

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
      $user= User::find($id);
      $empleados=Empleado::All();
      return view('usuario.edit',compact('user','empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioUpdateRequest $request, $id)
    {
      //obtenemos el campo file definido en el formulario
      $file = Input::file('nombre_img');
       //Creamos una instancia de la libreria instalada
       $image = \Image::make(\Input::file('nombre_img'));
       //Ruta donde queremos guardar las imagenes
       $path = public_path().'/imagenesusuarios/';
       // Guardar imagen
       $image->save($path.$file->getClientOriginalName());


      //  $empleado->nombre_img=$file->getClientOriginalName(); //obtenemos el nombre del archivo

        $user= User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('mensaje1','Usuario editado correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        Session::flash('mensaje','Usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }

    public function desactivo($id)
    {
        $users=DB::select('SELECT e.nombresEmp,e.apellidosEmp,u.name,u.estadoUsu,u.id  FROM empleados e, users u where u.user_id=e.id and u.estadoUsu=0 ');
        return view('usuario.index',compact('users'));
    }
    public function activo($id)
    {
        $users=DB::select('SELECT e.nombresEmp,e.apellidosEmp,u.name,u.estadoUsu,u.id  FROM empleados e, users u where u.user_id=e.id and u.estadoUsu=1');
        return view('usuario.index',compact('users'));
    }
}
