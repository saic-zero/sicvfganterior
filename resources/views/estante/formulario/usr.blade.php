<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Estantes</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->

  <div class="box-body">
    <div class="row">
    <div class="col-xs-7">
        <table class="table">


				<div class="form-group">

            {!!form::label('* Nombre de Estante')!!}
				    {!!form::text('nombreEst',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre..','required'])!!}
				   
                               
				
					{!!form::label('* Ubicacion de estante')!!}
					{!!form::text('ubicacionEst',null,['class'=>'form-control','placeholder'=>'Ingrese ubicación de estante..','required'])!!}

				 </div>		

      </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->
