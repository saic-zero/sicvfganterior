
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
        <h3 class="box-title">Administración de Categorias</h3>
      </div><!-- /.box-header -->
      <br>
<!--       {!!link_to_action("frontController@index", $title = "Atras", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!} -->
     <!--  {!!link_to_action("CategoriaController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!} -->
      {!!link_to_action("CategoriaController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("CategoriaController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
       @if($estado==2 || $estado==1)
      {!!link_to_route('categoria.create',$title='Nueva', $parametro= 1, $attributes = ["class"=>"btn bg-olive"])!!}   
       @endif
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped buscar">
          <thead>
            <tr>
             <th bgcolor="#e5eef7">CATEGORIA</th>
              <th bgcolor="#e5eef7">ACCION</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($categorias as $categoria)
            @if($categoria->estadoCat==1 && $estado==1)
            
                <tr>
                <td>{{$categoria->nombreCategoria}}</td>
                <td>
                 <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('categoria.edit',$title=' Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                                  <td>@include('categoria.DESHABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                </tr>
             
            @endif
            @if($categoria->estadoCat==0 && $estado==0)
             
                <tr>
                  <td>{{$categoria->nombreCategoria}}</td>
                  <td>
                   <div align="center">
                          <table>
                              <tr>
                                  <td>{!!link_to_route('categoria.edit',$title=' Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary glyphicon glyphicon-edit'])!!}</td>
                                  <td>@include('categoria.HABILITAR')</td>
                              </tr>
                        </table>
                      </div><!-- fin tabla que centra los botones-->
                    </td>
                </tr>
             
            @endif
            
                  </center>
                  </td>
                </tr>
              
          
          @endforeach
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
