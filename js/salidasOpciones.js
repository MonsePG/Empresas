$(document).ready(function(event) {
    $.getJSON("obtenerCategorias.php", function(datos) {
        $("#categorias").empty();
        $.each(datos, function(i, v) {
            makeSalidasCat(v, "#categorias");
        });
    });

    $.getJSON("obtenerDirecciones.php", function(datos) {
        $("#direcciones").empty();
        $.each(datos, function(i, v) {
            makeSalidasDir(v, "#direcciones");
        });
    });
});

function makeSalidasCat(data, target) {
    var id_cat = data.Id_Categoria;
    var salidas = $("<option>", {
        value: id_cat,
        class: "opcion cat"
    }).html(data.Nombre).data("op", data);

    if (target == undefined) {
        return salidas;
    } else {
        salidas.appendTo(target);
    }
}

function makeSalidasDir(data, target) {
    var id_dir = data.Id_Direccion;
    var salidas = $("<option>", {
        value: id_dir,
        class: "opcion dir"
    }).html(data.Calle + ", " + data.NumExt + ", " + data.Ciudad).data("op", data);

    if (target == undefined) {
        return salidas;
    } else {
        salidas.appendTo(target);
    }
}