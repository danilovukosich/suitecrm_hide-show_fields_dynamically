$(document).ready(function() {

    console.log("Entra al importador");
    
    const desplegable = $('#sino'); //Nombre del campo desplegable = sino
    let campoContainer = $("div[data-field='campo_test']"); //Nombre de div que almacena el cmapo a ocultar
    
    

    // Inicialmente, deshabilitar el campo si el valor del desplegable no es 'si'
    if (desplegable.val() !== 'si') {
        /* $("#campo_test").attr("disabled", "disabled"); */ //Esta linea desabilita el campo pero lo sigue mostrando
        campoContainer.hide(); //Esta linea oculta el campo en un 100%
    } else {
        /* $("#campo_test").removeAttr("disabled"); */
        campoContainer.show();
    }

    // Manejar el cambio en el desplegable (Si es "si" muestra el campo seleccionado y si es  "no" lo oculta)
    desplegable.on('change', function() {
        if (desplegable.val() === 'si') {
            /* $("#campo_test").removeAttr("disabled"); */ // Habilita el campo
            campoContainer.show();
        } else {
           /*  $("#campo_test").attr("disabled", "disabled"); */ // Deshabilita el campo
           campoContainer.hide();
        }
    });
});