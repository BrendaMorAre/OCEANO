<html>
<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body id="LoginForm">
<div class="container">
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Inicio de Sesión</h2>
                <p>Por favor ingrese su usuario y contraseña</p>
            </div>
            <form id="Login" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">


                    <input type="text" class="form-control" id="inputEmail" placeholder="nombre de usuario" name="username" value="{{ old('username') }}" required autofocus>

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <input type="password" class="form-control" id="inputPassword" placeholder="contraseña" required>

                </div>

                <div class="col-md-12 text-center">
                    @if ($errors->has('username'))
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="forgot">
                    <a href="reset.html">Recuperar contraseña?</a>
                </div>
                <button type="submit" class="btn btn-primary">Entrar al sistema</button>

            </form>
        </div>
        <p class="botto-text"> Desarrollado por Brenda Morales Arellano</p>
    </div></div></div>


</body>
</html>