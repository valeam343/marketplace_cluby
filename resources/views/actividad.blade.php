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
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
        <div class="container">
            <a href="#" class="navbar-brand mr-3">Cluby</a>
            <button type="button" class="navbar-toggler sticky" data-toggle="collapse" data-target="#navbarCollapse">
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
    <div class="container">
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-12 col-md-12 col-xl-12 mb-12">
                <div class="card">
                    <div class="card-header">NOMBRE ACTIVIDAD</div>
                    <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Descripcion de la actividad</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        <br>
                        <!--menus de informacion en la vista de actividad-->
                        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#demo">Informacion</button>
                        <div id="demo" class="collapse">
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                        </div>
                        <br>
                        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#demo2">Reseñas</button>
                        <div id="demo2" class="collapse">
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                        </div>
                        <br>
                        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#demo3">Contactos</button>
                        <div id="demo3" class="collapse">
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                            Lorem ipsum dolor text....
                        </div>
                        <br>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Sponsored By</small>
                    </div>
                </div>
            </div>
        </div>
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