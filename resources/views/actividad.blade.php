<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}">
    <!--<script type="text/javascript" src="{{asset('/js/rating.js')}}"></script>-->
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
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


    </style>
</head>
<body>
    @include('layouts.header')
    <div class="container-fluid">
        <div class="row">
            @foreach ($act as $ac) 
            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                <img src="{{asset($ac['imagen'])}}" class="img-fluid" alt="..." width="100%">
                <h1>Evaluacion General</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                
                <h2><strong>
                {{$ac['nombre']}}
                </strong></h2>
                <br>
                <h5>Descripción</h5>
                <p>{{$ac['descripcion']}}</p>
                <br>
                <h5>Ciudad</h5>
                <p>{{$ac['city']}}</p>
                <hr>
                @endforeach
                <h5>Notas</h5>
                <p>Some Text</p>
                <hr>
                <h2>Fecha</h2>
                <input id="datepicker" width="100%" />
                <script>
                    $('#datepicker').datepicker();
                </script>
                <hr>
                <h2>Fecha</h2>
                <input id="datepicker1" width="100%" />
                <script>
                    $('#datepicker1').datepicker();
                </script>
                <hr>
                <h1>MAPA</h1>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <hr>
                <h1>RESEÑAS</h1>
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
                </div>
              </div>
            </div>
        </div>
        <footer>
           @include('layouts.footer')
       </footer>
   </div>
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
     </script>
</body>
</html>