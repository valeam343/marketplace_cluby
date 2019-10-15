<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts.head')
  <link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}">
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
  *{ margin:0; padding: 0; }
  #mapa{
      height: 400px;
  }
</style>
</head>
<body>
<<<<<<< HEAD
  @include('layouts.header')
  <div class="container-fluid">
    <div class="row">
      @foreach ($act as $ac) 
      <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
        <img src="{{asset($ac['imagen'])}}" class="img-fluid" alt="..." width="100%">
        <h5><strong>Evaluacion General</strong></h5>
    </div>
    <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
        <h1><strong>
          {{$ac['nombre']}}
      </strong></h1>
      <br>
      <h3>Descripción</h3>
      <p>{{$ac['descripcion']}}</p>
      <br>
      <h3>Ciudad</h3>
      <p>{{$ac['city']}}</p>
      <hr>
      @endforeach
      <h3>Notas</h3>
      <p>Some Text</p>
      <h3>Fecha</h3>                <input id="datepicker" width="100%" />
      <script>
          $('#datepicker').datepicker();
      </script>
      <hr>
      <h3>Fecha</h3>
      <input id="datepicker1" width="100%" />
      <script>
          $('#datepicker1').datepicker();
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
  <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
    <br>
    <br>
    <br>
    <br>
    <br>
    <img src="{{asset('img/pin.svg')}}" width="10%"> Locacion
    <br>
    <br>
    <img src="{{asset('img/emoti.svg')}}" width="10%"> Edad
    <br>
    <br>
    <img src="{{asset('img/calendar.svg')}}" width="10%"> Fecha
    <br>
    <br>
    <img src="{{asset('img/lugar.svg')}}" width="10%"> Lugar
    <br>
    <br>
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
=======
    @include('layouts.header')
    <div class="container-fluid">
        <div class="row">
            @foreach ($act as $ac) 
            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                <img src="{{asset($ac['imagen'])}}" class="img-fluid" alt="..." width="100%">
                <h5><strong>Evaluacion General</strong></h5>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                <h1><strong>
                    {{$ac['nombre']}}
                </strong></h1>
                <br>
                <h3>Descripción</h3>
                <p>{{$ac['descripcion']}}</p>
                <br>
                <h3>Ciudad</h3>
                <p>{{$ac['city']}}</p>
                <hr>
                @endforeach
                <h3>Notas</h3>
                <p>Some Text</p>
                <h3>Fecha</h3>                <input id="datepicker" width="100%" />
                <script>
                    $('#datepicker').datepicker();
                </script>
                <hr>
                <h3>Fecha</h3>
                <input id="datepicker1" width="100%" />
                <script>
                    $('#datepicker1').datepicker();
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
            <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
                <br>
                <br>
                <br>
                <br>
                <br>
                <img src="{{asset('img/pin.svg')}}" width="10%"> Locacion
                <br>
                <br>
                <img src="{{asset('img/emoti.svg')}}" width="10%"> Edad
                <br>
                <br>
                <img src="{{asset('img/calendar.svg')}}" width="10%"> Fecha
                <br>
                <br>
                <img src="{{asset('img/lugar.svg')}}" width="10%"> Lugar
                <br>
                <br>
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
>>>>>>> 472680d58d216f3bfa1799039f24e6557289ed9a
          </div>
      </div>
  </div>
</div>
</div>
<<<<<<< HEAD
</div>

</div>
=======
>>>>>>> 472680d58d216f3bfa1799039f24e6557289ed9a
<script src="{{asset('/js/slick.js')}}" type="text/javascript"></script>
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
<<<<<<< HEAD
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

=======
         }
     },
     {
       breakpoint: 480,
       settings: {
         slidesToShow: 3,
         slidesToScroll: 3
     }
 }
       /*,
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
     }*/
         // You can unslick at a given breakpoint now by adding:
         // settings: "unslick"
         // instead of a settings object
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

>>>>>>> 472680d58d216f3bfa1799039f24e6557289ed9a
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
<<<<<<< HEAD
 @include('layouts.footer')
=======
@include('layouts.footer')
>>>>>>> 472680d58d216f3bfa1799039f24e6557289ed9a
</html>
