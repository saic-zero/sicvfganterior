

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
        </td>
        <h3 class="box-title"  font-weight:"bold">Administración de Compras</h3>
      </div><!-- /.box-header -->
       {!!link_to_route('compras.create',$title='Nueva', $parametro= 1, $attributes = ["class"=>"btn bg-olive "])!!}
     <br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
             <th  bgcolor="#e5eef7" >Nº COMPROBANTE</th>
             <th  bgcolor="#e5eef7" >VENDEDOR</th>
             <th  bgcolor="#e5eef7" >T/COMPRA</th>
             <th  bgcolor="#e5eef7" >MONTO</th>
              <th  bgcolor="#e5eef7" >FECHA</th>
              <th  bgcolor="#e5eef7" >DESCRIPCIÓN</th>
              <th  bgcolor="#e5eef7" >ACCIÓN</th>
            </tr>
          </thead>
           <tbody>
           @foreach ($compras as $compras)
             <?php	$datos=explode('-', $compras->fechaCompra);?>
                <tr>
                  <td>{{$compras->numComprobanteCompra}}</td>
                  <td>{{$compras->nombreVen($compras->vendedor_id)}}</td>
                  <td>{{$compras->tipoCompra}}</td>
                  <td>{{$compras->totalCompra}}</td>
                  <td>{{$datos[2].'/'.$datos[1].'/'.$datos[0]}}</td>
                  <td>{{$compras->descripcionCompra}}</td>
                  <td>
                    <div align="center">
                      <table>
                        <tr>
                          <td>{!!link_to_route('compras.show',$title=' Ver Compra', $parametro=$compras->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-eye-open'])!!}</td>
                        </tr>
                      </table>
                    </div><!-- fin tabla que centra los botones-->
                  </td>
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
