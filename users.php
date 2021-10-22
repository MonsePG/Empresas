<?php 


$getEmpleadosBodyPeticion = array(
    'Id_Empresa' => 25,
    'Id_Rol' => 2, 
);
// include 'Consultas/Empleados/GetEmpleados.php'; 
//Se obtienen los empleados en la variable llamada $empleadosLista en formato JSON
//  echo json_encode($empleadosLista);


// foreach($empleadosLista->data as $item)
// {
//      echo "Elemento obtenido =". json_encode($item) . "\n";

// }      

// foreach ( $empleadosLista as $item => $msg ) {
//  echo json_encode($msg );
// }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Tablero de administración</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="#">Panel de Administración</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="login.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
    <?php   include 'layout/layoutSidenav.php';    ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <center>
                        <h1 class="mt-4">Usuarios empleados</h1>
                    </center>
                    <div class="row  justify-content-end mb-3 mt-5">
                        <div class="col-3">
                            <a class="btn btn-success" href="addUser.php">Crear usuario</a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="card text-center">
                            <table class="table caption-top">
                                <caption class="mx-5">Lista de usuarios</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="tablaUsuariosRegistradosBody">
 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>



<script>
    var dataString = '<?php include 'Consultas/Empleados/GetEmpleados.php';  ?> ';
    var jsonUsuarios = JSON.parse(dataString); 
    var jsonUsuarios = jsonUsuarios.msg; 
    console.log(jsonUsuarios);


    const tablaUsuariosRegistradosBodyHtml = document.getElementById("tablaUsuariosRegistradosBody");

    

    var cardContenido = `

    <tr>
        <th scope="row">`+jsonUsuarios.NombreUsuario+`</th>
        <td>`+jsonUsuarios.TelefonoUsuario+`</td>
        <td>`+jsonUsuarios.CorreoUsuario+`</td>
        <td>`+jsonUsuarios.ImagenUsuario+`</td>
        <td>
            <div class="btn-group" role="group" aria-label="Acciones">
                <a href="addUser.php" class="btn btn-success btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-person-plus"
                        viewBox="0 0 16 16">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        <path fill-rule="evenodd"
                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                    </svg>
                </a>
                <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('¿Estas seguro que deseas eliminar el usuario?')">
                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-trash-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                    </svg>
                </button>
            </div>
        </td>
    </tr>


    `;

    tablaUsuariosRegistradosBodyHtml.innerHTML = cardContenido;
</script>


</html>