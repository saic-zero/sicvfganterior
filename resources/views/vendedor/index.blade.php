
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
      
        <h3 class="box-title"  font-weight:"bold">Administración de Vendedores (Contactos de Empresas)</h3>
       
      </div><!-- /.box-header -->
      <br>
     
     <!--  {!!link_to_action("frontController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!} -->
      {!!link_to_action("VendedorController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("VendedorController@activo", $title = "Activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("VendedorController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      @if($estado==2 || $estado==1)
      {!!link_to_route('vendedor.create',$title='Nuevo', $parametro= 1, $attributes = ["class"=>"btn bg-olive"])!!}   
       @endif
   
      <br><br>
      <div class="box-body">
           <table id="example1" class="table table-bordered table-striped buscar">
          <thead>
            <tr>
                      <th bgcolor="#e5eef7" >VENDEDOR</th>
                      <th bgcolor="#e5eef7" >EMPRESA</th>
                      <th bgcolor="#e5eef7" >DUI</th>
                      <th bgcolor="#e5eef7">CORREO</th>
                      <th bgcolor="#e5eef7">DIRECCION</th>
                      <th bgcolor="#e5eef7">TELEFONO</th>
                      <th bgcolor="#e5eef7">ACCION</th>
            </tr>
          </thead>
           <tbody>
          @foreach ($vendedors as $vendedor)
            @if($vendedor->estadoVen==1 && $estado==1)
             
                <tr>
                  
                     <td>{{$vendedor->nombreVen}}</td>
                     <td>{{$vendedor->nombreProveedor($vendedor->proveedor_id)}}</td>                    
                     <td>{{$vendedor->DUIVen}}</td>
                     <td>{{$vendedor->correoVen}}</td>
                     <td>{{$vendedor->direccionVen}}</td>
                     <td>{{$vendedor->telefonoVen}}</td>

                     <td>
                        <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('vendedor.edit',$title=' Editar', $parametro=$vendedor->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                                  <td>@include('vendedor.DESHABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                </tr>
            

            @endif
           @if($vendedor->estadoVen==0 && $estado==0)

                 <tr>
                  
                     <td>{{$vendedor->nombreVen}}</td>
                     <td>{{$vendedor->nombreProveedor($vendedor->proveedor_id)}}</td>
                     <td>{{$vendedor->DUIVen}}</td>
                     <td>{{$vendedor->correoVen}}</td>
                     <td>{{$vendedor->direccionVen}}</td>
                     <td>{{$vendedor->telefonoVen}}</td>

                     <td>
                        <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('vendedor.edit',$title=' Editar', $parametro=$vendedor->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                                  <td>@include('vendedor.HABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                </tr>
           
            @endif
            @if($estado==2)
             
                <tr>
                     <td>{{$vendedor->nombreVen}}</td>
                     <td>{{$vendedor->nombreProveedor($vendedor->proveedor_id)}}</td>
                     <td>{{$vendedor->DUIVen}}</td>
                     <td>{{$vendedor->correoVen}}</td>
                     <td>{{$vendedor->direccionVen}}</td>
                     <td>{{$vendedor->telefonoVen}}</td>

               
                    @if($vendedor->estadoVen==1)
                     <td>
                        <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('vendedor.edit',$title=' Editar', $parametro=$vendedor->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                                  <td>@include('vendedor.DESHABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                  @else
                      <td>
                        <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('vendedor.edit',$title=' Editar', $parametro=$vendedor->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                                  <td>@include('vendedor.HABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                  @endif
                  </td>
                </tr>
             
            @endif
          @endforeach
           </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
