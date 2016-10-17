
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
        
        {!!link_to_action("ProductoController@index", $title = "Atras", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
        {!!link_to_route('presentaciones.show',$title=' Presentaciones', $parametro=$c->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-plus'])!!}
        {!!link_to_route('producto.edit',$title=' Editar', $parametro=$c->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-refresh'])!!}
        
      <br>
      <center>
          <div class="box-header">
            <h3 class="box-title">Datos de:</h3>
            <h2> {{$c->nombreProd}}</h2>
          </div><!-- /.box-header -->
      </center>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <center>
                <?php
                $id = $c->id;
                $xy = str_pad($id,10,"0",STR_PAD_LEFT);
                ?>

                  <thead>
                      <tr>
                        <th bgcolor="#e5eef7">N°</th>
                         <th bgcolor="#e5eef7">NOMBRE</th>
                         <th bgcolor="#e5eef7">DATO</th>
                      </tr>
                 </thead>

                
                <!--  <tr>
                      <td>
                        <div class="srow">
                        <span>Identificador</span>
                      </td>
                      <td>
                        <span>{!! $xy !!}</span>
                      </div>
                      </td>
                  </tr>
 -->              <tbody>
                    <tr>
                      <td>1</td>
                      <td>
                       
                        <span>Código de Barra</span>
                      </td>
                      <td>
                        <span>{!!$c->codProducto!!}</span>
                   
                      </td>
                  </tr>

                   <tr>
                      <td>2</td>
                      <td>
                      
                        <span>Nombre del Producto</span>
                      </td>
                      <td>
                        <span>{!! $c->nombreProd !!}</span>
                     
                      </td>
                  </tr>

                   <tr>
                     <td>3</td>
                      <td>
                        
                        <span>Descripción</span>
                      </td>
                      <td>
                          <span>{!! $c->descripcionProd !!}</span>
                     
                      </td>
                  </tr>
                     
                  <tr>
                      <td>4</td>
                      <td>
                   
                        <span>Categoría</span>
                      </td>
                      <td>
                         <span>{!! $c->nombreCategorias($c->categoria_id) !!}</span>
                 
                      </td>
                  </tr>

                    <tr>
                      <td>5</td>
                      <td>
                        
                        <span>Stock Minímo</span>
                      </td>
                      <td>
                          <span>{!! $c->stockMinimo !!}</span>
                     
                      </td>
                  </tr>

                   <tr>
                      <td>6</td>
                      <td>
                        
                        <span>Stock Maxímo</span>
                      </td>
                      <td>
                          <span>{!! $c->stockMaximo !!}</span>
                     
                      </td>
                  </tr>

                   <tr>
                      <td>8</td>
                      <td>
                     
                         <span>Presentaciones</span> 
                      </td>
                      <td>
                          <span>
                          <?php $ayu = $cant; ?>
                          @foreach($pp as $l)
                          <br>
                              {{$l->nombrePre}}
                              {{$l->equivale}}
                            
                          @endforeach
                        </span> 
                   
                      </td>
                  </tr>

                  
             </center>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
