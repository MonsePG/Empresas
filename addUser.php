<?php  ?>
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
                        <h1 class="mt-4">Agregar nuevo usuario</h1>
                    </center>
                    <div class="mb-3">
                        <form action="Consultas/Empleados/CreateEmpleadoEmpresaPost.php" method="post">
                        <!-- <form action="a.php" method="post"> -->
                        <div class="mb-3">
                                </center>
                                <label  class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="formGroupExampleInput"    name="Nombre" 
                                    placeholder="Ingrese el nombre del usuario" >
                            </div>
                            <div class="mb-3">
                            <label  class="form-label">Genero</label>
                                <select class="form-select" aria-label="Default select example"      name="Genero">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                    <option value="O">Otro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Edad</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2"  name="Edad" 
                                    placeholder="Ingrese edad del usuario" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Telefono</label>
                                <input type="tel" class="form-control" id="formGroupExampleInput2"     name="Telefono" 
                                    placeholder="Ingrese el telefono de usuario">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Correo</label>
                                <input type="email" class="form-control" id="formGroupExampleInput2"   name="Correo" 
                                    placeholder="Ingrese el correo">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="formGroupExampleInput2"    name="Fecha" 
                                    placeholder="Ingrese el correo">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="formGroupExampleInput2" name="Contraseña" 
                                    placeholder="Ingrese una contraseña" minlength="8">
                            </div>
                            

                            <center>
                                <div style="width:100%; height:100%">
                                    <input type="submit" class="btn btn-outline-success" href="users.php" role="button" value="Guardar cambios"></input>
                                    <a class="btn btn-outline-danger" href="users.php" role="button">Cancelar</a>
                                    <p>
                            </center>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>