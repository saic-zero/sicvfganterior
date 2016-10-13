
<div class="box box-primary">
 <?php
if($bandera==1){
 $pro=null;
}else{
  $pro = $presentaciones->producto_id;
}
 ?>

  <div class="box-header with-border">
    <center>
        {!!link_to_action("PresentacionesController@index", $title = "Ver Presentaciones", $parameters = 1, $attributes = ["class"=>"btn btn-primary"])!!}
   </center>
    <h3 class="box-title">Presentación</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
    <div class="col-md-6">
        <table class="table">

           <tr>
              <div class="form-group">
                <td>{!! Form::label('lNombre','Nombre:') !!}</td> 
                <td>{!!Form::text('nombrePre',null,['class'=>'form-control', 'placeholder'=>'Nombre de la presentación','required'])!!}</td>
            </div>
          </tr>

          <tr>
              <div class="form-group">
                 <td>{!!Form::label('lEquivale','Equivalencia:') !!}</td> 
                <td>{!!Form::number('equivale',null,['class'=>'form-control', 'placeholder'=>'Unidades','min'=>'1','required'])!!}</td>
            </div>
          </tr>
        
         <tr>
              <div class="form-group">
                <td>{!! Form::label('lPrecio','Ganancia ($):') !!}</td>
                <td>{!!Form::number('ganancia',null,['class'=>'form-control', 'placeholder'=>'Ganancia por venta','required','min'=>'0.0','step'=>'0.01'])!!}</td>
            </div>
          </tr>
          
        <tr>
         <div class="form-group">
            <td>{!!Form::label('lbProducto','Producto:')!!}</td>
            <td>
            <select class="form-control" name="producto_id" >
                @foreach($productos as $p)
                @if($pro=$p->id && $pro!=null)
                <option value="{{$p->id}}" selected="selected">{{$p->nombreProd}}</option>
                @else
                <option value="{{$p->id}}">{{$p->nombreProd}}</option>
                @endif
                
                @endforeach
              </select>
            </td>
        </div>
    </tr>
</div>
        </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->