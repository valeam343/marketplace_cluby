<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<<<<<<< HEAD
    @include('layouts.head')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}">
    <!--<script type="text/javascript" src="{{asset('/js/rating.js')}}"></script>-->
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
=======
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
      color: black;
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
  @include('layouts.head')
  <link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}">
  <!--<script type="text/javascript" src="{{asset('/js/rating.js')}}"></script>-->
  <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
>>>>>>> 472680d58d216f3bfa1799039f24e6557289ed9a

</style>
<<<<<<< HEAD
    
    <style type="text/css">
        .row{
            margin-right: 0!important;
            margin-left: 0!important;
        }
        @media (min-width: 1125px){
            .jumbText{
                margin: 7em 5em 0 6em;
            }
            .jumbotron{

                min-height: 727px;
            }
            #cont{
                padding: 0;
            }
        }
        @media (max-width: 1124px){
            .jumbText{
                margin: 3em 0 0 0;

        }
        .jumbotron{
            min-height: 300px;
        }
        #cont{
            padding: 0em;
        }
=======


<style type="text/css">

    @media (min-width: 1125px){
      .jumbText{
        margin: 7em 5em 0 6em;
    }
    .jumbotron{

        min-height: 727px;
    }
    #cont{
        padding: 0em 0em 0 0em;
    }
}
@media (max-width: 1124px){
  .jumbText{
    margin: 3em 0 0 0;

}
.jumbotron{
    min-height: 300px;
}
#cont{
    padding: .5em 2em 0 2em;
}
>>>>>>> 472680d58d216f3bfa1799039f24e6557289ed9a

}
@media(max-width: 580px){
  .jumbText{
    margin: 2em 0 0 0;

<<<<<<< HEAD
        }
        .jumbotron{
            min-height: 200px;
        }
        #cont{
            padding: 0em;
        }
    }
    #mancha1{
        position: absolute;
        top: 0px;
        left: 0px;
        max-width: 15%;
        height: auto;
    }
    #mancha2{
        position: absolute;
        top: 0px;
        right: 0px;
        max-width: 15%;
        height: auto;
    }
    #mancha3{
        position: absolute;
        bottom: 0px;
        right: 0px;
        max-width: 15%;
        height: auto;
    }
    #mancha4{
        position: absolute;
        bottom: 0px;
        left: 0px;
        max-width: 15%;
        height: auto;
    }
    .card{
        width: 100%;
    }
    .checked{
        color: orange;
    }
    img.responsive { 
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }
    .imgbase{
        width: 100%;
        height: 90%;
        max-height: 0 auto;
    }
    .hover11 img {
        opacity: 1;
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .hover11:hover img{
        opacity: .5;
=======
}
.jumbotron{
    min-height: 200px;
}
#cont{
    padding: .5em 1em 0 1em;
}
}
#mancha1{
  position: absolute;
  top: 0px;
  left: 0px;
  max-width: 15%;
  height: auto;
}
#mancha2{
  position: absolute;
  top: 0px;
  right: 0px;
  max-width: 15%;
  height: auto;
}
#mancha3{
  position: absolute;
  bottom: 0px;
  right: 0px;
  max-width: 15%;
  height: auto;
}
#mancha4{
  position: absolute;
  bottom: 0px;
  left: 0px;
  max-width: 15%;
  height: auto;
}
.card{
  width: 100%;
}
.checked{
  color: orange;
}
img.responsive { 
  width: 100%;
  height: 15vw;
  object-fit: cover;
}
.imgbase{
  width: 100%;
  height: 90%;
  max-height: 0 auto;
}
.hover11 img {
  opacity: 1;
  -webkit-filter: grayscale(0);
  filter: grayscale(0);
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.hover11:hover img{
  opacity: .5;
>>>>>>> 472680d58d216f3bfa1799039f24e6557289ed9a

}
.hover11:hover .txt{
  visibility: visible;
}
.txt{
  font-size: 24pt;
  text-align: center;
  font-weight: bold;
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -45%);
  visibility: hidden;
}
.lead{
  font-size: 3vw;
  font-weight: bold;
  color: white;
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-shadow: 6px 6px 10px black;
}
.form-control::-webkit-input-placeholder { color: white; 
  opacity: 0.5;
}
#mybutton {
  text-align: right;
  position: fixed;
  bottom: 5px;
  right: 5px; 
}
#fixedbutton:hover{
  border: 2px solid black;
}

#fixedbutton{
  border-radius: 5px;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
#formhead{
    position: relative;
}
#categorias{
    position: relative;
}
</style>
</head>
<body>
  @include('layouts.header')
  <div class="container-fluid" id="cont">
    <div class="jumbotron" style="background-image: url('{{asset('vista/degardado bg.svg')}}');background-repeat: no-repeat, repeat;background-position: center;background-size: cover;position: relative;">
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
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Actividad">
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
<<<<<<< HEAD
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
<div class="row" style="background-color: #5193C3">
=======
        <center><img src="img/clubylogo.svg" style="width: 25%; opacity: .3"></center>

    </div>

    <div class="container-fluid" id="categorias">
        <div class="row">
          <div class="col-sm" id="slider">
            <div class="slider-area slider">
               <div class="slider variable-width myslider">
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
<div class="row" style="background-color: #5193C3; height: 400px;">
>>>>>>> 472680d58d216f3bfa1799039f24e6557289ed9a
    <center><p style="text-align: justify; width: 80%; font-size: 2vw; color: white; text-shadow: 4px 4px 8px black;">¡Hola! te damos la bienvenida a CLUBY, el Marketplace ideal para aquellos proveedores profesionales que desean ofrecer las mejores opciones académicas para la comunidad infantil local y para todos los padres de familia que buscan brindar a sus hijos clases extraescolares que complementan su desarrollo fisico y cognitivo de sus peques.</p></center>

</div>
<hr>
<center><h1>TOP ACTIVIDADES</h1></center>
<br>
<div class="container">

    <div class="row">
      @foreach ($arr as $cat)
      <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch" style="margin-top: 10px;">
        <div class="card">
          <a href="{{URL::to('actividad/'.$cat['idActividad'])}}"><img style="height: 200px;" src="{{asset($cat['imagen'])}}" class="responsive"></a>
          <div class="card-body">
            <h5 class="card-title">{{$cat['nombre'] }}</h5>
            <p class="card-text">{{$cat['descripcion']}}</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <a href="{{URL::to('actividad/'.$cat['idActividad'])}}" class="btn btn-primary">Go somewhere</a>
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
  $('#search').on('keyup', function(){
    $value =$(this).val();
    if($value != ''){
      $.ajax({ 
        type : 'get',
        url  : '{{URL::to('search')}}',
        data : {'search' : $value},
        success: function(data){
                    //console.log(data);
                    $("#idspace").html('<br style = "height: 117px;">');
                    var newurl = "";
                    var ur = "{{URL::to('/actividad/1')}}";
                    $.each(data, function(key,value){
                        //console.log("index: "+index+" value: "+value);
                        
                        newurl += value.replace(':url', ur);
                        $("#idrow").html(newurl);
                    })
                    //newurl = data.replace(':url', ur);
                    //$("#idrow").html(newurl);
                    //$("#nombreMenu").empty();
                },error: function (data){
                    console.log("error: ", data);
                }
            });
  }else{
      $("#idrow").html('');
      $("#idspace").html('')
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
