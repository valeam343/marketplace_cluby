<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
  <header>
    @include('layouts.head')
  </header>
  <!--<script type="text/javascript" src="{{asset('/js/rating.js')}}"></script>-->
  <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBUqmvY7XlADAbFLiCVIMplOoCqz4UCejI"></script>
  <style type="text/css">
    .checked {
      color: orange;
  }
  * {
      box-sizing: border-box;
  }
  .slider {
      width: 90%;
      margin: 100px auto;
  }
  .slick-slide {
      margin: 0px 20px;
  }
  .slider.variable-width{
      width:100%;
  }
  .slick-prev:before,
  .slick-next:before {
      color: red;
  }
  .slick-slide img{
      max-width: 100%;
      width: auto!important;
  }
  .slick-slide {
      transition: all ease-in-out .3s;
      opacity: 1;
  }
  .slick-active {
      opacity: 1;
  }
  .slick-current {
      opacity: 1;
  }
  *{ margin:0;
    padding: 0;
}
  #mapa{
      height: 400px;
  }
</style>
</head>
<body>
    @include('layouts.header')
    <br>
    <div class="container-fluid">
        <div class="row">
            @foreach ($act as $ac) 
            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                <img src="{{asset($ac['imagen'])}}" class="img-fluid" alt="..." width="100%">
                <br>
                <br>
                <h3><strong>Descripción</strong></h3>
                <p>{{$ac['desActividad']}}</p>
                <h5><strong>Evaluacion General</strong></h5>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-lg-8 col-md-8 col-xl-8 mb-8">
                <h1><strong>{{$ac['nomActividad']}}</strong></h1>
                <br>
                <h3><img src="{{asset('img/pin.svg')}}" width="2%">&nbsp;Ciudad</h3>
                <p>{{$ac['ciudad']}}</p>
                <hr>
               
                <h3><img src="{{asset('img/emoti.svg')}}" width="2%">&nbsp;Edad</h3>
                <P>Entre: {{$ac['edadMinimaActividad']}} - {{$ac['edadMaximaActividad']}}</P>
                <hr>
                <h3><img src="{{asset('img/lugar.svg')}}" width="2%">&nbsp;Lugar</h3>
                <hr>
                <h3><img src="{{asset('img/calendar.svg')}}" width="2%">&nbsp;Fecha</h3>
                @endforeach
                @if(!empty($grp))
                @foreach($grp as $grupo)
                <p>Disponible de {{$grupo['fInicialActividadesGrupos']}} a {{$grupo['fFinalActividadesGrupos']}}</p>
                @endforeach
                @endif
                <input id="datepicker" width="100%"/>
                <script>
                    $('#datepicker').datepicker();
                </script>
                <hr>
                
                <h3>MAPA</h3>
                <div id="mapa"></div>
                <hr>
                <h3>RESEÑAS</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                
                <hr>
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm" id="slider">
              <div class="slider-area slider">
               <div class="slider variable-width myslider ">
                <div>
                  <img class="img-fluid" src="https://via.placeholder.com/250">
              </div>
              <div>
                  <img class="img-fluid" src="https://via.placeholder.com/250">
              </div>
              <div>
                  <img class="img-fluid" src="https://via.placeholder.com/250">
              </div>
              <div>
                  <img class="img-fluid" src="https://via.placeholder.com/250">
              </div>
              <div>
                  <img class="img-fluid" src="https://via.placeholder.com/250">
              </div>
              <div>
                  <img class="img-fluid" src="https://via.placeholder.com/250">
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
 $('.myslider').slick({
   dots: false,
       //variableWidth: true,
       infinite: true,
       speed: 300,
       slidesToShow: 5,
       slidesToScroll: 5,
       autoplay: true,
       autoplaySpeed: 3000,
       responsive: [
       {
         breakpoint: 600,
         settings: {
           slidesToShow: 4,
           slidesToScroll: 4,
           infinite: true,
           dots: false
       }
   },
   {
     breakpoint: 480,
     settings: {
       slidesToShow: 3,
       slidesToScroll: 3
   }
}
]
});
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