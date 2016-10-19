
@extends('layouts.principal1')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-success" role="alert" >
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
        
        <h3 class="box-title"  font-weight:"bold">Administración de Estantes</h3>
        
      </div><!-- /.box-header -->
      {!!link_to_action("EstanteController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("EstanteController@activo", $title = "Activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("EstanteController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_route('estante.create',$title='Nuevo', $parametro= 1, $attributes = ["class"=>"btn bg-olive "])!!}  

       

      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>   
                      <th bgcolor="#e5eef7" >NOMBRE</th>
                      <th bgcolor="#e5eef7" >UBICACION </th>
                      <th bgcolor="#e5eef7">ACCION</th>
            </tr>
          </thead>
           <tbody>
         @foreach ($estante as $estante)
                <tr>
                     <td>{{$estante->nombreEst}}</td>
                     <td>{{$estante->ubicacionEst}}</td>
               
                    @if($estante->estadoEst==1)
                      <td>
                          <div align="center">
                            <table>
                                <tr>
                                    <td>{!!link_to_route('estante.edit',$title='Editar', $parametro=$estante->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                                    <td>@include('estante.DESHABILITAR')</td>
                                </tr>
                          </table>
                        </div><!-- fin tabla que centra los botones-->
                      </td>
                  @else
                      <td>
                          <div align="center">
                            <table>
                                <tr>  <td>{!!link_to_route('estante.edit',$title='Editar', $parametro=$estante->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                                    <td>@include('estante.HABILITAR')</td>
                                </tr>
                          </table>
                        </div><!-- fin tabla que centra los botones-->
                      </td>
                  @endif
                  </td>
                </tr>
            @endforeach
            </tbody><!-- El foreach debe ir dentro de tbody para que funcionen las busquedas de las tablas -->
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop

