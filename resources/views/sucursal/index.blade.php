@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-success " role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif
<div class="row">
  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Administración de Sucursales</h3>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("SucursalController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("SucursalController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("SucursalController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_route('sucursal.create',$title='Nueva', $parametro= 1, $attributes = ["class"=>"btn bg-olive"])!!}
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th bgcolor="#e5eef7">Sucursal</th>
              <th bgcolor="#e5eef7">Representante</th>
              <th bgcolor="#e5eef7">Telefono</th>
              <th bgcolor="#e5eef7">Dirección</th>
             <th bgcolor="#e5eef7">Acción</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($sucursals as $sucursal)
          <tr>
            <td>{{$sucursal->nombreSuc}}</td>
            <td>{{$sucursal->representanteSuc}}</td>
            <td>{{$sucursal->telefonoSuc}}</td>
            <td>{{$sucursal->direccionSuc}}</td>
            <td>
              <div align="center">
                <table>
                  <tr>
                     <td>{!!link_to_route('sucursal.edit',$title=' Editar', $parametro=$sucursal->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                      <td>
                      @if($sucursal->estadoSuc==1)
                        @include('sucursal.darDeBaja')
                      @else
                        @include('sucursal.habilitar')
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
