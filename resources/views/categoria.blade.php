<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
    integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
    crossorigin=""></script>
</head>
<body>
    @include('layouts.header')
    <div class="container-fluid">
        <center>
            @foreach($cat as $categoria)
            <h1><strong>
                {{$categoria['nombre']}}
            </strong></h1>
            @endforeach
        </center>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3" style="background-color: #460056; color: white; border-radius: 0px 10px 10px 0px;">
                <br>
                <p><a href="#" class="text-light">CLEAR</a></p>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle text-light" data-toggle="dropdown">
                        Locación
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </div>
                <hr style="background-color: white;">
                <div class="form-group">
                    <h2>Precio</h2>
                    <input type="range" class="custom-range" name="range" min="0" max="100">
                </div>
                <hr style="background-color: white;">
                <div class="form-group">
                    <h2>Horario</h2>
                    <input type="range" class="form-control-range" name="range">
                </div>
                <hr style="background-color: white;">
                <div class="form-group">
                    <h2>Fecha</h2>
                    <input id="datepicker" width="100%" />
                    <script>
                        $('#datepicker').datepicker();
                    </script>
                </div>
                <hr style="background-color: white;">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle text-light" data-toggle="dropdown">
                        Edad
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </div>
                <hr style="background-color: white;">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle text-light" data-toggle="dropdown">
                        Actividad
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                @foreach($act as $ac)
                <div class="card" style="border-radius: 10px;">
                    <div class="row no-gutters">
                        <div class="card-header border-0">
                            <a href="{{URL::to('/actividad/'.$ac->idActividad)}}">
                            <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="..." width="250px">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-block px-2">
                                <h4 class="card-title">{{$ac->nombre}}</h4>
                                <p class="card-text">{{$ac->descripcion}}</p>
                                <a href="{{URL::to('/actividad/'.$ac->idActividad)}}" class="btn btn-primary">Link actividad</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
                <div class="card" style="border-radius: 10px;">
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
                <div class="card" style="border-radius: 10px;">
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
                <div id="mapid" style="border-radius: 10px 0px 0px 10px; height: 600px;"></div>
                <script>
                    var mymap = L.map('mapid').setView([40.963, -5.669], 7);
                    var marker = L.marker([42.603, -5.577]).addTo(mymap);
                    var mark = L.marker([40.963, -5.669]).addTo(mymap);
                    var mark = L.marker([41.503, -5.744]).addTo(mymap);



                    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoic3RheXRydWUxMCIsImEiOiJjazFncGh6ZjgxNzY3M2NzMXRuMWtqeDV2In0.IwvdiWj2SxkTIP_IdysbiA', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        maxZoom: 18,
                        id: 'mapbox.streets',
                        accessToken: 'your.mapbox.access.token'
                    }).addTo(mymap);

                </script>
            </div>
        </div>
        <footer>
            @include('layouts.footer')
        </footer>
    </div>
</body>
</html>