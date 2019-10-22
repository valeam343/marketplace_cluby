<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts.head')

  <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
</head>
<body>
<<<<<<< HEAD
    <header>
        @include('layouts.header')
        <div style="background-image: url('{{asset('vista/degardado bg.svg')}}');background-repeat: no-repeat, repeat; background-position: center; background-size: cover; position: relative;">
            <img src="img/ManchasHome/mancha (1).svg" id="mancha1">
            <img src="img/ManchasHome/mancha (2).svg" id="mancha2">
            <img src="img/ManchasHome/mancha (3).svg" id="mancha3">
            <img src="img/ManchasHome/mancha (4).svg" id="mancha4">
            <center><h1 class="lead">¿Listo para iniciar la aventura?</h1></center>
            <div class="row justify-content-md-center" >
                <div class="col-lg-8 col-md-8 col-xl-8" id="formSearch" style = "position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 3px 0 3px 0;
                border-radius: 5px;
                border: 2px solid white;
                z-index: 1;">
                <form method="get" action="/filtro">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Actividad" style="background-color: rgba(0, 0, 0, 0.1); color: white; border-left: 6px solid purple; border-top: 0; border-right: 0;">
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle text-light btn-sm" data-toggle="dropdown">Ciudad</button>
                            <div class="dropdown-menu">
                                @foreach($arrCategoria as $ac)
                                    <a class="dropdown-item" href="#">{{ucwords($ac['ciudad'])}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-2" >
                            <button type="submit" id="btnBuscar" class="btn btn-info btn-md">Empezar</button>
                        </div>
                    </div>
                </form>
=======

  <header>
    @include('layouts.header')
    <div style="background-image: url('{{asset('vista/degardado bg.svg')}}');background-repeat: no-repeat, repeat; background-position: center; background-size: cover; position: relative;">
      <img src="img/ManchasHome/mancha (1).svg" id="mancha1">
      <img src="img/ManchasHome/mancha (2).svg" id="mancha2">
      <img src="img/ManchasHome/mancha (3).svg" id="mancha3">
      <img src="img/ManchasHome/mancha (4).svg" id="mancha4">
        <center><h1 class="lead">¿Listo para iniciar la aventura?</h1></center>

        <div class="row justify-content-md-center" style="margin-right: 0;
    margin-left: 0;">
          <div class="col-lg-8 col-md-8 col-xl-8" id="formSearch" style = "position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;">
            <form method="get" action="/filtro">
              <div class="row" style="margin-right: 0; margin-left: 0;">
                <div class="col-md-5">
                  <input type="text" class="form-control" name="search" id="search" placeholder="Actividad" style="background-color: rgba(0, 0, 0, 0.1); color: white; border-left: 6px solid purple; border-top: 0; border-right: 0;
                 ">
               </div>
               <div class="col-md-5">
                <input type="text" class="form-control" id="searchCiudad" name="searchCiudad" placeholder="Ciudad" style="background-color: rgba(0, 0, 0, 0.1); color: white; border-left: 6px solid purple; border-top: 0; border-right: 0;">
              </div>
              <div class="col-md-2" >
                <button type="submit" id="btnBuscar" class="btn btn-info btn-md">Empezar</button>
              </div>
>>>>>>> c0606fb5725ccefad63efd9d486b9ca02dc88b83
            </div>
          </form>
        </div>
<<<<<<< HEAD
        <center><img src="img/clubylogo.svg" style=" z-index: initial; width: 25%; opacity: .3; position: absolute; top: 45%;left: 50%; transform: translate(-50%, -45%);"></center>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-2">
                <div class="row">
                    <div class="col-sm" id="slider">
                        <div class="slider-area slider">
                            <div class="slider variable-width myslider">
                                @foreach ($arrCategoria as $categoria)
                                <div>
                                    <a href="{{URL::to('categoria/'.$categoria['pkCategoria'])}}">
                                        <img class="img-fluid" src="{{asset($categoria['imagen'])}}">
                                        <center><h5 style="font-weight:bold; color: white; padding-top: 5px; ">{{ucwords($categoria['nomCategoria'])}}</h5></center>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
=======
        <div style="display: block; float:right;  width:120px; height: 300px;">&nbsp;</div>
      
    </div>
    <center><img src="img/clubylogo.svg" style=" z-index: initial; width: 25%; opacity: .3; position: absolute; top: 45%;
    left: 50%;
    transform: translate(-50%, -45%);"></center>


    <div class="row" style="margin-right: 0;
    margin-left: 0;">
      <div class="col-lg-12 col-md-12 col-xl-12 mb-2">
        <!--<div class="container" id="categorias">-->
          <div class="row" style="margin-right: 0; margin-left: 0;">
            <div class="col-sm" id="slider">
              <div class="slider-area slider">
               <div class="slider variable-width myslider">
                @foreach ($arrCategoria as $categoria)
                <div>
                  <a href="{{URL::to('categoria/'.$categoria['pkCategoria'])}}">
                    <img class="img-fluid" src="{{asset($categoria['imagen'])}}" style="border-radius: 5px;">
                    <center><h5 style="font-weight:bold; color: white; padding-top: 5px; ">{{$categoria['nomCategoria']}}</h5></center>
                  </a>
>>>>>>> c0606fb5725ccefad63efd9d486b9ca02dc88b83
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!--</div>-->
      </div>
    </div>
  </div>
</header>

<div class="container">
<<<<<<< HEAD
=======
  <hr>
  <div class="row">
    <center><p style="text-align: justify; font-size: 22pt;">¡Hola! te damos la bienvenida a CLUBY, el Marketplace ideal para aquellos proveedores profesionales que desean ofrecer las mejores opciones académicas para la comunidad infantil local y para todos los padres de familia que buscan brindar a sus hijos clases extraescolares que complementan su desarrollo fisico y cognitivo de sus peques.</p></center>
  </div>
  <hr>
  <center><h1>TOP ACTIVIDADES</h1></center>
  <br>
  <div class="container">
>>>>>>> c0606fb5725ccefad63efd9d486b9ca02dc88b83
    <div class="row">
      @foreach ($arr as $cat)
      <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch" style="margin-top: 10px;">
        <div class="card">
          <a href="{{URL::to('actividad/'.$cat['nomActividad'])}}"><img style="height: 200px;" src="#" class="responsive"></a>
          <div class="card-body">
            <h5 class="card-title">{{$cat['nomActividad']}}</h5>
            <p class="card-text">{{$cat['desActividad']}}</p>
            
          </div>
          <div class="card-footer">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <a href="{{URL::to('actividad/'.$cat['nomActividad'])}}" class="btn btn-outline-primary">Ver actividad</a>
          </div>
        </div>

      </div>
      @endforeach
    </div>
  </div>
  <div id="mybutton">
    <a href="#nab"><img src="/img/up.png" id="fixedbutton" class="img-fluid" style="height: auto; width: 8%;"></a> 
  </div>
</div>
@include('layouts.footer')
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });


  $(document).ready(function() {
   $( "#search" ).autocomplete({
     source: function(request, response) {
       $.ajax({
         url: "{{url('searchs')}}",
         data: {
           term : request.term
         },
         dataType: "json",
         success: function(data){
          var resp = $.map(data,function(obj){
           return obj.nomActividad || obj.nomCategoria;
         }); 
          response(resp);
        }
      });
     },
     minLength: 1
   });

   $( "#searchCiudad" ).autocomplete({
     source: function(request, response) {
       $.ajax({
         url: "{{url('search')}}",
         data: {
           term : request.term
         },
         dataType: "json",
         success: function(data){
          var resp = $.map(data,function(obj){
           return obj.ciudad;
         }); 
          response(resp);
        }
      });
     },
     minLength: 1
   });
 });
</script>

<script type="text/javascript">
 $('.myslider').slick({
   arrows: false,
   dots: false,
   infinite: true,
   speed: 300,
   slidesToShow: 5,
   slidesToScroll: 5,
   autoplay: true,
   autoplaySpeed: 3000,
   responsive: [
   {
    breakpoint: 1024,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 4,
      infinite: true,
      dots: false
    }
  },
  {
    breakpoint: 770,
    settings:{
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
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
</body>
</html>
