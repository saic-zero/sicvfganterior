
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
        
       {!!link_to_action("CompraController@index", $title = "Atras", $parameters = $compraObtenida->id, $attributes = ["class"=>"btn btn-danger"])!!}
      <br>
      <center>
          <div class="box-header">
            <h3 >Datos de Compra con N° Comprobante: {{$compraObtenida->numComprobanteCompra}} </h3>
            <br>
          </div><!-- /.box-header -->
      </center>
          <div class="box-header">
           <h3 class="box-title">Vendedor :  {{$compraObtenida->nombreVen($compraObtenida->vendedor_id)}} </h3>
            <br> <br>
           <h3 class="box-title">Con Fecha de Registro:  {{$compraObtenida->fechaCompra}} </h3>
            <br><br>
          </div><!-- /.box-header -->
    

      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <center>
                  <thead>
                      <tr>
                        <th bgcolor="#e5eef7">N° LOTE</th>
                         <th bgcolor="#e5eef7">PRODUCTO</th>
                          <th bgcolor="#e5eef7">PRESENTACION</th> 
                         <th bgcolor="#e5eef7">CANTIDAD</th>
                         <th bgcolor="#e5eef7">F/VENCIMIENTO</th>
                          <th bgcolor="#e5eef7">P/COMPRA</th>
                          <th bgcolor="#e5eef7">P/MIN/V</th> 
                          <th bgcolor="#e5eef7">P/MAX/V</th> 
                          <th bgcolor="#e5eef7">UBICACION</th>
                      </tr>
                 </thead>

          <tbody>
          @foreach($detalleObtenido as $d)
           <tr>
                
                             <td>{{$d->lote}}</td>
                             <td>{{$d->nombreProd($d->producto_id)}}</td>
                              <td>{{$d->nombrePresentacion($d->presentacion_id)}}</td>
                             <td>{{$d->cantidad}}</td>
                              <td>{{$d->fechaVencimiento}}</td>
                              <td>{{$d->precioCompra}}</td>
                               <td>{{$d->precioMinVenta}}</td>
                                <td>{{$d->precioMaxVenta}}</td>
                                <td>{{$d->nombreEstante($d->estante_id)}}</td>
               
           </tr>  
            @endforeach  
             </center>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
