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
    <style type="text/css">
        div.gj-slider{
            width: 100%!important;
            z-index: 2!important;
        }
        .gj-datepicker-md [role=right-icon]{
            color: white;
        }
        .gj-textbox-md {
            color: white;
            border-bottom: 1px solid white;
        }

    </style>
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
                <p><a href="#" class="btn btn-outline-light">CLEAR</a></p>
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
                    <p>Precio</p>
                    <input id="sliderx" width="300" />
                    Valor: <span id="valuex"></span>
                </div>
                <hr style="background-color: white;">
                <div class="form-group">
                    <p>Horario</p>
                    <input id="slider" width="300" />
                    Valor: <span id="value"></span>
                </div>
                <hr style="background-color: white;">
                <div class="form-group">
                    <p>Fecha</p>
                    <input id="datepicker" width="100%" />
                </div>
                <hr style="background-color: white;">
                <div class="dropdown">
                   <p>Edad</p>

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
                <hr style="background-color: white;">
                <center>
                    <button type="button" class="btn btn-outline-light">Clase</button>
                    <button type="button" class="btn btn-outline-light">Curso</button>
                </center>
                
            </div>
            <!--
            <div class="col-lg-6 col-md-6 col-xl-3 mb-3">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="">
                          <h5>Collapsible Group Item #0</h5>
                        </h5>
                      </div>
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        </div>
                    </div>
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          Collapsible Group Item #1
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Collapsible Group Item #2
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Collapsible Group Item #3
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        -->
            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                @foreach($act as $ac)
                <div class="card" style="border-radius: 10px;">
                    <div class="row no-gutters">
                        <div class="card-header border-0">
                            <a href="{{URL::to('/actividad/'.$ac->idActividad)}}">
                                <img src="{{asset($ac->imagen)}}" alt="..." width="250px">
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
            
    </div>
    <script type="text/javascript">
        $('#sliderx').slider({
            slide: function (e, value) {
                document.getElementById('valuex').innerText = value;
            }
        });

        $('#slider').slider({
            slide: function (e, value) {
                document.getElementById('value').innerText = value;
            }
        });
        $('#datepicker').datepicker();
    </script>
</body>
@include('layouts.footer')
</html>