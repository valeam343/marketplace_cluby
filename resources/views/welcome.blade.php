<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    
    <style type="text/css">
        
        @media (min-width: 1125px){
            .jumbText{
                margin: 7em 5em 0 6em;
            }
            .jumbotron{

                min-height: 727px;
            }
            #cont{
                padding: .5em 4em 0 4em;
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

        }
        @media(max-width: 580px){
            .jumbText{
                margin: 2em 0 0 0;

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
            font-size: 2vw;
            font-weight: bold;
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
                <h1 style="color: white;padding-left: 1px; font-weight: bold; font-size: 3vw;" id="mancha1">Cluby</h1>
                <p class="lead" style="color: white; text-align: justify;">¡Hola! te damos la bienvenida a CLUBY, el Marketplace ideal para aquellos proveedores profesionales que desean ofrecer las mejores opciones académicas para la comunidad infantil local y para todos los padres de familia que buscan brindar a sus hijos clases extraescolares que complementan su desarrollo fisico y cognitivo de sus peques.</p>
                <h1 class="lead" style="color: white; text-align: center;padding-top: 10px;">¿Listo para iniciar la aventura?</h1>
                <br>
                <br>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button class="btn btn-raised btn-secondary" type="button">Buscar</button>
                    <input type="text" class="form-control" id="search" name="search" placeholder="Actividad">
                </div>
                <button class="btn btn-raised btn-primary" type="button">Buscar</button>
                <input type="text" class="form-control" id="search" name="search" placeholder="Ciudad">
            </div>

        </div>
    </div>
    <div id="idspace">
        
    </div>
    <div class="row" id="idrow" style="background-color: #5193c3; border-radius: 10px; margin:0;">

    </div>
    <hr>
    <div class="row">
       <!--Grid column-->
       <div class="col-lg-6 col-md-12 col-xl-6 hover11">
        <a href="{{URL::to('/categoria/1')}}"><img src="https://www.outsideonline.com/sites/default/files/styles/full-page/public/2019/05/06/summercamp-bestcamps-illo_h.jpg?itok=LNo_jPTs" class="img-fluid imgbase" alt=""
         data-wow-delay="0.1s">
         <h2 class="txt">Cursos</h2>
     </a>
 </div>
 <div class="col-lg-6 col-md-12 col-xl-6 hover11">
    <a href="{{URL::to('/categoria/2')}}">
     <img src="https://img.freepik.com/vector-gratis/interior-aula-escuela-universidad-concepto-educativo-pizarra-tabla_1441-1694.jpg?size=626&ext=jpg" class="img-fluid  imgbase" alt=""
     data-wow-delay="0.2s">
     <h2 class="txt">Clases</h2>
 </a>
</div>
</div>
<!--Grid column-->
<div class="row">
    <div class="col-md-6 col-lg-4 col-xl-3 mb-4 hover11">
        <a href="">
         <img class="img-fluid imgbase mb-4" src="https://images.activityhero.com/activity_photo/31117/large/940baeac-7fd2-497a-85fb-737709d5b20b.jpg">
         <h2 class="txt">Manualidades</h2>
     </a>
 </div>
 <div class="col-md-6 col-lg-4 col-xl-3 mb-4 hover11">
    <a href="">
     <img class="img-fluid imgbase mb-4" src="http://assets.activityhero.com/home/39f6025c-988a-4473-bb57-3127529182ef.jpg">
     <h2 class="txt">Banda</h2>
 </a>
</div>
<div class="col-md-6 col-lg-4 col-xl-3 mb-4 hover11">
    <a href="">
     <img class="img-fluid imgbase mb-4" src="https://assets.activityhero.com/home/94b6789b-c601-4f1e-825c-5bd25e4ac020.jpg">
     <h2 class="txt">Mejores actividades del Año</h2>
 </a>
</div>
<div class="col-md-6 col-lg-4 col-xl-3 mb-4 hover11">
    <a href="">
     <img class="img-fluid imgbase mb-4" src="https://assets.activityhero.com/home/scholarship.jpg">
     <h2 class="txt">Becas</h2>
 </a>
</div>
</div>
<hr style="height: 217px;">
<center><h1>TOP ACTIVIDADES</h1></center>
<br>
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
</body>
</html>
