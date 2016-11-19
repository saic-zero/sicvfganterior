
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Por Empleados</title>
</head>
	<body>
			<div class="col-md-12">
			  <div class="box-body">
			    <div class="box-header with-border">
						<table width="556" border="" align="">
		          <tr>
								<td>&nbsp;</td>
								<td width="200" align="center"><h3 class="box-title">Farmacia Guadalupe </h3>
							    <p>&nbsp;</p>
							    <p>&nbsp;</p></td>
									<td align="right"><img class="al" src="images/virgen.jpg" ></td>
		          </tr>
							<tr>
								<td align="left"><h4>Fecha :<?=  $date; ?></h4>
						    <h4>Impresión : <?=  $date1; ?></h4></td>
						    <td>&nbsp;</td>
								<td>&nbsp;</td>
						  </tr>
			    	</table>
						<center>
							<h3 class="box-title">Informe de Empleados </h3>
						</center>
			    </div><!-- /.box-header -->
			    <div class="box-body">
			      <table class="table" border="1" width="100%" >
				      <thead>
				         <tr>
									<th bgcolor="#e5eef7" >Nombres</th>
				          <th bgcolor="#e5eef7">Apellidos</th>
				          <th bgcolor="#e5eef7">Dirección</th>
				          <th bgcolor="#e5eef7">Teléfono</th>
									{{-- <th bgcolor="#e5eef7">Cargo</th> --}}
				          <th bgcolor="#e5eef7">Fecha de contrato</th>
				        </tr>
				      </thead>
			        <tbody>
								@foreach ($empleados as $empleado)
			          <?php	$fecha=explode('-', $empleado->fechaIngrSuc);?>
			          <tr>
			            <td>{{$empleado->nombresEmp}}</td>
			            <td>{{$empleado->apellidosEmp}}</td>
			            <td>{{$empleado->direccionEmp}}</td>
			            <td>{{$empleado->telefonoEmp}}</td>
									{{-- <td>{{$cargo->nombCargo($empleado->cargo_id)}}</td> --}}
			            <td>{{$fecha[2].'-'.$fecha[1].'-'.$fecha[0]}}</td>
								</tr>
								@endforeach
			      </tbody>
			    </table>
			  </div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</body>
</html>
