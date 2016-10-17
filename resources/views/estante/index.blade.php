@extends('layouts.principal1')

@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
<div class="alert alert-warning" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje1')}}
</div>
@endif
@section('content')
<div class="row">

  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Estantes</h3>
        </div>
      {!!link_to_action("frontController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
       <div class="box-body">
        <table id="example1" class="table table-bordered table-striped buscar">

  <thead>
    <th>nombre Estante</th>
    <th>ubicacion Estante</th>
    <th>estado Estante</th>
    

  </thead>
  @foreach ($estante as $estante)
  <tbody>
    <td>{{$estante->nombreEst}}</td>
    <td>{{$estante->ubicacionEst}}</td>
    <td>{{$estante->estadoEst}}</td>
    
                     


    <td>
      {!!link_to_route('estante.edit',$title='Editar', $parametro=$estante->id,$atributo=['class'=>'btn btn-primary'])!!}
    </td>
<td>@include('estante.eliminar')</td>

  </tbody>
  @endforeach
</table>
   </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->


@stop
