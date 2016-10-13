
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
      <center>
        <div class="box-header">
          <h3 class="box-title">Administración de Productos</h3>
        </div><!-- /.box-header -->
      </center>
      <br>
      
      {!!link_to_action("frontController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
      {!!link_to_action("ProductoController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("ProductoController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("ProductoController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
       @if($estado==2)
      {!!link_to_route('producto.create',$title='Nuevo', $parametro= 1, $attributes = ["class"=>"btn bg-olive"])!!}   
       @endif
      
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
               <th bgcolor="#e5eef7">CODIGO</th>
               <th bgcolor="#e5eef7">NOMBRE</th>
               <th bgcolor="#e5eef7">CATEGORIA</th>
               <th bgcolor="#e5eef7">ACCION</th>
            </tr>
          </thead>
          @foreach ($productos as $producto)
            @if($producto->estadoProd==1 && $estado==1)
              <tbody>
                <tr>
                  <td>{{$producto->codProducto}}</td>
                  <td>{{$producto->nombreProd}}</td>
                   <td>{{$producto->nombreCategorias($producto->categoria_id)}}</td>
                  <td>
                      <div align="center">
                          <table>
                              <tr>
                                 <td>{!!link_to_route('producto.show',$title='Ver', $parametro=$producto->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>{!!link_to_route('producto.edit',$title='Editar', $parametro=$producto->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('producto.DESHABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                </tr>
              </tbody>
            @endif
           @if($producto->estadoProd==0 && $estado==0)
              <tbody>
                <tr>
                   <td>{{$producto->codProducto}}</td>
                  <td>{{$producto->nombreProd}}</td>
                  <td>{{$producto->nombreCategorias($producto->categoria_id)}}</td>
                 <td>
                     <div align="center">
                          <table>
                              <tr>
                                <td>{!!link_to_route('producto.show',$title='Ver', $parametro=$producto->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>{!!link_to_route('producto.edit',$title='Editar', $parametro=$producto->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('producto.HABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                </tr>
              </tbody>
            @endif
            @if($estado==2)
              <tbody>
                <tr>
                  <td>{{$producto->codProducto}}</td>
                  <td>{{$producto->nombreProd}}</td>
                  <td>{{$producto->nombreCategorias($producto->categoria_id)}}</td>
                    @if($producto->estadoProd==1)
                     <td>
                      <div align="center">
                          <table>
                              <tr>
                                 <td>{!!link_to_route('producto.show',$title='Ver', $parametro=$producto->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>{!!link_to_route('producto.edit',$title='Editar', $parametro=$producto->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('producto.DESHABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                  @else
                  <td>
                     <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('producto.show',$title='Ver', $parametro=$producto->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>{!!link_to_route('producto.edit',$title='Editar', $parametro=$producto->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('producto.HABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                  @endif
                </tr>
              </tbody>
            @endif
          @endforeach
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
