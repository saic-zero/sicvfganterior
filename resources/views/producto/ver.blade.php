@extends('layouts.admin')
@section('content')
 
    <div class="enc">
      <h2>Producto</h2>
      <h3 id="txt"> |{{$c->nombre}}</h3>
    </div>

  <div class="box-body">
          <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab_1" data-toggle="tab">Datos personales</a></li>
                    </ul>
                                  <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                                    <?php
                                                    $id = $c->id;
                                                    ?>

                                                      <div class="form-group">
                                                        <h3 id="txt">Datos</h3>
                                                      </div>
                                                      <div class="form-group">
                                                        <span>Nombre</span>
                                                        <span>{!! $c->nombreProd !!}</span>
                                                      </div>
                                                      <div class="form-group">
                                                        <span>Categoría</span>
                                                        <span>{!! $c->nombreCategoria($c->categoria_id) !!}</span>
                                                      </div>
                                                      <div class="form-group">
                                                        <span>Costo por unidad</span>
                                                        <span>{!! '$ '.number_format($precu,2) !!}</span>
                                                      </div>
                                                      <div class="form-group">
                                                        <span>En existencia</span>
                                                        <span>
                                                          <?php $ayu = $cant; ?>
                                                          @foreach($pp as $l)
                                                            {{intval($ayu / $l->equivale).' '.$l->nombre.' '}}
                                                            <?php $ayu = $ayu % $l->equivale; ?>
                                                          @endforeach
                                                        </span>
                                                      </div>
                                              </div>
                                      </div>
              </div>
     </div>

@stop
