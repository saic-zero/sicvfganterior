
 <?php
if($bandera==1){
	$prove=null;
}else{
	$prove= $vendedor->proveedor_id;
}
?>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Vendedor ó Contacto</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->

  <div class="box-body">
    <div class="row">
    <div class="col-xs-7">
        <table class="table">
    <tr>


    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbNombre','* Nombre de Vendedor:')!!}</td>
				<td>{!!Form::text('nombreVen',null,['onKeyPress'=>'return validarNombre(event)','id'=>'nombreVen','class'=>'form-control', 'placeholder'=>'Ingresar Nombre Del Vendedor','required'])!!}</td>
			    </div>
	      </tr>

    	   <tr>
    	   	<div class="col-xs-4">
			    <div class="form-group">
					<td>{!!Form::label('lbDui','* DUI:')!!}</td>
					<td>{!!Form::text('DUIVen',null,['onKeyPress'=>'return validarDUI(event)','id'=>'DUIVen','class'=>'form-control', 'placeholder'=>'Documento Unico de Identidad...','required'])!!}</td>
				</div><!-- /.form-group -->
			</div>
	      </tr>
					

    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbCorreo','* Correo Electronico:')!!}</td>
				<td>{!!Form::text('correoVen',null,['class'=>'form-control', 'placeholder'=>'dirección@mail.com','required'])!!}</td>
			    </div>
	      </tr>	

					
    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbDireccion','* Dirección:')!!}</td>
				<td>{!!Form::textarea('direccionVen',null,['class'=>'form-control', 'placeholder'=>'Ingresar Dirección','required','rows'=>'2'])!!}</td>
			    </div>
	      </tr>



    	
    	   <tr>
			   <div class="form-group">
					<td>{!!Form::label('lbTelefono','* Teléfono :')!!}</td>
					<td>{!!Form::text('telefonoVen',null,['onKeyPress'=>'return validarTelefono(event)','id'=>'telefonoVen','class'=>'form-control', 'placeholder'=>'Telefono ..','required'])!!}</td>
			   </div><!-- /.form-group -->
		   </tr>
                         <tr>
        	                   <div class="form-group">
									<td>{!!Form::label('lbEmpresa','* Empresa:')!!}</td>
										 <td><select class="form-control" name="proveedor_id">
											@foreach($proveedors as $p)
												@if($prove==$p->id && $prove!=null)
													<option value="{{$p->id}}" selected="selected">{{$p->nombreProv}}</option>
												@else
													<option value="{{$p->id}}">{{$p->nombreProv}}</option>
												@endif
											@endforeach
										</select>
									 </td>
								</div><!-- /.form-group -->
							</tr>
	                </tr>
	           </table>
	       </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->
