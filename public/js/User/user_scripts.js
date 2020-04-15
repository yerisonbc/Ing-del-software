




function alertSuccess(){
    $.confirm({
        title: 'Completado!',
        content: 'Producto almacenado Correctamente',
        type: 'green',
        typeAnimated: true,
        buttons: {
            OK:  function (){
               window.location = window.location;
            }
        }
    });

}