@extends('layouts.principal1')

@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif

@section('content')
 <td>
 <center>
     {!!link_to_action("detallecompraController@index", $title = "Ver Detalle de Compras", $parameters = 1, $attributes = ["class"=>"btn btn-primary"])!!}
 </center>
</td>
<table class="table">
  <thead>
    <th>Comprobante</th>
    <th>TipoCompra</th>
    <th>FechaCompra</th>
    <th>Descripcion</th>
    <th>Proveedor</th>
    <th>Usuario</th>
  </thead>
  @foreach ($compras as $compras)
  <tbody>
  <tr>
    <td>{{$compras->numComprobanteCompra}}</td>
    <td>{{$compras->tipoCompra}}</td>
    <td>{{$compras->fechaCompra}}</td>
    <td>{{$compras->descripcionCompra}}</td>
    <td>{{$compras->proveedor_id}}</td>
    <td>{{$compras->usuario_id}}</td>
                     


    <td>
      {!!link_to_route('compras.edit',$title='Editar', $parametro=$compras->id,$atributo=['class'=>'btn btn-primary'])!!}

    </td>
<td>@include('compras.eliminar')</td>
</tr>
  </tbody>
  @endforeach
</table>


@stop
