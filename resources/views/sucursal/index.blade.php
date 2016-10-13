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
            <h3 class="box-title">Administración de Sucursales</h3>
          </div><!-- /.box-header -->
          <br>
          {!!link_to_action("SucursalController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-nuevo"])!!}
          {!!link_to_action("SucursalController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-nuevo"])!!}
          {!!link_to_action("SucursalController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-nuevo"])!!}
          <br><br>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped buscar">
              <thead>
                <tr>
                  <th>Sucursal</th>
                  <th>Representante</th>
                  <th>Telefono</th>
                  <th>Dirección</th>
                <center>  <th>Acción</th></center>
                </tr>
              </thead>
              <tbody>
              @foreach ($sucursals as $sucursal)
                  <tr>
                    <td>{{$sucursal->nombreSuc}}</td>
                    <td>{{$sucursal->representanteSuc}}</td>
                    <td>{{$sucursal->telefonoSuc}}</td>
                    <td>{{$sucursal->direccionSuc}}</td>
                    <td><center>
                      {!!link_to_route('sucursal.edit',$title=' Editar', $parametro=$sucursal->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}
                      @if($sucursal->estadoSuc==1)
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
