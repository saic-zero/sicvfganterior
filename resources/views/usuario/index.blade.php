
@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif
@if (Session::has('mensaje1'))
<div class="alert alert-warning" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje1')}}
</div>
@endif

<div class="row">

  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Administración de Usuarios</h3>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("UsuarioController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("UsuarioController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("UsuarioController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped buscar">
          <thead>
            <tr>
              <th>Usuario</th>
              <th>Nombre</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->nombresEmp.' '.$user->apellidosEmp}}</td>
                  <td> <center>
                    {!!link_to_route('usuario.edit',$title='Editar', $parametro=$user->id,$atributo=['class'=>'btn btn-primary'])!!}
                    @if($user->estadoUsu==1)
                        <button class="warning cancel delete-modal btn btn-danger">
                          <span class="glyphicon glyphicon-trash"></span> Dar de baja
                        </button>
                      @else
                        <button class="warning cancel delete-modal btn btn-danger">
                          <span class="glyphicon glyphicon-trash"></span> Activar
                        </button>
                      @endif
                  </center>
                  </td>
                </tr>
          @endforeach
            </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
