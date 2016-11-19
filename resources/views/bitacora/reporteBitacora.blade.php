
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Por Empleados</title>
	<style>
		.table{
			width: 100%;
		}
		.al{

		}
	</style>
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
				<h3 class="box-title">Mostrando registro de bitácoras </h3>
				<?php	$fecha1=explode('-', $fch1);
				$fecha2=explode('-', $fch2);?>
				<h4 class="box-title">del <?= $fecha1[2].'-'.$fecha1[1].'-'.$fecha1[0] ?> al <?= $fecha2[2].'-'.$fecha2[1].'-'.$fecha2[0] ?> </h4>
			</center>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table class="table" border="1px" >
	      <thead>
          <tr>
            <th bgcolor="#e5eef7">USUARIO</th>
            <th bgcolor="#e5eef7">ACCIÓN</th>
            <th bgcolor="#e5eef7">FECHA DE REGISTRO</th>
            <th bgcolor="#e5eef7">HORA DE REGISTRO</th>
          </tr>
	      </thead>
        <tbody>
        @foreach($bitacoras as $bitacora)
			<?php
				$f1=$bitacora->created_at->format('Y-m-d');
			?>
					@if($f1>=$fch1 && $f1<=$fch2 )
          <tr>
            <td>{{$empleado->codigoEmp($bitacora->usuario_id)}}</td>
            <td>{{$bitacora->accion}}</td>
            <td>{{$bitacora->created_at->format('d-m-Y')}}</td>
            <td>{{$bitacora->created_at->format('g:i:s a')}}</td>
          </tr>
				@endif
          @endforeach
        </tbody>
    </table>
  </div><!-- /.box-body -->
</div><!-- /.box -->


</div>



</body>
</html>
