<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sistema de ventas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link href="{{ URL::asset('../assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--===============================================================================================-->
    <link href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link href="{{ URL::asset('../fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}" rel="stylesheet" />

    <!--===============================================================================================-->
    <link href="{{ URL::asset('../css/util.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('../css/main.css') }}" rel="stylesheet" />

    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    {{ __('Ingresar') }}
                </span>

                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5">
                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Ingrese su rut">
                        <input id="rut" type="rut" class="input100 @error('rut') is-invalid @enderror" placeholder="RUT" name="rut" value="{{ old('rut') }}" required autocomplete="rut" autofocus>

                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    @error('rut')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" placeholder="CONTRASEÑA" name="password" required autocomplete="current-password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            {{ __('Login') }}
                        </button>
                    </div>




                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ URL::asset('../assets/js/core/jquery.min.js') }}"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
    <!--===============================================================================================-->
    <script src="{{ URL::asset('../assets/js/core/popper.min.js') }}"></script>
    <script src="{{ URL::asset('../assets/js/core/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="{{ URL::asset('../js/main.js') }}"></script>



</body>

</html>