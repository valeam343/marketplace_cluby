<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts.head')
  <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/card.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}">
  <style type="text/css">

.espacio{
    height: 112px;
}
#primerPanel{
    background-image: url('{{asset('vista/degardado bg.svg')}}');
    background-repeat: no-repeat, repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    max-height: 727px!important;
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
              <option disabled selected value>Ciudad...</option>
              @foreach($arrCiudad as $ciudad)
              <option value="{{$ciudad['nomCiudad']}}">{{$ciudad['nomCiudad']}}</option>
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
              <div class= "col-md-12">
                <a href="{{URL::to('categoria/'.$categoria['pkCategoria'])}}">
                  <img class="img-fluid" src="{{asset($categoria['imagen'])}}" style="border-radius: 5px; height: 200px;object-fit: cover;">
              </a>
              <center><p style="font-weight: bold;text-align: center;color: white;">{{$categoria['nomCategoria']}}</p></center>
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
    <div class="container">
      <div class="espacio"></div> 
      <div class="container">

      </div>
      <div class="row">
        <center><p style="text-align: justify; font-size: 18pt;">¡Hola! te damos la bienvenida a CLUBY, el Marketplace ideal para aquellos proveedores profesionales que desean ofrecer las mejores opciones académicas para la comunidad infantil local y para todos los padres de familia que buscan brindar a sus hijos clases extraescolares que complementan su desarrollo fisico y cognitivo de sus peques.</p></center>
    </div>
    <div class="espacio"></div>
    <h1 style="font-size: 34pt;text-align: center;">TOP ACTIVIDADES</h1>
    <br>
</div>

<div class="container">

    <div class="row">

      @foreach ($arr as $cat)
      <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch" style="margin-top: 10px;">
        <div class="square-card">
          <a href="{{URL::to('actividad/'.$cat['nomActividad'])}}" alt="square card">
            <div class="card-header" style="background-image: url('{{asset($cat['rutaimagen'])}}');
            background-repeat: no-repeat;
            background-size: cover; background-color: #460053;">
            <div class="card-header_overlay">
                <span class="pill">$0.00</span>
            </div>
        </div>
        <div class="card-title">
          <h4>{{$cat['nomActividad']}}</h4>   
          <div style="margin-left: 20px;">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
          </div>
      </div>
      <!--
      <div class="cta">
       <a href="https://google.com">view recipe</a>
        <a  href="">Ver</a>
    </div>-->
</a>
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
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
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