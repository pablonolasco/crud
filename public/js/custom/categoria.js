$(document).ready(function() {
    getCategorias();

    function getCategorias() {
        $.ajax({
            url: '/categorias',
            success: function(respuesta) {
                let catRes = respuesta;
                $.each(catRes, function(key, value) {
                    $('#category_id').append('<option value=' + value.id + '>' + value.nombre + '</option>');
                });

            },
            error: function() {
                console.log("No se ha podido obtener la información");
            }
        });
    }
});