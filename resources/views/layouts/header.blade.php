<style type="text/css">
  .navbar{
    padding: 0;
  }
  input[type=text]:focus:not([readonly]) + label {
              color: white; 
          }

          input[type=text]:focus:not([readonly]) {
              border-bottom: 1px solid white;
              box-shadow: 0 1px 0 0 white; 

          }
          a.nav-item.nav-link{
            max-height: 29px;
          }
</style>
<nav class="navbar navbar-expand-md navbar-dark mb-3" id="nab" style="background-color: #2e4da0;">
  <div class="container-fluid">
    <a href="{{URL::to('/')}}" class="navbar-brand mr-3"><h4><strong>cluby</strong></h4></a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav">
        <form >
          <div class="input-group input-group-sm mb-3" style="margin-top: 10px;">
            <div class="input-group-prepend">
              <img src="{{asset('img/search.svg')}}">
            </div>
            <input type="text" class="form-control" placeholder="Username" >
          </div>
        </form>
      </div>  
      <div class="navbar-nav ml-auto">
        <div class="d-flex">
          <div class="dropdown mr-1">
            <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" style="color: white; font-size: 90%;">
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
  </nav>
