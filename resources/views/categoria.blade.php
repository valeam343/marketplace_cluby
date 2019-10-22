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
        @media(max-width: 420px){
            .responsive{
                width: 100%!important;
            }
        }
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
                {{ucwords($categoria)}}
                @endif
            </strong></h1>
        </center>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3" style="background-color: #460056; color: white; border-radius: 0px 10px 10px 0px; max-height: 600px;">
                <br>
                <br>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle text-light btn-sm" data-toggle="dropdown">Ciudad</button>
                    <div class="dropdown-menu">
                        @foreach($arrCategoria as $ac)
                            <a class="dropdown-item" href="#">{{$ac['ciudad']}}</a>
                        @endforeach
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
                <center>
                    <button type="button" class="btn btn-outline-light">Clase</button>
                    <button type="button" class="btn btn-outline-light">Curso</button>
                </center>
            </div>
<<<<<<< HEAD
            <hr style="background-color: white;">
            <center>
                <button type="button" class="btn btn-outline-light">Clase</button>
                <button type="button" class="btn btn-outline-light">Curso</button>
            </center>
        </div>
        <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
            <div class="overflow-auto" style="max-height: 600px;">
            @foreach($arrCategoria as $ac)
            <div class="card" style="border-radius: 10px;">
                <div class="row no-gutters">
                    <div class="card-header border-0" style="padding: 0;">
                        <a href="{{URL::to('/actividad/'.$ac['pkActividad'])}}">
                            <img class="responsive" data-location="Location 1" src="{{asset($ac['imagen'])}}" alt="..." style="height: 100%;
                            width: 200px;
                            object-fit: cover; border-radius: 5px 0 0 5px;">
                        </a>
                       
                    </div>
                    <div class="col">
                        <div class="card-block px-2">
                            <h5 class="card-title" style="font-weight: bold;">{{ucwords($ac['nomActividad'])}}</h5> 

                            <p class="card-text">{{$ac['desActividad']}}</p>
                            <p class="card-text"><img src="{{asset('img/pin.svg')}}" width="2%">&nbsp;{{$ac['ciudad']}}</p>
                            <p class="card-text">Edades entre: {{$ac['edadMinimaActividad']}} - {{$ac['edadMaximaActividad']}}</p>
                            <p class="card-text">Precio: {{$ac['referenciaPrecioActividad'].' $'}}</p>
                            <a href="{{URL::to('/actividad/'.$ac['pkActividad'])}}" class="btn btn-outline-info btn-sm" style="margin-bottom: 10px;">Ver actividad</a>
                            <br>
=======
            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                @foreach($arrCategoria as $ac)
                <div class="card" style="border-radius: 10px;">
                    <div class="row no-gutters">
                        <div class="card-header border-0" style="padding: 0;">
                            <a href="{{URL::to('/actividad/'.$ac['nomActividad'])}}">
                                <img id="imageLink" src="{{asset($ac['imagen'])}}" alt="..." data-location="Location 1" style="height: 250px; width: 250px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-block px-2">
                                <center><h4 class="card-title" style="font-weight: bold;">{{ucwords($ac['nomActividad'])}}</h4></center>
                                <p class="card-text">{{$ac['desActividad']}}</p>
                                <p class="card-text"><img src="{{asset('img/pin.svg')}}" width="2%">&nbsp;{{$ac['ciudad']}}</p>
                                <p class="card-text">De {{$ac['edadMinimaActividad']}} a {{$ac['edadMaximaActividad']}} años</p>
                                <p class="card-text">Precio: {{$ac['referenciaPrecioActividad'].' $'}}</p>
                                <a href="{{URL::to('/actividad/'.$ac['nomActividad'])}}" class="btn btn-outline-info btn-sm" style="margin-bottom: 10px;">Ver actividad</a>
                                <br>
                            </div>
>>>>>>> rama_kabir
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
<<<<<<< HEAD
            <hr>
            @endforeach
        </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
            <ul>
  <li>
    <a href="#" data-location="Location 1">Location 1</a>
  </li>
  <li>
    <a href="#" data-location="Location 2">Location 2</a>
  </li>
  <li>
    <a href="#" data-location="Location 3">Location 3</a>
  </li>
</ul>

            <div id="mapa" style="border-radius: 10px 0px 0px 10px; height: 600px;">
=======
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                <div id="mapa" style="border-radius: 10px 0px 0px 10px; height: 600px;"></div>
>>>>>>> rama_kabir
            </div>
        </div>
    </div>
<<<<<<< HEAD
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
    <script type="text/javascript">
        var gmarcadors = [];
        function mapaGoogle() {
            var locations = [{
                'name': 'Location 1',
                'adress': 'León',
                'location': {
                    'lat': 42.603,
                    'lon': -5.577
                }
            },
            {
                'name': 'Location 2',
                'adress': 'Salamanca',
                'location': {
                    'lat': 40.963,
                    'lon':  -5.669
                }
            },
            {
                'name': 'Location 3',
                'adress': 'Zamora',
                'location': {
                    'lat': 41.503,
                    'lon':  -5.744
                }
            }];
            var mapa = new google.maps.Map(document.getElementById('mapa'), {
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var limites = new google.maps.LatLngBounds();
            var infowindow = new google.maps.InfoWindow();
            var marcador, i;
            for (var i = 0; i < locations.length; i++) {
                gmarcadors[locations[i].name] = createmarcador(new google.maps.LatLng(locations[i].location.lat, locations[i].location.lon),locations[i].name + "<br>" + locations[i].adress);
                var infowindow = new google.maps.InfoWindow({
                    maxWidth: 350
                });
            }       
            function createmarcador(latlng, html, lable) {
                var marcador = new google.maps.Marker({
                    position: latlng,
                    map: mapa,
                    icon: {
                        url: 'data:image/svg+xml;charset=utf-8,' +
                        encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>'),
                        scaledSize: new google.maps.Size(44, 44),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(44, 44),
                        labelOrigin: new google.maps.Point(22, 18),
                    },
                    label: {
                        text: lable,
                        color: "#fff",
                    }             
                });
                gmarcadors.push(marcador);
                limites.extend(marcador.position);
                marcador.setOpacity(.75);
                google.maps.event.addListener(marcador, 'click', function() {
                    infowindow.setContent(html);
                    infowindow.open(mapa, marcador);
                });
                google.maps.event.addListener(mapa, 'click', function() {
                    infowindow.close();
                });
                return marcador;
            }
            mapa.fitBounds(limites);
        }
        google.maps.event.addDomListener(window, 'load', mapaGoogle);
        $('img').hover(
            function() {
                var $this = $(this),
                loc = $this.data('location');
                gmarcadors[loc].setIcon({
                url: 'data:image/svg+xml;charset=utf-8,' +
                encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path fill="red" d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>'),
                scaledSize: new google.maps.Size(44, 44),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(44, 44),
                labelOrigin: new google.maps.Point(22, 18),
            })
        },
        function() {
            var $this = $(this),
            loc = $this.data('location');
            gmarcadors[loc].setIcon({
                url: 'data:image/svg+xml;charset=utf-8,' +
                encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>'),
                scaledSize: new google.maps.Size(44, 44),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(44, 44),
                labelOrigin: new google.maps.Point(22, 18),
            });
        });
    </script>
=======
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
>>>>>>> dd8ff0ee29d5b12d96e34619ebcfcf42e8a1914a
</body>
@include('layouts.footer')
</html>
