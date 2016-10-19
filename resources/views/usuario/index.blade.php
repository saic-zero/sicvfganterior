
@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-success" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
  {{Session::get('mensaje')}}
</div>
@endif
<div class="row">
  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Administración de Usuarios</h3>
      </div><!-- /.box-header -->
      <br>
      {{-- {!!link_to_action("UsuarioController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!} --}}
      {!!link_to_action("UsuarioController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("UsuarioController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_route('usuario.create',$title='Nuevo', $parametro= 1, $attributes = ["class"=>"btn bg-olive"])!!}
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th bgcolor="#e5eef7">FOTO</th>
              <th bgcolor="#e5eef7">USUARIO</th>
              <th bgcolor="#e5eef7">NOMBRE</th>
              <th bgcolor="#e5eef7">CORREO</th>
              <th bgcolor="#e5eef7">T/CUENTA</th>
              <th bgcolor="#e5eef7">ACCION</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($users as $user)
          <tr>
            <td>
              <div class="pull-left image">
    						<img src="http://localhost:8000/imagenesUsuarios/{{$user->nombre_img }}" class="img-circle" alt="User Image" width="40px" height="40px">
    					</div>
            </td>
            <td>{{$user->name}}</td>
            <td>{{$user->nombresEmp.' '.$user->apellidosEmp}}</td>
            <td>{{$user->email}}</td>
            @if($user->tipoCuenta==1)
            <td>Administrador</td>
          @else
            <td>Vendedor</td>
          @endif
            <td>
              <div align="center">
                <table>
                  <tr>
                    <td>{!!link_to_route('usuario.edit',$title='Editar', $parametro=$user->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                    <td>
                    @if($user->estadoUsu==1)
                      @include('usuario.darDeBaja')
                    @else
                      @include('usuario.habilitar')
                    @endif
                  </td>
                </tr>
              </table>
            </div><!-- fin tabla que centra los botones-->
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
