<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAn-Cyw_k9cYTjctHrvmFvPSGrSGEWj0qU"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        var marcadores = [];
         function mapaGoogle(){
            var localidades = [
                ['León', 42.603, -5.577],
                ['Salamanca', 40.963, -5.669],
                ['Zamora', 41.503, -5.744]
            ];
            var mapa = new google.maps.Map(document.getElementById('mapa'), {
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var limites = new google.maps.LatLngBounds();
            var infowindow = new google.maps.InfoWindow();
            var marcador, i;
            for (i = 0; i < localidades.length; i++){
                marcador = new google.maps.Marker({position: new google.maps.LatLng(localidades[i][1], localidades[i][2]),
                map: mapa
                });
                marcadores.push(marcador);
                limites.extend(marcador.position);
                google.maps.event.addListener(marcador, 'click', (function(marcador, i) {
                return function() {
                    infowindow.setContent(localidades[i][0]);
                    infowindow.open(mapa, marcador);
                    }
                })(marcador, i));
            }
        mapa.fitBounds(limites);
    }
    google.maps.event.addDomListener(window, 'load', mapaGoogle);
</script>
<style type="text/css">
    #mapa{
      height: 100%;
  }
</style>


</head>
<body>
    @include('layouts.header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                <br>
                <p><a href="#">CLEAR</a></p>
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

                <div id="mapa"></div>

            </div>
        </div>


        <!--FOOTER-->
        <hr>
        <footer>
            @include('layouts.footer')
        </footer>
    </div>
</body>
</html>