<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CLUBY</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <style type="text/css">
        .imgbase{
            width: 100%;
            height: 90%;
            max-height: 0 auto;
        }
    </style>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
        <div class="container">
            <a href="#" class="navbar-brand mr-3">Cluby</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Servicios</a>
                    <a href="#" class="nav-item nav-link">Acerca de.</a>
                    <a href="#" class="nav-item nav-link">Contacto</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="#" class="nav-item nav-link">Registrar</a>
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>    
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="..." width="100%">
                <hr>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Locación
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <h2>Precio</h2>
                    <input type="range" class="custom-range" name="range" min="0" max="100">
                </div>
                <hr>
                <div class="form-group">
                    <h2>Horario</h2>
                    <input type="range" class="form-control-range" name="range">
                </div>
                <hr>
                <div class="form-group">
                    <h2>Fecha</h2>
                    <input id="datepicker" width="100%" />
                    <script>
                        $('#datepicker').datepicker();
                    </script>
                </div>
                <hr>




                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Edad
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </div>
                <hr>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Actividad
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </div>
                <hr>



            </div>
            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="card-header border-0">
                            <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="..." width="250px">
                        </div>
                        <div class="col">
                            <div class="card-block px-2">
                                <h4 class="card-title">Nombre actividad</h4>
                                <p class="card-text">Descripcion de actividad</p>
                                <a href="#" class="btn btn-primary">Link actividad</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="row no-gutters">
                        <div class="card-header border-0">
                            <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="..." width="250px">
                        </div>
                        <div class="col">
                            <div class="card-block px-2">
                                <h4 class="card-title">Nombre actividad</h4>
                                <p class="card-text">Descripcion de actividad</p>
                                <a href="#" class="btn btn-primary">Link actividad</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="row no-gutters">
                        <div class="card-header border-0">
                            <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="..." width="250px">
                        </div>
                        <div class="col">
                            <div class="card-block px-2">
                                <h4 class="card-title">Nombre actividad</h4>
                                <p class="card-text">Descripcion de actividad</p>
                                <a href="#" class="btn btn-primary">Link actividad</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.841543229201!2d-86.8407483858515!3d21.1587033887072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b5a12c21f7f%3A0x1d7b3859bbd68665!2sSanti%20Soluciones!5e0!3m2!1ses-419!2smx!4v1569953466974!5m2!1ses-419!2smx" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>


        <!--FOOTER-->
        <hr>
        <footer>
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright © 2019 CLUBY Marketplace</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" class="text-dark">Terms of Use</a> 
                    <span class="text-muted mx-2">|</span> 
                    <a href="#" class="text-dark">Privacy Policy</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>