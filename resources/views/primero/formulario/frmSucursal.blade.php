@extends('layouts.primeraConfi')
@section('primeraConfi')
@include('alertas.request')
{!! Form::open(['route'=>'primer.store','method'=>'POST']) !!}
	<div class="box-header with-border ">
		<h3 class="box-title">Nueva Sucursal</h3>
		<h6 class="campoObligatorio2">los campos con ( * ) son obligatorios</h6>
	</div><!-- /.box-header -->
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!!Form::label('lbnombre','* Nombre Sucursal:')!!}<br>
					{!!Form::text('nombreSuc',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Sucursal...','required'])!!}
				</div><!-- /.form-group -->
				<div class="form-group">
					{!!Form::label('lbRepresentante','* Representante:')!!}
					{!!Form::text('representanteSuc',null,['class'=>'form-control', 'placeholder'=>'Representante Legal...','required'])!!}
				</div><!-- /.form-group -->
			</div><!-- /.col -->
			<div class="col-md-6">
				<div class="form-group">
					{!!Form::label('lbTelefono','* Teléfono:')!!}
					{!!Form::text('telefonoSuc',null,['onKeyPress'=>'return validarTelefono(event)','id'=>'telefonoSuc','class'=>'form-control', 'placeholder'=>'Telefono ..','required'])!!}
				</div><!-- /.form-group -->
			<div class="form-group">
					{!!Form::label('lbdireccion','* Dirección:')!!}
					{!!Form::textarea('direccionSuc',null,['class'=>'form-control', 'placeholder'=>'Dirección...','required', 'rows'=>'2', 'cols'=>'5'])!!}
				</div><!-- /.form-group -->
			</div>
		</div><!-- /.col -->
	</div><!-- /.row -->
	<button class="btn btn-github">
		<span class="glyphicon glyphicon-floppy-disk"></span> Registrar
	</button>
{!! Form::close() !!}
@stop
