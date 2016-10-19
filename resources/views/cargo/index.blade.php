@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
  <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
  {{Session::get('mensaje')}}
  </div>
@endif
<div class="row">
  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Administración de Cargos</h3>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("CargoController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("CargoController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("CargoController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_route('cargo.create',$title='Nuevo', $parametro= 1, $attributes = ["class"=>"btn bg-olive"])!!}
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th bgcolor="#e5eef7">Cargo</th>
              <th bgcolor="#e5eef7">Accion</th>
            </tr>
          </thead>
          <tbody>
          @foreach($cargos as $cargo)
            <tr>
              <td>{{$cargo->nombreCargo}}</td>
              <td>
                <div align="center">
                  <table>
                    <tr>
                       <td>{!!link_to_route('cargo.edit',$title=' Editar', $parametro=$cargo->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                        <td>
                        @if($cargo->estadoCargo==1)
                          @include('cargo.darDeBaja')
                        @else
                          @include('cargo.habilitar')
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
