<?php
namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Categoria;
use DB;
use Session;
use Redirect;
use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Http\Requests\CategoriaCreateRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $estado=2;
      $categorias= \SICVFG\Categoria::all();
        //Accedemos al modelo a extraer los datos que necesitamos
       return view ('categoria.index',compact('categorias','estado'));
        //Enviamos la informacion obtenida en la variable categoria  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(CategoriaCreateRequest $request)
    {
      \SICVFG\Categoria::create([
    //primer parametro es el campo de BD y el segundo es el del formulario
      'nombreCategoria'=>$request['nombreCategoria'],
      ]);
      return redirect('/categoria')->with('mensaje','Categoria Agregada con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//El metodo show se utilizara en este caso para habilitar
    {
        
        $categorias=\SICVFG\Categoria::findOrFail($id);
        $categorias->estadoCat=1; //modificamos el estado a cero asumir que esta deshabilitado
        $producto=\SICVFG\Producto::where('categoria_id',$id)->update(['estadoProd'=>1]);
        $categorias->update();
        Session::flash('mensaje','Categoria habilitada, es posible que tuviera asociado Registros del Catálogo de Productos que tambien se habilitaron');
        return Redirect::to('/categoria');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
     {
      $categoria= \SICVFG\Categoria::find($id);
      return view('categoria.edit',['categoria'=>$categoria]);
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
        $categoria= \SICVFG\Categoria::find($id);
        $categoria->fill($request->all());
        $categoria->save();

        Session::flash('mensaje','Categoria Editado con Exito');
        return Redirect::to('/categoria');
    }

    /**
     * Remove the specified resource from storage  *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias=\SICVFG\Categoria::findOrFail($id);
        $categorias->estadoCat=0; //modificamos el estado a cero asumir que esta deshabilitado
        $producto=\SICVFG\Producto::where('categoria_id',$id)->update(['estadoProd'=>0]);
        $categorias->update();
        Session::flash('mensaje','Categoria deshabilitada, es posible que tuviera asociado Registros del Catálogo de Productos que tambien se deshabilitaron');
        return Redirect::to('/categoria');

    }

    public function desactivo($id)
    {
       $estado=0;
       $categorias=DB::select('SELECT * FROM categorias where estadoCat=0 ');
       return view('categoria.index',compact('categorias','estado'));
    }
    public function activo($id)
    {
        $estado=1;
       $categorias=DB::select('SELECT * FROM categorias where estadoCat=1 ');
       return view('categoria.index',compact('categorias','estado'));

    }
}
