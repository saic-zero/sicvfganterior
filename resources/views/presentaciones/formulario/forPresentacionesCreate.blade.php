
<div class="box box-primary">
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
                <td>{!!Form::number('equivale',null,['class'=>'form-control', 'placeholder'=>'Unidades','required','min'=>'1'])!!}</td>
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
    <td>{!!Form::select('producto_id',$productos)!!}</td>
     </div>
      </tr>

        </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->
