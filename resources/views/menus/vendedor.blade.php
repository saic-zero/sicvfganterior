<ul class="sidebar-menu">
  <li class="header" align="center">MENU</li>
  <li class="treeview">
    <a>
      <i class="fa fa-files-o text-aqua "></i> <span>INVENTARIO</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-list-ol fa-fw text-aqua"></i>
              <span>Gestionar Productos</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">

                <li>
                   <li class="treeview">
                     <a href="#">
                    <i class="fa fa-folder text-aqua"></i>
                    <span>Categorias</span>
                    <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                                  <li>
                        <a href="{!!URL::to('/categoria/create')!!}"><i class='fa fa-plus fa-fw '></i>Agregar</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/categoria')!!}"><i class='fa fa-gears '></i> Administrar</a>
                    </li>
                     <li>
                                      <a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open '></i> Informe</a>
                               </li>
                     </ul>
                     </li>
                            </li>

                            <li>
                  <li class="treeview">
                     <a href="#">
                    <i class="fa fa-folder text-aqua"></i>
                    <span>Productos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                                  <li>
                        <a href="{!!URL::to('/producto/create')!!}"><i class='fa fa-plus fa-fw '></i>Agregar</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/producto')!!}"><i class='fa fa-gears '></i> Administrar</a>
                    </li>
                     <li>
                                      <a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open '></i> Informe</a>
                               </li>
                     </ul>
                    </li>
              </li>
               <li>
                     <li class="treeview">
                     <a href="#">
                    <i class="fa fa-folder text-aqua"></i>
                    <span>Presentaciones</span>
                    <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                                  <li>
                        <a href="{!!URL::to('/presentaciones/create')!!}"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/presentaciones')!!}"><i class='fa fa-gears '></i> Administrar</a>
                    </li>
                     <li>
                                      <a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open '></i> Informe</a>
                               </li>
                     </ul>
                     </li>
                  </li>
            </ul>
              </li>
      </li>
    </ul>
  </li>
  <li class="treeview">
            <a>
              <i class="fa fa-shopping-cart text-aqua"></i> <span>COMPRAS</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li>
                   <li class="treeview">
                             <a href="#">
                            <i class="fa fa-folder text-aqua"></i>
                            <span>Proveedores</span>
                            <i class="fa fa-angle-left pull-right"></i>
                              </a>
                              <ul class="treeview-menu">
                                          <li>
                                <a href="{!!URL::to('/proveedor/create')!!}"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                            </li>
                            <li>
                                <a href="{!!URL::to('/proveedor')!!}"><i class='fa fa-gears '></i> Administrar</a>
                            </li>
                             <li>
                                              <a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open '></i> Informe</a>
                                       </li>
                                         <li>
                                         <li class="treeview">
                                       <a href="#">
                                      <i class="fa fa-folder text-aqua"></i>
                                      <span>Vendedores</span>
                                      <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                                    <li>
                                          <a href="{!!URL::to('/vendedor/create')!!}"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                                      </li>
                                      <li>
                                          <a href="{!!URL::to('/vendedor')!!}"><i class='fa fa-gears '></i> Administrar</a>
                                      </li>
                                       <li>
                                                        <a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open '></i> Informe</a>
                                                 </li>
                                       </ul>
                                          </li>
                                       </li>
                             </ul>
                 </li>
              </li>
              </li>
              <li>
                   <li class="treeview">
                             <a href="#">
                            <i class="fa fa-folder text-aqua"></i>
                            <span>Pedidos</span>
                            <i class="fa fa-angle-left pull-right"></i>
                              </a>
                              <ul class="treeview-menu">
                                          <li>
                                <a href="{!!URL::to('/proveedor/create')!!}"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                            </li>
                            <li>
                                <a href="{!!URL::to('/proveedor')!!}"><i class='fa fa-gears '></i> Administrar</a>
                            </li>
                             <li>
                                              <a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open '></i> Informe</a>
                                       </li>
                             </ul>
                 </li>
              </li>
              <li>
                   <li>
                    <li class="treeview">
                             <a href="#">
                            <i class="fa fa-folder text-aqua"></i>
                            <span>Devolución S/Compra</span>
                            <i class="fa fa-angle-left pull-right"></i>
                              </a>
                              <ul class="treeview-menu">
                                          <li>
                                <a href="{!!URL::to('/producto/create')!!}"><i class='fa fa-plus fa-fw '></i>Agregar</a>
                            </li>
                            <li>
                                <a href="{!!URL::to('/producto')!!}"><i class='fa fa-gears '></i> Administrar</a>
                            </li>
                             <li>
                                              <a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open '></i> Informe</a>
                                       </li>
                             </ul>
                            </li>
                    </li>

              </li>
            </ul>
          </li>
  <li class="treeview">
    <a>
      <i class="fa fa-laptop text-aqua"></i> <span>VENTAS</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li>
        <li>
            <li class="treeview">
                     <a href="#">
                    <i class="fa fa-folder text-aqua"></i>
                    <span>Venta</span>
                    <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                                  <li>
                        <a href="{!!URL::to('/producto/create')!!}"><i class='fa fa-plus fa-fw '></i>Agregar</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/producto')!!}"><i class='fa fa-gears '></i> Administrar</a>
                    </li>
                     <li>
                                      <a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open '></i> Informe</a>
                               </li>
                     </ul>
                    </li>
            </li>
          <li>
            <li class="treeview">
                     <a href="#">
                    <i class="fa fa-folder text-aqua"></i>
                    <span>Devolución S/Venta</span>
                    <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                                  <li>
                        <a href="{!!URL::to('/producto/create')!!}"><i class='fa fa-plus fa-fw '></i>Agregar</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/producto')!!}"><i class='fa fa-gears '></i> Administrar</a>
                    </li>
                    <li>
                                      <a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open '></i> Informe</a>
                               </li>
                     </ul>
                    </li>
            </li>
      </li>
    </ul>
  </li>


</ul>
