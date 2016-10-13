
<div class="box box-primary">
  <div class="box-header with-border">
  	 <center>
        {!!link_to_action("ProveedorController@index", $title = "Ver Proveedores", $parameters = 1, $attributes = ["class"=>"btn btn-primary"])!!}
   </center>
    <h3 class="box-title">Proveedores</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->

  <div class="box-body">
    <div class="row">
    <div class="col-xs-7">
        <table class="table">
    <tr>


    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbNombre','* Nombre de Empresa:')!!}</td>
				<td>{!!Form::text('nombreProv',null,['class'=>'form-control', 'placeholder'=>'Ingresar Nombre De La Empresa','required'])!!}</td>
			    </div>
	      </tr>
        
		
    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbRepresentante','* Nombre del Contacto:')!!}</td>
				<td>{!!Form::text('representanteProv',null,['class'=>'form-control', 'placeholder'=>'Ingresar Nombre del Contacto','required'])!!}</td>
			    </div>
	      </tr>


    	   <tr>
    	   	<div class="col-xs-4">
			    <div class="form-group">
				<td>{!!Form::label('lbRUC','* NRC:')!!}</td>
				<td>{!!Form::text('RUC',null,['class'=>'form-control', 'placeholder'=>'Ejemplo:12345-6','required'])!!}</td>
			    </div>
			</div>
	      </tr>
					

    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbCorreo','* Correo Electronico:')!!}</td>
				<td>{!!Form::text('correoProv',null,['class'=>'form-control', 'placeholder'=>'dirección@mail.com','required'])!!}</td>
			    </div>
	      </tr>	

					
    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbDireccion','* Dirección:')!!}</td>
				<td>{!!Form::textarea('direccionProv',null,['class'=>'form-control', 'placeholder'=>'Ingresar Dirección','required','rows'=>'2'])!!}</td>
			    </div>
	      </tr>



    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbTelefono','* Telefono:')!!}</td>
				<td><input name="telefonoProv" id="telefonoEmp" type="text" class="form-control" data-inputmask='"mask": "9999-9999"' data-mask></td>
			    </div>
	      </tr>
						
      </tr>
	    
     
        </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->
