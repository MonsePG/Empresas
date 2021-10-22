<?php  
session_start();
//En caso de error retorna -1
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $url = 'https://web-api-ps.herokuapp.com/api/v1/sesion/altaUsuario';

    
    $Nombre    = $_POST['Nombre'];
    $Genero    = $_POST['Genero'];
    $Edad      = $_POST['Edad'];
    $Telefono  = $_POST['Telefono'];
    $Correo    = $_POST['Correo'];
    $Fecha     = $_POST['Fecha'];
    $Contrasena= $_POST['Contraseña'];
    $Id_Rol    = 4;

    $correoEmpresa    = $_SESSION['Correo'] ;
    $idEmpresa        = $_SESSION['Id_Empresa'] ;

    $putCreateEmpleadoBodyPeticion = array(
        'Nombre' =>     $Nombre,
        'Genero' =>     $Genero, 
        'Edad' =>       $Edad, 
        'Telefono' =>   $Telefono, 
        'Correo' =>     $Correo, 
        'Fecha' =>      $Fecha, 
        'Contrasena' => $Contrasena, 
        'Id_Rol' =>     $Id_Rol, 
    );

    try {
        $ch = curl_init($url);
        $data_string = json_encode($putCreateEmpleadoBodyPeticion);
        
        if (FALSE === $ch)
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
            // $newVar = json_encode($json->msg,JSON_FORCE_OBJECT);

           if($json->ok == false){
            echo $data;
            echo "-1";
           }else{
            echo $json->msg->Id_Usuario;
            echo $data."<br>";
            $idUsuario = $json->msg->Id_Usuario;
            ?>


<?php  
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
                    echo "Se creara empresa";
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







            <?php  
           }
           
  
    } catch(Exception $e) {
    
        trigger_error(sprintf(
            'Curl failed with error #%d: %s',
            $e->getCode(), $e->getMessage()),
            E_USER_ERROR);
            
    }
?>