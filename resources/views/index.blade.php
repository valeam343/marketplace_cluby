<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/index.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #460056; height: 56px;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand mr-3"><h4><strong>Cluby</strong></h4></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <form >
                        <div class="input-group mb-3" style="margin-top: 10px;">
                            <div class="input-group-prepend">
                                <img src="{{asset('img/search.svg')}}">
                            </div>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </form>
                </div>  
                <div class="navbar-nav ml-auto">
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                            <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" style="color: white; font-size: 100%;">
                                Perfil
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link">Guardado</a>
                    <a href="#" class="nav-item nav-link">Mensajes</a>
                    <div style="border-left: 2px solid; color: white;"></div>
                    <span>&nbsp;&nbsp;</span><img src="{{asset('img/shop.svg')}}" width="5%">
                </div>
            </div>
        </div>    
    </nav>
    <div class="container-fluid" id="divheader">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" id="subheader">
            <p id="textoheader1">PUBLICA TU ACTIVIDAD</p>
            <p id="textoheader2"><strong>EN CLUBY</strong></p>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-xl-8 mb-8">
                        <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                        <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="..." id="img4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                        <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="..." id="img4">
                    </div>
                    <div class="col-lg-8 col-md-8 col-xl-8 mb-8">
                        <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-xl-8 mb-8">
                        <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                        <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="..." id="img4">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-6 mb-6">
                <p id="texto1"><strong>Cluby</strong> es la aplicación que ayuda a cosas que hacer con sus hijos. Ya
                    sea que esté organizando un evento comunitario único o que sea
                    propietario de un negocio con muchos sitios y actividades para
                gritar, su inclusión en Acorn ayudará a las familias a encontrarlo.</p>
                <p>Todo lo que puedas imaginar para los niños, desde festivales, clases
                    de fútbol y proyecciones de películas, hasta clases de cerámica,
                    pantomimas y juegos suaves. Además, puede enumerar servicios
                como planificación de fiestas o información cotidiana como horarios de apertura en el patio de recreo.</p>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xl-8 mb-8">
                <br>
                <br>
                <p id="texto2"><strong>TÚ PONES LAS REGLAS</strong><p>
                    <p id="texto2">Establece la frecuencia que convenga (diaria, semanal o mensual), fija el
                        precio y el tamaño del grupo, administra todos los detalles estés donde
                    estés con nuestra cómoda aplicación móvil.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="...">
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xl-4 mb-4">
                <img src="https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2019/01/18/Recortada/img_psola_20190118-094418_imagenes_lv_terceros_dragon-ball-super-broly-kbVE-U454190467686qgF-992x558@LaVanguardia-Web.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-lg-8 col-md-8 col-xl-8 mb-8">
                <br>
                <p id="texto3"><strong>DISEÑADO PARA EL PADRE MODERNO</strong></p>
                <p id="texto3">El mal software no debería ser una barrera para que los niños accedan a
                    actividades como la suya. Con un diseño móvil sensible, una integración
                    perfecta en su sitio web y una interfaz encantadora tanto para padres
                como para proveedores, somos su mejor amigo en el negocio.</p>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-12">
                <p id="texto4"><strong>PREGUNTAS FRECUENTES</strong></p>
                <p id="texto4">¿Tengo que organizar la experiencia un mínimo de veces?<br>
                Puedes organizar experiencias tan seguido como quieras. Tienes toda la libertad de ajustar las fechas y los horarios hasta encontrar lo que más te convenga.</p>
                <p id="texto4">¿Puedo establecer número mínimo de participantes para cada experiencia?<br>
                El número mínimo de participantes que puedes recibir en cada una de tus experiencias es 1.</p>
                <p id="texto4">¿Necesito tener seguro?<br>
                    El Seguro de protección para las experiencias cubre la mayoría de las actividades incluidas en una experiencia,
                    excepto algunas cosas como volar o conducir. Puede ser que tengas que contratar un seguro independiente si tu
                    experiencia incluye estas actividades. <a href="#" btn-primary>Más información</a></p>
                    <p id="texto4">¿Puedo ser organizador en compañía de alguien más?<br>
                        Si quieres organizar tu experiencia en conjunto con un coanfitrión, asegúrate de mencionar su nombre en la
                        página de la experiencia para los huéspedes sepan con quién estarán. Es necesario que esa persona también
                    tenga un perfil en Cluby</p>
            </div>
        </div>
        <footer>
            @include('layouts.footer')
        </footer>
    </div>
</body>
</html>