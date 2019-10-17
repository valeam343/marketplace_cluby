<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts.head')

  <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
</head>
<body>
    @include('layouts.header')
    <div class="container-fluid" id="cont">
      <div class="jumbotron" style="background-image: url('{{asset('vista/degardado bg.svg')}}');background-repeat: no-repeat, repeat; background-position: center; background-size: cover; position: relative;">
        <img src="img/ManchasHome/mancha (1).svg" id="mancha1">
        <img src="img/ManchasHome/mancha (2).svg" id="mancha2">
        <img src="img/ManchasHome/mancha (3).svg" id="mancha3">
        <img src="img/ManchasHome/mancha (4).svg" id="mancha4">
        <div class="jumbText">
          <center><h1 class="lead">¿Listo para iniciar la aventura?</h1></center>
          <br>
          <br>
          <div class="row" id="formhead">
            <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
            </div>
            <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
              <input type="text" class="form-control mb-2 mr-sm-2" name="search" id="search" placeholder="Actividad">
          </div>
          <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
              <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Ciudad">
          </div>
          <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
              <button type="submit" class="btn btn-outline-info btn-md" style="color: white; border-color: white;">Empezar</button>
          </div>
          <div class="col-lg-3 col-md-3 col-xl-3 mb-3">
          </div>
      </div>
      <center><img src="img/clubylogo.svg" style="width: 20%; opacity: .3;"></center>
  </div>


  <div class="row">
      <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
          </div>
          <div class="col-lg-8 col-md-8 col-xl-8 mb-8">


  <div class="container" id="categorias">
      <div class="row">
        <div class="col-sm" id="slider">
          <div class="slider-area slider">
             <div class="slider variable-width myslider">
              @foreach ($arrCategoria as $categoria)
              <div>
                <a href="{{URL::to('categoria/'.$categoria['pkCategoria'])}}">
                  <img class="img-fluid" src="https://via.placeholder.com/250">
                  <center><h5 style="font-weight:bold; color: white; padding-top: 5px; ">{{$categoria['nomCategoria']}}</h5></center>
                </a>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</div>
</div>
          </div>
          <div class="col-lg-2 col-md-2 col-xl-2 mb-2">
          </div>
  </div>




</div>
<div class="row">
  <center><p style="text-align: justify; width: 70%; font-size: 2vw; text-shadow: 4px 4px 8px gray;">¡Hola! te damos la bienvenida a CLUBY, el Marketplace ideal para aquellos proveedores profesionales que desean ofrecer las mejores opciones académicas para la comunidad infantil local y para todos los padres de familia que buscan brindar a sus hijos clases extraescolares que complementan su desarrollo fisico y cognitivo de sus peques.</p></center>
</div>
<hr>
<center><h1>TOP ACTIVIDADES</h1></center>
<br>
<div class="container">
  <div class="row">
    @foreach ($arr as $cat)
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch" style="margin-top: 10px;">
      <div class="card">
        <a href="{{URL::to('actividad/'.$cat['pkActividad'])}}"><img style="height: 200px;" src="#" class="responsive"></a>
        <div class="card-body">
          <h5 class="card-title">{{$cat['nomActividad'] }}</h5>
          <p class="card-text">{{$cat['desActividad']}}</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <a href="{{URL::to('actividad/'.$cat['pkActividad'])}}" class="btn btn-primary">Go somewhere</a>
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
              return obj.nombre;
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