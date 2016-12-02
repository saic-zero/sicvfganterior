
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
			      <table class="table" border="" width="100%" >
								@foreach ($empleados as $empleado)
			          <?php	$fecha=explode('-', $empleado->fechaIngrSuc);
								$fecha1=explode('-', $empleado->fechaNacimiento);?>
			          <tr>
									<td bgcolor="#e5eef7">Nombres</td>
			            <td>{{$empleado->nombresEmp}}</td>
									<td bgcolor="#e5eef7">Apellidos</td>
			            <td>{{$empleado->apellidosEmp}}</td>
								</tr>
								<tr>
									<td bgcolor="#e5eef7">Sexo</td>
			            <td>{{$empleado->sexo}}</td>
									<td bgcolor="#e5eef7">Fecha de nacimiento</td>
			            <td>{{$fecha1[2].'-'.$fecha1[1].'-'.$fecha1[0]}}</td>
								</tr>
								<tr>
									<td bgcolor="#e5eef7">Dirección</td>
			            <td>{{$empleado->direccionEmp}}</td>
									<td bgcolor="#e5eef7">Teléfono</td>
			            <td>{{$empleado->telefonoEmp}}</td>
								</tr>
								<tr>
									<td bgcolor="#e5eef7">DUI</td>
			            <td>{{$empleado->DUI}}</td>
									<td bgcolor="#e5eef7">NIT</td>
			            <td>{{$empleado->NIT}}</td>
								</tr>
								<tr>
									<td bgcolor="#e5eef7">Código</td>
			            <td>{{$empleado->codEmpleado}}</td>
									<td bgcolor="#e5eef7">Fecha de contrato</td>
			            <td>{{$fecha[2].'-'.$fecha[1].'-'.$fecha[0]}}</td>
								</tr>
								<tr>
									<td bgcolor="#e5eef7">Cargo</td>
			            <td>{{$cargo->nombCargo($empleado->cargo_id)}}</td>
									<td bgcolor="#e5eef7">Referecia Laboral</td>
			            <td>{{$empleado->referenciaLaboral}}</td>
								</tr>
								<tr>
									<td bgcolor="#e5eef7">AFP</td>
			            <td>{{$empleado->numAFP}}</td>
									<td bgcolor="#e5eef7">ISSS</td>
			            <td>{{$empleado->numISSS}}</td>
								</tr>
								<tr><td bgcolor="black" colspan="4" ></td></tr>
								@endforeach
			    </table>
			  </div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</body>
</html>
