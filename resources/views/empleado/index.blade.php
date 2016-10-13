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
        <h3 class="box-title">Administración de Empleados</h3>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("EmpleadoController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("EmpleadoController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("EmpleadoController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped buscar">
          <thead>
            <tr>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Dirección</th>
              <th>Teléfono</th>
              <th>Contratación</th>
              <th>Acción</th>
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
                  <td><center>
                    {!!link_to_route('empleado.edit',$title=' Editar', $parametro=$empleado->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}
                    @if($empleado->estadoEmp==1)
                      @include('empleado.darDeBaja')
                    @else
                      @include('empleado.habilitar')
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
