@extends('layouts.principal1')
@section('content')
@if (Session::has('mensaje'))
  <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
  {{Session::get('mensaje')}}
  </div>
@endif
<div class="row">
  <div class="col-xs-12">
    <div class="">
      <div class="box box-info">
          {!! Form::open(['url'=>['reporteBitacora'],'method'=>'POST']) !!}
            <div class="box-header">
              <h3 class="box-title">Administración de Bitácora</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div><!-- /. tools -->
            </div><!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <div class="col-md-4">
                  <div class="form-group">
                    {!!Form::label('lbFecha','Fecha Inicial')!!}
                    {!!Form::date('fechaInicial',null,['id'=>'fechaInicial','class'=>'form-control', 'placeholder'=>'Fecha Inicial...', 'required'])!!}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {!!Form::label('lbFecha','Fecha Final')!!}
                    {!!Form::date('fechaFinal',null,['id'=>'fechaFinal','class'=>'form-control', 'placeholder'=>'Fecha Final...','required'])!!}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {!!Form::label('lbUsuario','Usuario:')!!}
                    <select class="form-control" name="usuario">
                      @foreach($users as $b)
                          <option value="{{$b->id}}">{{$b->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
            {!! Form::submit('Imprimir Informe',['class'=>'btn btn-info']) !!}

            {{-- {!!link_to_action("BitacoraController@reporteBitacora",  $title = "Imprimir Informe", $parameters = 1, $attributes = ["class"=>"btn bg-olive",  "target"=>"_blank"])!!} --}}
          </form>
        </div>
        {!! Form::close() !!}
      </div><!-- /.box -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th bgcolor="#e5eef7">USUARIO</th>
              <th bgcolor="#e5eef7">EMPLEADO</th>
              <th bgcolor="#e5eef7">ACCIÓN</th>
              <th bgcolor="#e5eef7">FECHA DE REGISTRO</th>
              <th bgcolor="#e5eef7">HORA DE REGISTRO</th>
            </tr>
          </thead>
          <tbody>
          @foreach($bitacoras as $bitacora)
            <tr>
              <td>{{$empleado->codigoEmp($bitacora->usuario_id)}}</td>
              <td>{{$empleado->nombreEmp($bitacora->usuario_id)}}</td>
              <td>{{$bitacora->accion}}</td>
              <td>{{$bitacora->created_at->format('d/m/Y')}}</td>
              <td>{{$bitacora->created_at->format('g:i:s a')}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
