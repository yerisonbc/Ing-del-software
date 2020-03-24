


function buscar()
{

    var busqueda = document.getElementById("buscar").value;
    var estado = document.getElementById("filtro").value;

    $.ajax({
        url:route,
        data: {buscar: busqueda, estado: estado},
        type: 'GET',
        datatype: 'json',
        success: function(data){
            // console.log(data);
            $(".users").html(data);
        }
    });

}


function pagination(p)
{
    
    var page = p;
    var buscar = document.getElementById("buscar").value;
    var estado= document.getElementById("filtro").value;

    if(buscar !=='' || estado=='i'){

        // alert("if");
        $.ajax({
            url:route,
            data: {page: page, buscar: buscar, estado: estado},
            type: 'GET',
            datatype: 'json',
            success: function(data){
                $(".users").html(data);
            }
        });

    }
    
    else{
        // alert("e;f");

        $.ajax({
            url:route,
            data: {page: page},
            type: 'GET',
            datatype: 'json',
            success: function(data){
                $(".users").html(data);
            }
        });
    }

}


// ---------------------------- Alertas ------------------------------------------------------------
function close_alert(){

    $("#myAlert").alert("close");

}

$(document).ready(function(){
    



// -------------------------------- Menu lateral ----------------------------------------------------------------
    var url= window.location;
    if(url == 'http://127.0.0.1:8000/inicio')
     {
        
        var element = document.getElementById("inicio");
        element.classList.add("active");
    }

    else if (url == 'http://127.0.0.1:8000/lista_productos' || url == 'http://127.0.0.1:8000/nuevo_producto' )
    {
        var element = document.getElementById("productos");
        element.classList.add("active");
    }
    else if (url == 'http://127.0.0.1:8000/lista_marcas' || url == 'http://127.0.0.1:8000/nueva_marca' )
    {
        var element = document.getElementById("productos");
        element.classList.add("active");
    }
    else if (url == 'http://127.0.0.1:8000/lista_categorias' || url == 'http://127.0.0.1:8000/nueva_categoria' )
    {
        var element = document.getElementById("productos");
        element.classList.add("active");
    }
    else if (url == 'http://127.0.0.1:8000/lista_categorias' || url == 'http://127.0.0.1:8000/nueva_categoria' )
    {
        var element = document.getElementById("productos");
        element.classList.add("active");
    }

// ------------------------------------------------------------------------------------------------------------------------------------
 


    setTimeout(function(){ $("#myAlert").alert("close")}, 15000);
    
    
});