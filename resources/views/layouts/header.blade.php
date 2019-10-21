<style type="text/css">
 /* .navbar{
    padding: 0;
    margin: 0!important;
}
.row{
    margin-right: 0!important;
    margin-left: 0!important;
}
*/
</style>
<!--
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-dark" id="nab" style="background-color: #2e4da0;">
  
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav">
       
</div> 
</div>
</div> 
</nav>-->

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #2e4da0;">
  <a href="{{URL::to('/')}}" class="navbar-brand mr-3"><img src="{{asset('img/logotexto.svg')}}" width="20%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color: white;"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link disabled" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" style="background-color: rgba(0, 0, 0, 0.1); color: white; border-color: #294590;"> 
      <i class="material-icons">search</i>
    </form>
  </div>
</nav>