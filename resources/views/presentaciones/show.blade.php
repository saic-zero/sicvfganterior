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


    <div class="box box-success">
      <div class="box-header">
        <center>
        <h2 class="box-title">Administración de Presentaciones de:</h2>
        <h2> {{ $nombre }}</h2>
        </center>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("ProductoController@show", $title = "Atras", $parameters = $producto, $attributes = ["class"=>"btn btn-danger"])!!}
    <!--   {!!link_to_action("PresentacionesController@todos", $title = "Todos", $parameters = $producto, $attributes = ["class"=>"btn bg-olive"])!!} -->
      {!!link_to_action("PresentacionesController@activo", $title = "activos", $parameters = $producto, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("PresentacionesController@desactivo", $title = "Desactivos", $parameters = $producto, $attributes = ["class"=>"btn bg-olive"])!!}
    
      @if( $estado==1)
      {!!link_to_action("PresentacionesController@crear",$title='Nueva', $parametro=$producto, $attributes = ["class"=>"btn bg-olive"])!!}   
      @endif
      <br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
          <th bgcolor="#e5eef7" >N°</th>
          <th bgcolor="#e5eef7" >NOMBRE</th>
          <th bgcolor="#e5eef7" >EQUIVALENCIA (Unidades)</th>
          <th bgcolor="#e5eef7" >ACCION</th>
        </tr>
          </thead>
         <?php $a = 1; ?>
       
        @foreach($presentacion as $c)
             @if($nombre)  
                @if($c->estadoPres==1 && $estado==1)
                <tr>
                  <td>{{$a}}</td>
                  <td>{{$c->nombrePre}}</td>
                  <td><center>{{$c->equivale}}</center></td>
                     <td>
                              <div align="center">
                                <table>
                                    <tr>
                                        <td>{!!link_to_route('presentaciones.edit',$title=' Editar', $parametro=$c->id,$atributo=['class'=>'btn btn-primary  glyphicon glyphicon-edit'])!!}</td>
                                        <td>@include('presentaciones.DESHABILITAR')</td>
                                    </tr>
                              </table>
                            </div><!-- fin tabla que centra los botones-->
                          </td>
                </tr>
                <?php $a++; ?>
                @endif
              @endif


               @if($nombre)  
                   @if($c->estadoPres==0 && $estado==0)
                  <tr>
                    <td>{{$a}}</td>
                    <td>{{$c->nombrePre}}</td>
                    <td><center>{{$c->equivale}}</center></td>
                       <td>
                                <div align="center">
                                  <table>
                                      <tr>
                                          <td>{!!link_to_route('presentaciones.edit',$title=' Editar', $parametro=$c->id,$atributo=['class'=>'btn btn-primary  glyphicon glyphicon-edit'])!!}</td>
                                          <td>@include('presentaciones.HABILITAR')</td>
                                      </tr>
                                </table>
                              </div><!-- fin tabla que centra los botones-->
                            </td>
                  </tr>
                  <?php $a++; ?>
                  @endif
               @endif
        @endforeach
          
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
  <div id="act">
        {!! str_replace ('/?', '?', $presentacion) !!}
      </div>

@stop

