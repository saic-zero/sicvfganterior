
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
							<h3 class="box-title">Informe De Productos Por Antigüedad  </h3>
						</center>
			    </div><!-- /.box-header -->
			    <div class="box-body">
            <table class="table" border="1px" width="100%">
      	      <thead>
                <tr>
                  <th bgcolor="#3c86c7">Lote</th>
                  <th bgcolor="#3c86c7">Producto</th>
                  <th bgcolor="#3c86c7">Presentación</th>
                  <th bgcolor="#3c86c7">Cantidad</th>
                  <th bgcolor="#3c86c7">Compra</th>
                  <th bgcolor="#3c86c7">Caducidad</th>
                  <th bgcolor="#3c86c7">Proveedor</th>
                  <th bgcolor="#3c86c7">Teléfono</th>
                </tr>
      	      </thead>
              <tbody>
              @foreach($detalle as $d)
                <?php	$fecha1=explode('-', $d->fechaCompra);
        				$fecha2=explode('-', $d->fechaVencimiento); ?>
                <tr>
                  <td>{{$d->lote}}</td>
                  <td>{{$d->nombreProd}}</td>
                  <td>{{$d->nombrePre}}</td>
                  <td>{{$d->cantidad}}</td>
                  <td>{{$fecha1[2].'-'.$fecha1[1].'-'.$fecha1[0]}}</td>
                  <td>{{$fecha2[2].'-'.$fecha2[1].'-'.$fecha2[0]}}</td>
                  <td>{{$d->nombreVen}}</td>
                  <td>{{$d->telefonoVen}}</td>
                </tr>
                @endforeach
              </tbody>
          </table>
			  </div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</body>
</html>
