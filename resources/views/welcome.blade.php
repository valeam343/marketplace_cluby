<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    
    <style type="text/css">
      @media screen and ( max-width: 1024px; max-height: 300px; ) {
      img.responsive { width: 100%; height: 100%;}
      }
      @media screen and ( min-width: 1025px; min-height: 300px;) {
      img.responsive { width: 100%;}
      }
      img.responsive { height: 300px; }
        .checked {
          color: orange;
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
            text-align: center;
            font-weight: bold;
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -45%);
            visibility: hidden;
        }
    </style>

</head>
<body>
    @include('layouts.header')
    <div class="container">
        <div class="jumbotron" style="background-image: url('{{asset('vista/degardado bg.svg')}}');background-repeat: no-repeat, repeat;background-position: center;background-size: cover;">
            <h1 style="color: white;">Cluby</h1>
            <p class="lead" style="color: white; text-align: justify;"><strong>¡Hola! te damos la bienvenida a CLUBY, el Marketplace ideal para aquellos proveedores profesionales que desean ofrecer las mejores opciones académicas para la comunidad infantil local y para todos los padres de familia que buscan brindar a sus hijos clases extraescolares que complementan su desarrollo fisico y cognitivo de sus peques.</strong></p>
            <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class="form-control" id="search" name="search">
                </div>
            </div>
        </div>

        <div class="row" id="idrow" style="background-color: #1e6caa; border-radius: 10px;">

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
 <hr>
 <center><h1>TOP ACTIVIDADES</h1></center>
 <br>
<div class="row">
    @foreach ($arr as $cat)
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch">
        <div class="card">
            <a href="{{URL::to('actividad/'.$cat['idActividad'])}}"><img src="{{asset($cat['imagen'])}}" class="card-img-top responsive" alt="..."></a>
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


<footer>
    @include('layouts.footer')
</footer>
</div>

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
                    console.log(data);
                    $("#idrow").html(data);
                    //$("#nombreMenu").empty();
                },error: function (data){
                    console.log("error: ", data);
                }
            });
        }else{
            $("#idrow").html('');
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
                        console.log(obj.image);
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
