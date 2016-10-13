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
    @if (Session::has('mensaje'))
    <div class="alert alert-danger" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
    <center>{{Session::get('mensaje')}}</center>
    </div>
    @endif
    <div class="login-box">

      <div class="login-logo">
        <b>Farmacia</b>Guadalupe
      </div><!-- /.login-logo -->
      <article>
      <div class="login-box-body">
        <p class="login-box-msg">Inicie Sesión</p>
        {!!Form::open(['route'=>'login.store','method'=>'POST'])!!}

          <div class="form-group has-feedback">
            {!!form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su Usuario'])!!}
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            {!!form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su Contraseña'])!!}

            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <center><li class="warning cancel">
              <a >¿ Olvidaste tu Contraseña ?</a>
          </li></center>
          </div>
          <div class="row">
            <div class="col-xs-4">
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-danger btn-block btn-flat "> Acceder </button>
            </div><!-- /.col -->
          </div>
          {!!Form::close()!!}
          <div class="social-auth-links text-center">

          <img src="images/securidad.png" width="100" height="100" align="right"></img>
        </div><!-- /.social-auth-links -->

      </div><!-- /.login-box-body -->
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
