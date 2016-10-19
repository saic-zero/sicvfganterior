@extends('layouts.principal1')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Datos sobre detalle de compra       </h3>
         {!!link_to_action("compraController@index", $title = "Ver Detalle de Compras", $parameters = 1, $attributes = ["class"=>"btn btn-primary"])!!}
      </div><!-- /.box-header -->
      <div class="box-body">
      <td>
 <center>
    
 </center>
</td>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
    <th>IdProducto</th>
    <th>cantidad</th>
    <th>precio de Compra</th>
    <th>precio Minimon de Venta</th>
    <th>precio Maximo de Venta</th>
    <th>fecha deVencimiento</th>
    <th>Numero de lote</th>
    <th>Id compra</th>
    <th>Id estante</th>
  </tr>
 </thead>
 
  </thead>
  @foreach ($detallecompras as $detallecompras)
  <tbody>
    <td>{{$detallecompras->producto_id}}</td>
    <td>{{$detallecompras->cantidad}}</td>
    <td>{{$detallecompras->precioCompra}}</td>
    <td>{{$detallecompras->precioMinVenta}}</td>
    <td>{{$detallecompras->precioMaxVenta}}</td>
    <td>{{$detallecompras->fechaVencimiento}}</td>
    <td>{{$detallecompras->lote}}</td>
    <td>{{$detallecompras->compra_id}}</td>
    <td>{{$detallecompras->estante_id}}</td>
                     


    <td>
      {!!link_to_route('detallecompras.edit',$title='Editar', $parametro=$detallecompras->id,$atributo=['class'=>'btn btn-primary'])!!}
    </td>
<td>@include('detallecompras.eliminar')</td>

    </tr>
          </tbody>
          @endforeach
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->

@stop