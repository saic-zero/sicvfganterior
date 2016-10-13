@include('alertas.request')
<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title">Nuevo Cargo</h3>
		<h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
	</div><!-- /.box-header -->
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<table class="table">
					<tr>
						<td>{!!Form::label('lbnombre','* Nombre Cargo:')!!}</td>
						<td>{!!Form::text('nombreCargo',null,['class'=>'form-control ', 'placeholder'=>'Ingrese el nombre del cargo a crear...','required'])!!}</td>
					</tr>
				</table>
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.box-body -->
