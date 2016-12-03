
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
      <br>
       {!!link_to_action("ventaController@index", $title = "Atras", $parameters = $ventaObtenida->id, $attributes = ["class"=>"btn btn-danger"])!!}
      <center>
      <div class="col-xs-12">
          <div class="box-header">
          <h3 box-header >Datos de Venta con N° Factura: {{$ventaObtenida->numfactura}} </h3>
          </div><!-- /.box-header -->
      </div>
      </center>

      <div class="box-header">
           <h3 class="box-title">
            <pre>CAJERO :&#09;&#09;<span>{{$ventaObtenida->nombreUsuario($ventaObtenida->usuario_id)}}</span></pre>
           <?php	$datos=explode('-', $ventaObtenida->fechaVenta);?>
           <pre> FECHA DE REGISTRO: &#09;<span>{{$datos[2].'/'.$datos[1].'/'.$datos[0]}}   {{$ventaObtenida->created_at->format('g:i:s a')}}</span></pre> 
           <pre>TOTAL DE VENTA:&#09;&#09;<span>${{$ventaObtenida->totalVenta}} </span></pre>
          </h3>
      </div><!-- /.box-header -->
    
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <center>
            <thead>
              <tr>
                <th bgcolor="#e5eef7">PRODUCTO</th>
                <th bgcolor="#e5eef7">PRESENTACIÓN</th>
                <th bgcolor="#e5eef7">CANTIDAD</th>
                <th bgcolor="#e5eef7">($)P/VENTA</th>
              
              </tr>
           </thead>
          <tbody>
          @foreach($detalleObtenido as $d)
           <tr>
           
             <td>{{$d->nombreProd($d->detalleCompra_id)}}</td>
             <td>{{$d->nombrePresentacion($d->presentacion_id)}}</td>
             <td>{{$d->cantidad}}</td>
             <td>{{$d->precioventa}}</td>
            
           </tr>
            @endforeach
          </center>
          </tbody>
        </table>
      </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
