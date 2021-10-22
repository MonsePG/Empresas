<?php
session_start();
//Peticion consultar empleados

/* $getEmpleadosBodyPeticion = array(
    'Id_Empresa' => 25,
    'Id_Rol' => 2, 
);
include 'Consultas/Empleados/GetEmpleados.php'; */



//Peticion crear empleado
/* $putCreateEmpleadoBodyPeticion = array(
    'Nombre' => 'Borrar 7',
    'Genero' => 'M', 
    'Edad' => 30, 
    'Telefono' => 1234567890, 
    'Correo' => 'borrar7s@borrar.com', 
    'Fecha' => '2021-10-10', 
    'Contrasena' => '12345678', 
    'Id_Rol' => 4, 
);
include 'Consultas/Empleados/CreateEmpleadoEmpresaPost.php'; */

//Peticion Eliminar empleados
//No Existe metodo :(


?>

<?php

function datosPostCompletos($array)
{
    $datosCompletos= true;

    foreach ($array as $item){
        if(!isset($_POST[$item]) ){
            $datosCompletos= false;
        }
    }
    return $datosCompletos;
}

$datosPost = array('Nombre','Genero','Edad','Telefono','Correo','Fecha','Contraseña');
$datosCompletos= datosPostCompletos($datosPost);


echo " <br> Los datos estan:";
if ($datosCompletos==true){
    echo "Completos";
}else if ($datosCompletos==false){
    echo "Error Datos Incompletos";
}
 

/* if( isset($_POST['fromPerson']) )
{
     $fromPerson = '+from%3A'.$_POST['fromPerson'];
     echo $fromPerson;
} else {
    echo "Error Datos incompletos";
} */
//  $_SESSION['Correo'] = $decodificada->msg[0]->Correo;     
//  $_SESSION['Id_Empresa'] = $decodificada->msg[0]->Id_Empresa;
// $getEmpleadosBodyPeticion = array(
//     'Id_Empresa' => 25,
//     'Id_Rol' => 2, 
// );
// include 'Consultas/Empleados/GetEmpleados.php'; 

// echo json_encode($empleadosLista);

?>
