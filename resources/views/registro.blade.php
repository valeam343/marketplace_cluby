<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    <style type="text/css">
        #formCrearCuenta {
            display: none;
        }
        .form-control {
            text-align: center;
        }
        #mancha1 {
            position: absolute;
            top: 0;
            left: 0;
            width: 30%;
        }
        #mancha2 {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 30%;
        }
        .beneficios {
            text-align: center;
            font-size: 15pt;
        }
    </style>
</head>
<body>
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                <img src="{{asset('img/manchaAzul1.svg')}}" id="mancha1">
                <img src="{{asset('img/manchaAzul2.svg')}}" id="mancha2">
                <div style="height: 100px;"></div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
                    </div>
                    <div class="col-lg-8 col-md-8 col-xl-8 mb-8">
                        <strong><p style="font-size: 25pt; text-align: justify; color: #460056;">SE DESCUBIERTO, OBTÉN NUEVOS ALUMNOS Y MÁS INGRESOS</p></strong>
                        <div style="height: 30px;"></div>
                        <p style="font-size: 15pt; text-align: justify;">Establece la frecuencia que convenga (diaria, semanal o mensual), fija el precio y el tamaño del grupo, administra todos los detalles estés donde estés con nuestra cómoda aplicación móvil.</p>
                        <div style="height: 10px;"></div>
                        <strong><p style="text-align: center; font-size: 30pt; color: #2e4da0;">Estos son algunos beneficios que CLUBY te ofrece:</p></strong>
                        <div style="height: 50px;"></div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                            </div>
                            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                                <center><img src="{{asset('img/lupa.svg')}}" style="width: 70px;"></center>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                                <p class="beneficios">Llegar a tu público objetivo</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                            </div>
                            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                                <center><img src="{{asset('img/estrellas.svg')}}" style="width: 90px;"></center>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                                <p class="beneficios">Herramientas de publicidad y mercodotecnia</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                            </div>
                            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                                <center><img src="{{asset('img/foco.svg')}}" style="width: 70px;"></center>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                                <p class="beneficios">Tu plataforma online para administrar tu negocio</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
                    </div>
                </div>
            </div> 
            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                <div style="height: 100px;"></div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                        <center><img src="{{asset('img/clubyLogoAzul.svg')}}" style="width: 50%;"></center>
                        <br>
                        <form action="" class="was-validated" id="formLogin">
                            <div class="input-group">
                                <div class="input-group-prepend" style="width: 30px;">
                                    <img src="{{asset('img/Correo.svg')}}" style="width: 95%;">
                                </div>
                                <input type="email" class="form-control" id="Corre" placeholder="Correo" name="Correo" style="border-color: white; border-bottom-color: #2e4da0;" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Ingresa una dirección de correo valida</div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend" style="width: 30px;">
                                    <img src="{{asset('img/candado.svg')}}" style="width: 75%;">
                                </div>
                                <input type="password" class="form-control" id="Password" placeholder="Contraseña" name="Password" style="border-color: white; border-bottom-color: #2e4da0;" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Ingresa tu contraseña</div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 20px; margin-top: 20px; background-color: #2e4da0;">Iniciar Sesión</button>
                                <p class="message" style="color: #2e4da0;">¿No tienes una cuenta? <a href="#" style="color: #2e4da0;">Crear Cuenta</a></p>
                            </center>
                        </form>
                        <form action="" class="was-validated" id="formCrearCuenta">
                            <div class="input-group">
                                <div class="input-group-prepend" style="width: 30px;">
                                    <img src="{{asset('img/Usuario.svg')}}" style="width: 75%;">
                                </div>
                                <input type="text" class="form-control" id="nombreUsuario" placeholder="Nombre de usuario" name="nombreUsuario" style="border-color: white; border-bottom-color: #2e4da0;" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Ingresa tu nombre</div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend" style="width: 30px;">
                                    <img src="{{asset('img/Correo.svg')}}" style="width: 95%;">
                                </div>
                                <input type="email" class="form-control" id="Corre" placeholder="Correo" name="Correo" style="border-color: white; border-bottom-color: #2e4da0;" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Ingresa una dirección de correo valida</div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend" style="width: 30px;">
                                    <img src="{{asset('img/candado.svg')}}" style="width: 75%;">
                                </div>
                                <input type="password" class="form-control" id="Password" placeholder="Contraseña" name="Password" style="border-color: white; border-bottom-color: #2e4da0;" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Ingresa tu contraseña</div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 20px; margin-top: 20px; background-color: #2e4da0;">Crear cuenta</button>
                                <p class="message" style="color: #2e4da0;">¿Ya tienes una cuenta? <a href="#" style="color: #2e4da0;">Inica Sesión</a></p>
                            </center>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3 mb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html>