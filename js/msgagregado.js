$("#agregadoMS").click(function() {
  Swal.fire({
    title: "Usted ha sido registrado",
    text: "Ahora puede ingresar a nuestro sistema ",
    icon: "success",

    confirmButtonText: "Ok",
    //footer:'El tiempo de su pedido sera estimado en la seccion de pedidos',
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false,
    stopKeydpwnPropagation: false,
    //toast:true
  });
});
