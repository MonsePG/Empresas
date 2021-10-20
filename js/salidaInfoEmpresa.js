$(document).ready(function(event) {
    $.getJSON("getInfoEmpresa.php", function(datos) {
        $(".Empresa").empty();
        $.each(datos, function(i, v) {
            makeSalidasInfo(v, ".Empresa")
        });

        $(".ImgEmp").empty();
        $.each(datos, function(i, v) {
            makeCardEmpresa(v, ".ImgEmp")
        });
    });
});

function makeCardEmpresa(data, target) {
    var salidas = $("<div>", {
        class: "mt-4 text-center Sep"
    }).data(data);
    $("<h5>", {}).html("Imagen").appendTo(salidas);
    makeImageEmpresa(data, salidas);
    if (target == undefined) {
        return salidas;
    } else {
        salidas.appendTo(target);
    }
}

function makeImageEmpresa(data, target) {
    var salidas = $("<div>", {
        class: "container text-center ImgEmpresa"
    }).data(data);
    $("<img>", {
        src: data.Imagen,
        class: "card-img-top",
        width: "200px",
        height: "200px"
    }).appendTo(salidas);
    $("<input>", {
        type: "file",
        accept: "image/*",
        name: "Imagen"
    }).appendTo(salidas);

    if (target == undefined) {
        return salidas;
    } else {
        salidas.appendTo(target);
    }
}

function makeSalidasInfo(data, target) {
    var Nombre = data.Nombre;
    var Descripcion = data.Descripcion;
    var Telefono = data.Telefono;
    var Fb = data.Pagina_FB;
    var salidas = $("<div>", {
        class: "mb-3 campo"
    }).data("campo", data);
    $("<input>", {
        type: "hidden",
        value: data.Id_Empresa,
        name: "Id_Empresa"
    }).appendTo(salidas);
    $("<input>", {
        type: "hidden",
        value: data.Id_Usuario,
        name: "Id_Usuario"
    }).appendTo(salidas);
    $("<input>", {
        type: "hidden",
        value: data.Id_Categoria,
        name: "Id_Categoria"
    }).appendTo(salidas);
    $("<input>", {
        type: "hidden",
        value: data.Id_Direccion,
        name: "Id_Direccion"
    }).appendTo(salidas);
    $("<input>", {
        type: "hidden",
        value: data.Correo,
        name: "Correo"
    }).appendTo(salidas);
    $("<input>", {
        type: "hidden",
        value: data.Fecha_Crea,
        name: "Fecha"
    }).appendTo(salidas);
    $("<input>", {
        type: "hidden",
        value: data.Activo,
        name: "Activo"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: Nombre
    }).html("Nombre de la Empresa: ").appendTo(salidas);
    $("<input>", {
        type: "text",
        class: "form-control",
        id: Nombre,
        value: Nombre,
        name: "Nombre"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: Telefono
    }).html("Número telefónico: ").appendTo(salidas);
    $("<input>", {
        type: "tel",
        class: "form-control",
        id: Telefono,
        value: Telefono,
        name: "Telefono",
        pattern: "[0-9]{10}"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: "h_abre"
    }).html("Hora de apertura: ").appendTo(salidas);
    $("<input>", {
        type: "time",
        class: "form-control",
        id: "h_abre",
        value: data.H_Open,
        name: "H_Open"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: "h_cierra"
    }).html("Hora de cierre: ").appendTo(salidas);
    $("<input>", {
        type: "time",
        class: "form-control",
        id: "h_cierra",
        value: data.H_Close,
        name: "H_Close"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: Descripcion
    }).html("Descripción de la empresa ").appendTo(salidas);
    $("<input>", {
        type: "text",
        class: "form-control",
        id: Descripcion,
        value: Descripcion,
        name: "Descripcion"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: "Pagina"
    }).html("Página de facebook (link)").appendTo(salidas);
    $("<input>", {
        type: "text",
        class: "form-control",
        id: "Pagina",
        value: Fb,
        name: "Facebook"
    }).appendTo(salidas);
    $("<br>").appendTo(salidas);
    $("<button>", {
        type: "submit",
        class: "btn btn-success"
    }).html("Actualizar").appendTo(salidas);

    if (target == undefined) {
        return salidas;
    } else {
        salidas.appendTo(target);
    }
}