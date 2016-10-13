
   <div class="box-header with-border">
       <h3 class="box-title">Presentación del Producto:</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
    <div class="col-md-6">
        <table class="table">

           <tr>
              <div class="form-group">
                <td>{!! Form::label('lNombre','* Nombre:') !!}</td> 
                <td>{!!Form::text('nombrePre',null,['class'=>'form-control', 'placeholder'=>'Nombre de la presentación','required'])!!}</td>
            </div>
          </tr>

          <tr>
              <div class="form-group">
                 <td>{!!Form::label('lEquivale','* Equivalencia:') !!}</td> 
                <td>{!!Form::number('equivale',null,['class'=>'form-control', 'placeholder'=>'Unidades','min'=>'1','required'])!!}</td>
            </div>
          </tr>

        </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
 


