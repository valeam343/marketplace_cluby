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
    @media(max-width: 768px){
      #mapcontainer{
        position: inherit!important;
    }
}
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
#map{
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
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                <img src="{{asset($ac['rutaimagen'])}}" class="img-fluid" alt="..." data-location="{{$ac['nomActividad']}}" style="height: 428px; width: 440px;">
                <br>
                <br>
                <h5><strong>Evaluacion General</strong></h5>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-lg-5 col-md-5 col-xl-5 mb-5">
                <h3><strong>{{ucwords($ac['nomActividad'])}}</strong></h3>
                <hr>
                <h5>Descripción</h5>
                <p>{{ucfirst($ac['desActividad'])}}</p>
                <hr>
                <h5><img src="{{asset('img/pin.svg')}}" width="2%">&nbsp;Ciudad</h5>
                {{ucwords($ac['estadoProveedor'])}}
                <hr>
                <h5><img src="{{asset('img/emoti.svg')}}" width="2%">&nbsp;Edades</h5>
                <P>De {{$ac['edadMinimaActividad']}} a {{$ac['edadMaximaActividad']}} años</P>
                <hr>
                <h5><img src="{{asset('img/lugar.svg')}}" width="2%">&nbsp;Ubicación</h5>
                <hr>
                <h5><img src="{{asset('img/calendar.svg')}}" width="2%">&nbsp;Fecha</h5>
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
                <h5>Reseñas</h5>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <hr>
            </div>
            <div class="col-lg-4 col-md-4 col-xl-4 mb-4" id="mapcontainer" style="position: fixed; right: 0">
              <div id="mapa" style="height: 600px;"></div>
          </div>
      </div>
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm" id="slider">
                <div class="slider-area slider">
                    <div class="slider variable-width myslider">
                            <!--
                            
                                <div>
                                    <a href="#">
                                        <img class="img-fluid" src="#">
                                        <center><h5 style="font-weight:bold; color: white; padding-top: 5px; "></h5></center>
                                    </a>
                                </div>
                            -->
                        </div>
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
</script>
<script type="text/javascript">
        function initialize() {
      var marcadores = [
        ['{{$ac['nomActividad']}}', {{$ac['latitud']}}, {{$ac['longitud']}}]
      ];
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 14,
        center: new google.maps.LatLng({{$ac['latitud']}}, {{$ac['longitud']}}),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map,
          icon: {
                        url: 'data:image/svg+xml;charset=utf-8,' +
                        encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>'),
                        scaledSize: new google.maps.Size(44, 44),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(44, 44),
                        labelOrigin: new google.maps.Point(22, 18),
                    }
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
@include('layouts.footer')
</html>
