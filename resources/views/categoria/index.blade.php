
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
        <h3 class="box-title">Administración de Categorias</h3>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("frontController@index", $title = "Atras", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("CategoriaController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("CategoriaController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("CategoriaController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
       @if($estado==2)
      {!!link_to_route('categoria.create',$title='Nueva', $parametro= 1, $attributes = ["class"=>"btn bg-olive"])!!}   
       @endif
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
             <th bgcolor="#e5eef7">CATEGORIA</th>
              <th bgcolor="#e5eef7">ACCION</th>
            </tr>
          </thead>
          @foreach ($categorias as $categoria)
            @if($categoria->estadoCat==1 && $estado==1)
              <tbody>
                <tr>
                <td>{{$categoria->nombreCategoria}}</td>
                <td>
                 <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('categoria.edit',$title='Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('categoria.DESHABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                </tr>
              </tbody>
            @endif
            @if($categoria->estadoCat==0 && $estado==0)
              <tbody>
                <tr>
                  <td>{{$categoria->nombreCategoria}}</td>
                  <td>
                   <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('categoria.edit',$title='Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('categoria.HABILITAR')</td>
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
                 <td>{{$categoria->nombreCategoria}}</td>
                  <td><center>
                    @if($categoria->estadoCat==1)
                    <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('categoria.edit',$title='Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('categoria.DESHABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                  @else
                    <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('categoria.edit',$title='Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                                  <td>@include('categoria.HABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                  @endif
                  </center>
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
