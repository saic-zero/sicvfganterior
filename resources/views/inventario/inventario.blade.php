
@extends('layouts.principal1')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box box-info">
      <br>
      <center>
        <div class="box-header">
          <h3 >Inventario de Medicamentos </h3>
        </div><!-- /.box-header -->
      </center>
      <div class="box-body">
        <table id="" class="table table-bordered table-striped">
          <center>
            <thead>
              <tr>
                <th bgcolor="#e5eef7">N° LOTE</th>
                <th bgcolor="#e5eef7">PRODUCTO</th>
                <th bgcolor="#e5eef7">PRESENTACIÓN</th>
                <th bgcolor="#e5eef7">CANTIDAD</th>
                <th bgcolor="#e5eef7">CADUCIDAD</th>
                <th bgcolor="#e5eef7">P/MIN/V</th>
                <th bgcolor="#e5eef7">P/MAX/V</th>
                <th bgcolor="#e5eef7">UBICACIÓN</th>
              </tr>
           </thead>
          <tbody class="buscar">
            <div class="input-group col-xs-3">
              <div class="input-group-addon" style="yellow">
                <i class="glyphicon glyphicon-search"></i>
                </div>
            <input id="filtrar" name="name" type="text" placeholder="Buscar" class="form-control" >
          </div>
          <br>
          @foreach($detallecompras as $d)
          <?php $aux=$d->id;
                $cantidad=$d->cantidad;
                $fecha=explode('-', $d->fechaVencimiento);
                //obtener el total de unidades vendidas de un medicamento
                $cant=$detalle->productoVendido($d->id,$d->lote);
                // se resta la cantidad comprada menos las cantidades vendidas
                $existencias=$d->cantidad-$cant;
            ?>
                @if($existencias>0)
                <tr>
                  <td>{{$d->lote}}</td>
                  <td>{{$detalle->nombreProd($d->producto_id)}}</td>
                  <td>{{$detalle->nombrePresentacion($d->presentacion_id)}}</td>
                  <td>{{$existencias}}</td>
                  <td>{{$fecha[2].'-'.$fecha[1].'-'.$fecha[0]}}</td>
                  <td>{{$d->precioMinVenta}}</td>
                  <td>{{$d->precioMaxVenta}}</td>
                  <td>{{$detalle->nombreEstante($d->estante_id)}}</td>
                </tr>
              @endif
            @endforeach
          </center>
          </tbody>
        </table>
        {!! str_replace ('/?', '?', $detallecompras) !!}
      </div><!-- /.box-body -->
    </div><!-- /.box success -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
