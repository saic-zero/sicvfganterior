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
        <h3 class="box-title">Administración de Empleados</h3>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("EmpleadoController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("EmpleadoController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("EmpleadoController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_route('empleado.create',$title='Nuevo', $parametro= 1, $attributes = ["class"=>"btn bg-olive"])!!}
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th bgcolor="#e5eef7">Nombres</th>
              <th bgcolor="#e5eef7">Apellidos</th>
              <th bgcolor="#e5eef7">Dirección</th>
              <th bgcolor="#e5eef7">Teléfono</th>
              <th bgcolor="#e5eef7">Contratación</th>
              <th bgcolor="#e5eef7">Acción</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($empleados as $empleado)
          <?php	$datos=explode('-', $empleado->fechaIngrSuc);?>
          <tr>
            <td>{{$empleado->nombresEmp}}</td>
            <td>{{$empleado->apellidosEmp}}</td>
            <td>{{$empleado->direccionEmp}}</td>
            <td>{{$empleado->telefonoEmp}}</td>
            <td>{{$datos[2].'/'.$datos[1].'/'.$datos[0]}}</td>
            <td>
              <div align="center">
                <table>
                  <tr>
                   <td>{!!link_to_route('empleado.edit',$title=' Editar', $parametro=$empleado->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                    <td>
                      @if($empleado->estadoEmp==1)
                        @include('empleado.darDeBaja')
                      @else
                        @include('empleado.habilitar')
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
