<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <header>
        @include('layouts.head')
    </header>
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBUqmvY7XlADAbFLiCVIMplOoCqz4UCejI"></script>
    <style type="text/css">
        @media(max-width: 768px){
            .slick-slide img {
                width: 100%!important;
                height: auto!important;
                object-fit: cover;
            }
        }
        .slick-slide img {
            height: 428px;
            width: 440px;
            object-fit: cover;
        }
        .checked {
            color: orange;
        }
        * {
            box-sizing: border-box;
        }
        .slider {
            width: 90%;
            margin: 0px auto;
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
        p {
            font-size: 15pt;
        }
    </style>
</head>
<body>
    @include('layouts.header')
    <div style="height: 50px;"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
                <div class="row">
                    <div class="col-sm" id="slider">
                        <div class="slider-area slider">
                            <div class="slider variable-width myslider">
                                @foreach($img as $imagen)
                                    <div>
                                        <img src="{{asset($imagen['rutaimagen'])}}" class="img-fluid" alt="..." style="border-radius: 5px;">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <p><strong>Evaluacion General</strong></p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </center>
            </div>
            @foreach ($act as $ac) 
            <div class="col-lg-5 col-md-5 col-xl-5 mb-5">
                <div class="overflow-auto" style="max-height: 600px;">
                    <p style="font-size: 25pt;"><strong>{{ucwords($ac['nomActividad'])}}</strong></p>
                    <hr>
                    <p>Descripción</p>
                    <p>{{ucfirst($ac['desActividad'])}}</p>
                    <hr>
                    <p><img src="{{asset('img/pin.svg')}}" width="2%">&nbsp;Ciudad</p>
                    {{ucwords($ac['estadoProveedor'])}}
                    <hr>
                    <p><img src="{{asset('img/emoti.svg')}}" width="2%">&nbsp;Edades</p>
                    <P>De {{$ac['edadMinimaActividad']}} a {{$ac['edadMaximaActividad']}} años</P>
                    <hr>
                    <p><img src="{{asset('img/lugar.svg')}}" width="2%">&nbsp;Ubicación</p>
                    <hr>
                    <p><img src="{{asset('img/calendar.svg')}}" width="2%">&nbsp;Fecha</p>
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
                    <p>Reseñas</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <hr>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                <div id="mapa" style="height: 600px;"></div>
            </div>
        </div>
    </div>
    <div style="height: 50px;"></div>
<script type="text/javascript">
    $('.myslider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
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