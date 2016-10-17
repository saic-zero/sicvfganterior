<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de Sesión | </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {!!Html::style('dist/css/AdminLTE.min.css')!!}
    {!!Html::style('plugins/datatables/dataTables.bootstrap.css')!!}

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
  <body class="hold-transition login-page">

<div>
</div>

      <div class="login-logo">
        <b>Farmacia</b>Guadalupe
      </div><!-- /.login-logo -->
      <article class="primeraConfi">
      <div class="login-box-body">
        <p class="login-box-msg">Configuraciones Iniciales</p>
				@yield('primeraConfi')
      </div><!-- /.login-box-body -->
    </article>

{{-- {!!Html::script('bootstrap/js/bootstrap.min.js')!!} --}}
{!!Html::script('js/login.js')!!}

<!-- jQuery 2.1.4 -->
{!!Html::script('plugins/jQuery/jQuery-2.1.4.min.js')!!}
<!-- Bootstrap 3.3.5 -->
{!!Html::script('bootstrap/js/bootstrap.min.js')!!}
{{-- validaciones --}}
  {!!Html::script('js/validaciones.js')!!}

  <!-- jQuery UI 1.11.4 -->
{!!Html::script('plugins\jQueryUI/jquery-ui.min.js')!!}

<!-- AdminLTE App -->
{!!Html::script('dist/js/app.min.js')!!}
<!-- AdminLTE for demo purposes -->
{!!Html::script('dist/js/demo.js')!!}

{!!Html::script('js/sweetalert-dev.js')!!}  <!-- plugin alertas -->
<!-- This is what you need -->

<!-- Bootstrap WYSIHTML5 -->
{!!Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!!Html::script('dist/js/pages/dashboard.js')!!}

{!!Html::script('js/busqueda.js')!!}

  </body>
</html>
