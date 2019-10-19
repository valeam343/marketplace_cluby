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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBUqmvY7XlADAbFLiCVIMplOoCqz4UCejI"></script>
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
<header>@include('layouts.header')</header>
<body>

    <br>
    <div class="container-fluid">
        <center>

            <h1><strong>
                @if(!empty($categoria))
                {{$categoria}}
                @endif
            </strong></h1>
        </center>
        <div class="row">
<<<<<<< HEAD
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3" style="background-color: #460056; color: white; border-radius: 0px 10px 10px 0px; height: 600px;">
=======
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3" style="background-color: #460056; color: white; border-radius: 0px 10px 10px 0px; max-height: 600px;">
>>>>>>> rama_valentin
                <br>
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
        <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
            @foreach($arrCategoria as $ac)
            <div class="card" style="border-radius: 10px;">
                <div class="row no-gutters">
                    <div class="card-header border-0" style="padding: 0;">
                        <a href="{{URL::to('/actividad/'.$ac['pkActividad'])}}">
                            <img src="{{asset($ac['imagen'])}}" alt="..." style="height: 200px;
                            width: 200px;
                            object-fit: cover;">
                        </a>
                       <center><h4 class="card-title" style="font-weight: bold;">{{ucwords($ac['nomActividad'])}}</h4></center> 
                    </div>
                    <div class="col">
                        <div class="card-block px-2">
                            
                            <p class="card-text">{{$ac['desActividad']}}</p>
                            <p class="card-text"><img src="{{asset('img/pin.svg')}}" width="2%">&nbsp;{{$ac['ciudad']}}</p>
                            <p class="card-text">Edades entre: {{$ac['edadMinimaActividad']}} - {{$ac['edadMaximaActividad']}}</p>
                            <p class="card-text">Precio: {{$ac['referenciaPrecioActividad'].' $'}}</p>
                            <a href="{{URL::to('/actividad/'.$ac['pkActividad'])}}" class="btn btn-outline-info btn-sm" style="margin-bottom: 10px;">Ver actividad</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
        <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
            <div id="mapa" style="border-radius: 10px 0px 0px 10px; height: 600px;">
            </div>
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
<script>
    var marcadores = [];
    function mapaGoogle() {
      var localidades = [
      ['Santi Soluciones', 42.603, -5.577],
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
      for (i = 0; i < localidades.length; i++) {
        marcador = new google.maps.Marker({
          position: new google.maps.LatLng(localidades[i][1], localidades[i][2]),
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
</body>
@include('layouts.footer')
</html>
