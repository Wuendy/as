@extends('layouts.m')

@section('content')
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image:url({{url('uploads/12.jpg')}})">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Registrate
                        @if ($errors->any())
    
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
  
@endif
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="name" placeholder="Nombre">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="last_name" placeholder="Apellido">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="number" name="cedula" placeholder="Cedula">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Contraseña">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password_confirmation" placeholder="Confirma contraseña">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>

                    
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Registrar
                        </button>
                    </div>


                    <div class="text-center p-t-90">
                        
                        <a class="txt1" href="{{ route('login') }}">
                            ¿Tienes cuenta?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
    