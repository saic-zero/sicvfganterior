<!DOCTYPE html>
<html>
<head>
<title>Farmacia Guadalupe</title>
<link href="images/favicon.png" rel="icon" />
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
{!!Html::style('bootstrap/css/bootstrap.min.css')!!}
<!-- Font Awesome -->
{!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')!!}
<!-- Ionicons -->
{!!Html::style('fonts/ionicons.min.css')!!}
<!-- Theme style -->
{!!Html::style('dist/css/AdminLTE.min.css')!!}

{!!Html::style('plugins/datatables/dataTables.bootstrap.css')!!}

<!-- alertas con script -->
{!!Html::style('css/sweetalert.css')!!}
<!--fin de alertas con script   -->



<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
		 {!!Html::style('dist/css/skins/_all-skins.min.css')!!}
		 <!-- iCheck -->
		 {!!Html::style('plugins/iCheck/flat/blue.css')!!}
		 <!-- Morris chart -->
		 {!!Html::style('plugins/morris/morris.css')!!}
		 <!-- jvectormap -->
		 {!!Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
		 <!-- Date Picker -->
		 {!!Html::style('plugins/datepicker/datepicker3.css')!!}
		 <!-- Daterange picker -->
		 {!!Html::style('plugins/daterangepicker/daterangepicker-bs3.css')!!}
		 <!-- bootstrap wysihtml5 - text editor -->
		 {!!Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>A</b>LT</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Farmacia </b>Guadalupe II</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<!-- Notifications: style can be found in dropdown.less -->
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<a href="#">
												<i class="fa fa-users text-aqua"></i> 5 new members joined today
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-users text-red"></i> 5 new members joined
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-shopping-cart text-green"></i> 25 sales made
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-red"></i> You changed your username
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a></li>
							</ul>
						</li>
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="hidden-xs">Cerrar sesión</span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
									<p>
										Juan Pérez
									</p>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-right">
										<a href="#" class="btn btn-default btn-flat">Cerrar Sesion</a>
									</div>
								</li>
							</ul>
						</li>
						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Juan Pérez </p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<!-- sidebar menu: : style can be found in sidebar.less -->
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
										</ul>
						          </li>
							</li>
						</ul>
					</li>
			
                    <li class="treeview">
						<a>
							<i class="fa fa-group text-aqua"></i> <span>EMPLEADOS</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							 <li>
									<a href="{!!URL::to('/empleado/create')!!}"><i class='fa fa-plus fa-fw '></i> Agregar</a>
							</li>
							<li>
									<a href="{!!URL::to('/empleado')!!}"><i class='fa fa-gears '></i> Administrar</a>
							</li>
							<li>
									<a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open'></i> Informe</a>
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
					<li class="treeview">
						<a>
							<i class="glyphicon glyphicon-lock  text-aqua"></i> <span>SEGURIDAD</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li>
									<a href="{!!URL::to('/admin')!!}"><i class='fa fa-gears'></i> Administración</a>
							</li>
							<li>
									<a href="{!!URL::to('')!!}"><i class='fa fa-database'></i> Respaldar BD</a>
							</li>
							<li>
									<a href="{!!URL::to('')!!}"><i class='fa fa-database'></i> Restaurar BD</a>
							</li>
							<li>
									<a href="{!!URL::to('')!!}"><i class='glyphicon glyphicon-eye-open'></i> Bitácora</a>
							</li>
						</ul>
					</li>

				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				@yield('content')
			</section>
	<!-- jQuery 2.1.4 -->
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="plugins\jQueryUI/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<!-- jQuery 2.1.4 -->
	{!!Html::script('plugins/jQuery/jQuery-2.1.4.min.js')!!}
	<!-- Bootstrap 3.3.5 -->
	{!!Html::script('bootstrap/js/bootstrap.min.js')!!}

	{!!Html::script('plugins/datatables/jquery.dataTables.min.js')!!}
	{!!Html::script('plugins/datatables/dataTables.bootstrap.min.js')!!}

	{{-- validaciones --}}
	  {!!Html::script('js/validaciones.js')!!}

		<!-- jQuery UI 1.11.4 -->
	{!!Html::script('plugins\jQueryUI/jquery-ui.min.js')!!}
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button);
	</script>

	<!-- Morris.js charts -->
	{!!Html::script('plugins/raphael-min.js')!!}
	{!!Html::script('plugins/morris/morris.min.js')!!}
	<!-- Sparkline -->
	{!!Html::script('plugins/sparkline/jquery.sparkline.min.js')!!}
	<!-- jvectormap -->
	{!!Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
	{!!Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
	<!-- Slimscroll -->
	{!!Html::script('plugins/slimScroll/jquery.slimscroll.min.js')!!}
	<!-- FastClick -->
	{!!Html::script('plugins/fastclick/fastclick.min.js')!!}
	<!-- AdminLTE App -->
	{!!Html::script('dist/js/app.min.js')!!}
	<!-- AdminLTE for demo purposes -->
	{!!Html::script('dist/js/demo.js')!!}

<!-- InputMask -->
{!!Html::script('plugins/input-mask/jquery.inputmask.js')!!}
{!!Html::script('plugins/input-mask/jquery.inputmask.date.extensions.js')!!}
{!!Html::script('plugins/input-mask/jquery.inputmask.extensions.js')!!}


{!!Html::script('js/sweetalert-dev.js')!!}  <!-- plugin alertas -->
<!-- This is what you need -->
<!--.......................-->

<!-- <script>
document.querySelector('ul.examples li.warning.confirm button').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		closeOnConfirm: false
	},
	function(){
		swal("Deleted!", "Your imaginary file has been deleted!", "success");
	});
}; -->

	<script>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});


	</script>
	<!--para validar telefono -->
	<script>
	$(function () {
		$("[data-mask]").inputmask();
	});
	</script>
	<!-- jQuery Knob Chart -->
	{!!Html::script('plugins/knob/jquery.knob.js')!!}

	<!-- daterangepicker -->
	{!!Html::script('plugins/moment.min.js')!!}
	{!!Html::script('plugins/daterangepicker/daterangepicker.js')!!}
	<!-- datepicker -->
	{!!Html::script('plugins/datepicker/bootstrap-datepicker.js')!!}
	<!-- Bootstrap WYSIHTML5 -->
	{!!Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}

	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	{!!Html::script('dist/js/pages/dashboard.js')!!}

	{!!Html::script('js/busqueda.js')!!}
</body>
</html>
