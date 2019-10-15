<style type="text/css">
  .navbar{
    padding: 0;
    margin: 0!important;
}
.row{
    margin-right: 0!important;
    margin-left: 0!important;
}

</style>
<nav class="navbar navbar-expand-md navbar-dark mb-3" id="nab" style="background-color: #2e4da0;">
  <div class="container-fluid">
    <a href="{{URL::to('/')}}" class="navbar-brand mr-3"><img src="{{asset('img/logotexto.svg')}}" width="30%"></a>
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
          <input type="text" class="form-control" placeholder="Buscar actividad" >
      </div>
  </form>
</div> 
</div>
</div> 
</nav>