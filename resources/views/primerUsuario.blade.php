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

    <!-- alertas con script -->
    {!!Html::style('css/sweetalert.css')!!}
    <!--fin de alertas con script   -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">

    <div class="login-box">

      <div class="login-logo">
        <b>Farmacia</b>Guadalupe
      </div><!-- /.login-logo -->
      <article>
        <div>

      </div>
      <div class="login-box-body">
        {{-- {!! Form::open(['route'=>'primero.store','method'=>'POST']) !!}
            @include('primero.formulario.frmSucursal')
          {!! Form::submit(' Registrar',['class'=>'btn btn-primary glyphicon glyphicon-floppy-disk']) !!}
        {!! Form::close() !!} --}}
    </article>

    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    {{-- <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script> --}}
    <!-- Bootstrap 3.3.5 -->
    {!!Html::script('js/login.js')!!}
{{-- {!!Html::script('bootstrap/js/bootstrap.min.js')!!} --}}
{!!Html::script('js/login.js')!!}
    {!!Html::script('js/sweetalert-dev.js')!!}  <!-- plugin alertas -->

  </body>
</html>
