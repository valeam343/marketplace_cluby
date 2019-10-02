<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap 4 Responsive Layout Example</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <style type="text/css">
        .imgbase{
            width: 100%;
            height: 90%;
            max-height: 0 auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
        <div class="container">
            <a href="#" class="navbar-brand mr-3">Cluby</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Servicios</a>
                    <a href="#" class="nav-item nav-link">Acerca de.</a>
                    <a href="#" class="nav-item nav-link">Contacto</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="#" class="nav-item nav-link">Registrar</a>
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>    
    </nav>
    <div class="container">
        <div class="jumbotron" style="background-image: url('{{asset('vista/degardado bg.svg')}}');background-repeat: no-repeat, repeat;background-position: center;background-size: cover;">
            <h1 style="color: white;">Cluby</h1>
            <p class="lead" style="color: white; text-align: justify;"><strong>¡Hola! te damos la bienvenida a CLUBY, el Marketplace ideal para aquellos proveedores profesionales que desean ofrecer las mejores opciones académicas para la comunidad infantil local y para todos los padres de familia que buscan brindar a sus hijos clases extraescolares que complementan su desarrollo fisico y cognitivo de sus peques.</strong></p>
            

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu" id="nombreMenu">
                    <option>elige...</option>
                </div>
            </div>
            <input type="text" class="form-control" id="search" name="search">
        </div>

    </div>
    <div class="row" id="idrow">

    </div>
    <div class="row">
     <!--Grid column-->
     <div class="col-lg-4 col-md-6 col-xl-6 mb-4">

       <img src="https://www.outsideonline.com/sites/default/files/styles/full-page/public/2019/05/06/summercamp-bestcamps-illo_h.jpg?itok=LNo_jPTs" class="img-fluid mb-4 imgbase" alt=""
       data-wow-delay="0.1s">

   </div>
   <div class="col-lg-4 col-md-6 col-xl-6 mb-4">

       <img src="https://img.freepik.com/vector-gratis/interior-aula-escuela-universidad-concepto-educativo-pizarra-tabla_1441-1694.jpg?size=626&ext=jpg" class="img-fluid mb-4 imgbase" alt=""
       data-wow-delay="0.2s">

   </div>
</div>
<!--Grid column-->
<div class="row">
   <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
       <img class="img-fluid imgbase mb-4" src="https://images.activityhero.com/activity_photo/31117/large/940baeac-7fd2-497a-85fb-737709d5b20b.jpg">
   </div>
   <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
       <img class="img-fluid imgbase mb-4" src="http://assets.activityhero.com/home/39f6025c-988a-4473-bb57-3127529182ef.jpg">
   </div>
   <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
       <img class="img-fluid imgbase mb-4" src="https://assets.activityhero.com/home/94b6789b-c601-4f1e-825c-5bd25e4ac020.jpg">
   </div>
   <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
       <img class="img-fluid imgbase mb-4" src="https://assets.activityhero.com/home/scholarship.jpg">
   </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card">
          <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 col-xl-3">
    <h2>CSS</h2>
    <p>CSS is used for describing the presentation of web pages. CSS can save a lot of time and effort. Our CSS tutorials will help you to learn the essentials of latest CSS3, so that you can control the style and layout of your website.</p>
    <p><a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
</div>
<div class="col-md-6 col-lg-4 col-xl-3">
    <h2>JavaScript</h2>
    <p>JavaScript is the most popular and widely used client-side scripting language. Our JavaScript tutorials will provide in-depth knowledge of the JavaScript including ES6 features, so that you can create interactive websites.</p>
    <p><a href="https://www.tutorialrepublic.com/javascript-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
</div>
<div class="col-md-6 col-lg-4 col-xl-3">
    <h2>Bootstrap</h2>
    <p>Bootstrap is a powerful front-end framework for faster and easier web development. Our Bootstrap tutorials will help you to learn all the features of latest Bootstrap 4 framework so that you can easily create responsive websites.</p>
    <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
</div>
<div class="col-md-6 col-lg-4 col-xl-3">
    <h2>PHP</h2>
    <p>PHP is the most popular server-side scripting language for creating dynamic web pages. Our PHP tutorials will help you to learn all the features of latest PHP7 scripting language so that you can easily create dynamic websites.</p>
    <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
</div>
<div class="col-md-6 col-lg-4 col-xl-3">
    <h2>SQL</h2>
    <p>SQL is a standard language designed for managing data in relational database management system. Our SQL tutorials will help you to learn the fundamentals of the SQL language so that you can efficiently manage your databases.</p>
    <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
</div>
<div class="col-md-6 col-lg-4 col-xl-3">
    <h2>References</h2>
    <p>Our references section outlines all the standard HTML5 tags and CSS3 properties along with other useful references such as color names and values, character entities, web safe fonts, language codes, HTTP messages, and more.</p>
    <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
</div>
<div class="col-md-6 col-lg-4 col-xl-3">
    <h2>FAQ</h2>
    <p>Our Frequently Asked Questions (FAQ) section is an extensive collection of FAQs that provides quick and working solution of common questions and queries related to web design and development with live demo.</p>
    <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
</div>
</div>

<div class="row">
    @foreach ($categorias as $cat)
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card">
          <img src="{{asset($cat->image)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$cat->idCategoria }} : {{$cat->nombre}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

@endforeach
</div>


<hr>
<footer>
    <div class="row">
        <div class="col-md-6">
            <p>Copyright © 2019 Tutorial Republic</p>
        </div>
        <div class="col-md-6 text-md-right">
            <a href="#" class="text-dark">Terms of Use</a> 
            <span class="text-muted mx-2">|</span> 
            <a href="#" class="text-dark">Privacy Policy</a>
        </div>
    </div>
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
                    $("#nombreMenu").empty();
                    
                                        
                },error: function (data){
                    console.log("error: ", data);
                }
            });
        }else{
            $("#idrow").html('');
        }
        
    })
</script>
</body>
</html>