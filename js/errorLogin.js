$("#errorLog").ready(function()
{
    Swal.fire({
        title: "Contraseña Incorrecta",
        text: "Su contraseña de usuario es Incorrecta",
        icon: "error",
        confirmButtonText: "Ok",
        //footer:'El tiempo de su pedido sera estimado en la seccion de pedidos',
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        stopKeydpwnPropagation: false
        //toast:true
    });
    
});
