<?php
//Peticion consultar empleados

/* $getEmpleadosBodyPeticion = array(
    'Id_Empresa' => 25,
    'Id_Rol' => 2, 
);
include 'Consultas/Empleados/GetEmpleados.php'; */



//Peticion crear empleado
/* $putCreateEmpleadoBodyPeticion = array(
    'Nombre' => 'Empleado1',
    'Genero' => 'M', 
    'Edad' => 30, 
    'Telefono' => 1234567890, 
    'Correo' => 'Empleado1@nombreempresa.com', 
    'Fecha' => '2021-10-10', 
    'Contrasena' => '12345678', 
    'Id_Rol' => 4, 
);
include 'Consultas/Empleados/CreateEmpleado.php'; */

//Peticion Eliminar empleados
//No Existe metodo :(


?>

<?php

$getEmpleadosBodyPeticion = array(
    'Id_Empresa' => 25,
    'Id_Rol' => 2, 
);
include 'Consultas/Empleados/GetEmpleados.php'; 

echo json_encode($empleadosLista);

?>
