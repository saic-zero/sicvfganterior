
@extends('layouts.admin')
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
        <h3 class="box-title"  font-weight:"bold">Administración de Proveedores</h3>
      </div><!-- /.box-header -->
      <br>
     
      {!!link_to_action("frontController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("ProveedorController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("ProveedorController@activo", $title = "Activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("ProveedorController@desactivo", $title = "Papelera", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      @if($estado==2)
      {!!link_to_route('proveedor.create',$title='Nuevo', $parametro= 1, $attributes = ["class"=>"btn bg-olive"])!!}   
       @endif
   
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
                     <th bgcolor="#e5eef7" >EMPRESA</th>
                      <th bgcolor="#e5eef7">CONTACTO</th>
                      <th bgcolor="#e5eef7">CORREO</th>
                      <th bgcolor="#e5eef7">DIRECCION</th>
                      <th bgcolor="#e5eef7">TELEFONO</th>
                      <th bgcolor="#e5eef7">ACCION</th>
            </tr>
          </thead>
          @foreach ($proveedors as $proveedor)
            @if($proveedor->estadoProv==1 && $estado==1)
              <tbody>
                <tr>
                  
                     <td>{{$proveedor->nombreProv}}</td>
                     <td>{{$proveedor->representanteProv}}</td>
                     <td>{{$proveedor->correoProv}}</td>
                     <td>{{$proveedor->direccionProv}}</td>
                     <td>{{$proveedor->telefonoProv}}</td>
                     <td>
                        <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('proveedor.DESHABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                </tr>
              </tbody>

            @endif
           @if($proveedor->estadoProv==0 && $estado==0)
              <tbody>
                 <tr>
 
                     <td>{{$proveedor->nombreProv}}</td>
                     <td>{{$proveedor->representanteProv}}</td>
                     <td>{{$proveedor->correoProv}}</td>
                     <td>{{$proveedor->direccionProv}}</td>
                     <td>{{$proveedor->telefonoProv}}</td>
                     <td>
                        <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('proveedor.HABILITAR')</td>
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
                     <td>{{$proveedor->nombreProv}}</td>
                     <td>{{$proveedor->representanteProv}}</td>
                     <td>{{$proveedor->correoProv}}</td>
                     <td>{{$proveedor->direccionProv}}</td>
                     <td>{{$proveedor->telefonoProv}}</td>
               
                    @if($proveedor->estadoProv==1)
                      <td>
                          <div align="center">
                            <table>
                                <tr>
                                    <td>{!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                    <td>@include('proveedor.DESHABILITAR')</td>
                                </tr>
                          </table>
                        </div><!-- fin tabla que centra los botones-->
                      </td>
                  @else
                      <td>
                          <div align="center">
                            <table>
                                <tr>
                                    <td>{!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                    <td>@include('proveedor.HABILITAR')</td>
                                </tr>
                          </table>
                        </div><!-- fin tabla que centra los botones-->
                      </td>
                  @endif
                  </td>
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
