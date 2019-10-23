<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts.head')
  <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
  <style type="text/css">
    .slick-slide img {
    width: 100%;
    height: 15vw;
    object-fit: cover;
    }
    .espacio{
    height: 112px;
    }
    @media(min-width: 1124px){
      #primerPanel{
        background-image: url('{{asset('vista/degardado bg.svg')}}');
        background-repeat: no-repeat, repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        height: 727px;
      }
    }
    @media(max-width: 1123px){
      #logo{
        width: 38%!important;
      }
      #primerPanel{
        background-image: url('{{asset('vista/degardado bg.svg')}}');
        background-repeat: no-repeat, repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        max-height: 727px!important;
      }
    }
    @media(max-width: 900px){
      #logo{

        width: 50%!important;
      }
    }
    @media(max-width: 650px){
      #logo{
        width: 70%!important;
      }
    }   
  </style>

</head>
<body>
  <header>
    @include('layouts.header')
    <div id="primerPanel">
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
      <form method="POST" action="/filtro">
       {{ csrf_field() }}
       <div class="row" style="margin-right: 0; margin-left: 0;">

        <div class="col-md-5">
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <input autocomplete="false" type="text" class="form-control{{ $errors->has('search') ? ' has-error' : '' }}" name="search" id="search" placeholder="Actividad" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-left: 6px solid purple; border-top: 0; border-right: 0;
                ">
                <small class="text-white">&nbsp;<strong>{{ $errors->first('search') }}</strong></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
            <div class="row">
              <div class="col-md-12">
                <select class="form-control" id="estado" name="estado" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-left: 6px solid purple; border-top: 0; border-right: 0;">
                  <option disabled selected value>Estado...</option>
                  @foreach($arr as $cat)
                  <option value="{{$cat['estadoProveedor']}}">{{$cat['estadoProveedor']}}</option>
                  @endforeach()
                </select>
                <small class="text-white">&nbsp;<strong>{{ $errors->first('estado') }}</strong></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2" >
          <button type="submit" id="btnBuscar" class="btn btn-info btn-md">Empezar</button>
        </div>
      </div>
    </form>
  </div>
  <div style="display: block; float:right;  width:120px; height: 300px;">&nbsp;</div>
</div>
<center><img id="logo" src="img/clubylogo.svg" style=" z-index: initial; width: 25%; opacity: .3; position: absolute; top: 45%;
left: 50%;
transform: translate(-50%, -45%);"></center>


<div class="row" style="margin-right: 0;
margin-left: 0;">
<div class="col-lg-12 col-md-12 col-xl-12 mb-2">
  <!--<div class="container" id="categorias">-->
    <div class="row">
      <div class="col-sm" id="slider">
        <div class="slider-area slider">
         <div class="slider variable-width myslider">
          @foreach ($arrCategoria as $categoria)
          <div>
            <a href="{{URL::to('categoria/'.$categoria['pkCategoria'])}}">
              <img class="img-fluid" src="{{asset($categoria['imagen'])}}" style="border-radius: 5px;">
            </a>
            <center><h5 style="font-weight:bold; color: white; padding-top: 5px; ">{{$categoria['nomCategoria']}}</h5></center>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</header>
<div class="container">
  <div class="espacio"></div> 
  <div class="row">
    <center><p style="text-align: justify; font-size: 22pt;">¡Hola! te damos la bienvenida a CLUBY, el Marketplace ideal para aquellos proveedores profesionales que desean ofrecer las mejores opciones académicas para la comunidad infantil local y para todos los padres de familia que buscan brindar a sus hijos clases extraescolares que complementan su desarrollo fisico y cognitivo de sus peques.</p></center>
  </div>
  <div class="espacio"></div>
  <center><h1>TOP ACTIVIDADES</h1></center>
  <br>
  <div class="container">

    <div class="row">

      @foreach ($arr as $cat)
      <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch" style="margin-top: 10px;">
        <div class="card">
          <a href="{{URL::to('actividad/'.$cat['nomActividad'])}}"><img style="height: 200px;" src="{{asset($cat['rutaimagen'])}}" class="responsive"></a>
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
    <div id="mybutton">
        <a href="#nab"><img src="/img/up.png" id="fixedbutton" class="img-fluid" style="height: auto; width: 8%;"></a> 
      </div>
  </div>
</div>

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
            return obj.nomActividad;
          }); 
          response(resp);
        }
      });
     },
     minLength: 1
   });
 })
</script>
<script type="text/javascript">
  $('.myslider').slick({
    arrows: false,
    dots: false,
    infinite: true,
    speed: 260,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 770,
      settings:{
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
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
@include('layouts.footer')
</html>
