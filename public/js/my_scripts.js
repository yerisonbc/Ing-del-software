
// ================================ Menu lateral ==========================================================

$(document).ready(function(){
    
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
    else if (url == 'http://127.0.0.1:8000/lista_modelos' || url == 'http://127.0.0.1:8000/nueva_modelo' )
    {
        var element = document.getElementById("productos");
        element.classList.add("active");
    }

    setTimeout(function(){ $("#myAlert").alert("close")}, 15000);
    
    
});
// ========================================================================================================

// ================= Buscador ======================================
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
// =================================================================


// ============== Paginacion tabla ==================================

function pagination(p)
{
    
    var page = p;
    var buscar = document.getElementById("buscar").value;
    var estado= document.getElementById("filtro").value;

    if(buscar !=='' || estado=='i'){
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
        
        $.ajax({
            url:route,
            data: {page: page},
            type: 'GET',
            datatype: 'json',
            success: function(data){
                $(".users").html(data);
                $('.venobox').venobox(); 
                
            }
        });
    }

}
// ==================================================================


// ============================ Alertas ==============================
function close_alert(){

    $("#myAlert").alert("close");

}

function alertDlt(){
      
    $.confirm({

        title: '¿Estas seguro ?',
        content: '¿Desea eliminar este registro?',
        buttons: 
        {
            Confirmar:{
               btnClass: 'btn-blue',
              action: function(){$("#form_dlt").submit();}
                  
                
            },

            Cancelar:{
              btnClass: 'btn-danger',
              action: function(){}            
            },  
            
                   
        }
    });

}

function alertUdt(){
    $.confirm({

        title: '¿Estas seguro ?',
        content: '¿Desea actualizar este registro?',
        buttons: 
        {
            Confirmar:{
            btnClass: 'btn-blue',
            action: function(){$("#form_udt").submit();}
                
                
            },

            Cancelar:{
            btnClass: 'btn-danger',
            action: function(){}            
            },  
            
                
        }
    });
}
// ===================================================================



// ======================= editar Registros ==========================
function editar(id)
{       
            $.ajax({
                url:route,
                data: {id: id, marca: 'true'},
                type: 'GET',
                datatype: 'json',
                success: function(data){
                    
                    $("."+id).html(data);
                }
            });
}
// ===============================================================

var  obligatorios 
function validarForm()
{

     var  obligatorios = document.getElementsByClassName("requerido");
    
    for( i=0; i<obligatorios.length; i++){
        if(obligatorios[i].value == ''){

            

            obligatorios[i].classList.add("is-invalid");
            obligatorios[i].placeholder = 'Completar este campo';
            $.confirm({
                title: 'Campos Requeridos!',
                content: 'Debes completar todos los campos requeridos',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    OK:  function (){
                       
                    }
                }
            });
            break;
            
        }
        
    }
    if(i == obligatorios.length){
        alertUdt();
    }
}

