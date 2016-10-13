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
        <h3 class="box-title">Administración de Cargos</h3>
      </div><!-- /.box-header -->
      <br>
        <button class="btn bg-olive">
          <span class=""></span> Todos
        </button>
        <button class="btn bg-olive">
          <span class=""></span> Activos
        </button>
        <button class=" btn bg-olive">
          <span class=""></span> Desactivos
        </button>
        <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped buscar">
          <thead>
            <tr>
              <th>Cargo</th>
              <th>Accion</th>
            </tr>
          </thead>
          @foreach($cargos as $cargo)
          <tbody>
            <tr>
              <td>{{$cargo->nombreCargo}}</td>
              <td> <center>
                {!!link_to_route('cargo.edit',$title=' Editar', $parametro=$cargo->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}

                  <button class="warning cancel delete-modal btn btn-danger">
                    <span class="glyphicon glyphicon-arrow-down"></span> Dar de baja
                  </button>
                </center>
              </td>
            </tr>
            </tbody>
            @endforeach
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
@stop
