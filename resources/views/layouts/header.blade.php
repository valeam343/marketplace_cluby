<style>
    .ui-menu .ui-menu-item {
        background-color: #F7F4F4;
        margin: 3px;
    }
    .ui-autocomplete-row a {
        display: inline-block;
        text-decoration: none;
        width: 93%;
    }
    .ui-autocomplete-row a span {
        padding: 10px;
        font-size: 15px;
        text-align: center;
    }
    .ui-autocomplete-row a img {
        vertical-align: middle;
    }
    .ui-state-active, .ui-widget-content .ui-state-active {
        border: none;
        background-color: rgba(0, 0, 0, 0.3);
        color: inherit;
    }
    .ui-menu .ui-state-focus, .ui-menu .ui-state-active {
        margin: 0;
    }
    .image {
        width: 15%;
        float: left;
        padding: 10px;
    }
    .image img{
        width: 80px;
        height : 60px;
    }
    .label{
        text-align: center;
        width: 100%;
        color: grey;
        position: relative;
        right: -100px;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $("#buscar").autocomplete({
            source: "{{ url('buscar') }}",
            focus: function( event, ui ) {
//$( "#search" ).val( ui.item.title ); // uncomment this line if you want to select value to search box  
return false;
},
select: function( event, ui ) {
    window.location.href = ui.item.url;
}
}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
            var inner_html = '<div class="row"><div class = "col-md-4"><div class="row"><div class = "col-md-4"><a href="' + item.url + '" ><div class="image"><img src="' + item.image + '" ></div></a></div><div class = "col-md-8"><div class="label"><h4><b>' + item.title + '</b></h4></div></div></div></div></div>';
            return $( "<li></li>" )
            .data( "item.autocomplete", item )
            .append(inner_html)
            .appendTo( ul );
        };
    });
</script>
<nav class="navbar navbar-expand-lg navbar-dark" id="nab" style="background-color: #2e4da0;">
    <a href="{{URL::to('/')}}" class="navbar-brand mr-3"><img src="{{asset('img/logotextonav.svg')}}" style="width: 50%;"></a>
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
        <a href="{{URL::to('/registro')}}" style="color: white;">¿Quieres promocionar una actividad?&nbsp;</a>
        <form class="form-inline my-2 my-lg-0">
            <div id="buscador">
                <input class="form-control mr-sm-2" type="text" id="buscar" name="buscar" placeholder="Buscar" style="background-color: rgba(0, 0, 0, 0.1); color: white; border-color: #294590;"> 
            </div>
            <i class="material-icons">search</i>
        </form>
    </div>
</nav>