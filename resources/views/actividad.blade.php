<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')
    <div class="container-fluid">
        <div class="row">
            @foreach ($act as $ac) 
            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
<<<<<<< HEAD
                <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="..." width="100%" style="border-radius: 10px;">
=======
                <img src="{{asset($ac['imagen'])}}" class="img-fluid" alt="..." width="100%">
>>>>>>> rama_valentin
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
                <h1>SLIDER</h1>
            </div>
        </div>
        <footer>
           @include('layouts.footer')
<<<<<<< HEAD
        </footer>
    </div>
=======
       </footer>
   </div>
>>>>>>> rama_valentin
</body>
</html>