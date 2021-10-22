<?php

//Temporal
$idUsuario = 1;
$Nombre = "borrar";
$Telefono = "1234567890";
$Correo = "borrar1234567890@c122132ga.com";


// Remporal

$url = 'https://web-api-ps.herokuapp.com/api/v1/consultarpyme/altaEmpresa';

$putCreateEmpresaBodyPeticion = array(
    'Id_Usuario' =>   $idUsuario, 
    'Id_Categoria' =>   1, 
    'Id_Direccion' =>   1, 
    'Nombre' =>   $Nombre, 
    'Telefono'=>   $Telefono, 
    'Correo' =>   $Correo, 
    'H_Open' =>   "00:00", 
    'H_Close' =>   "00:00", 
    'Fecha_Crea' =>   "2000-01-01",
    'Descripcion' =>   "null",
    'Activo' =>   0, 
    'Pagina_FB' => "null"
);

try{
    $ch = curl_init($url);
    $data_string = json_encode($putCreateEmpresaBodyPeticion);
    
    if (FALSE === $ch){
        throw new Exception('failed to initialize');

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json', 'Content-Length: ' . strlen($data_string)));
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        
        $RespuestaServer = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        $json = json_decode($data);
        $newVar = json_encode($json->msg,JSON_FORCE_OBJECT);
        echo "<br>Creacion empresa";
        echo $newVa;
        echo $data;
    }
} catch(Exception $e) {

    trigger_error(sprintf(
        'Curl failed with error #%d: %s',
        $e->getCode(), $e->getMessage()),
        E_USER_ERROR);
        
}



?>