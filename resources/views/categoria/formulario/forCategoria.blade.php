
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Categoria</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <table class="table">
          <tr>
            <td>{!!Form::label('lbnombre','* Nombre Categoria:')!!}</td>
            <td>{!!Form::text('nombreCategoria',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de categoria a crear...','required','unique'])!!}</td>
          </tr>
        </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->