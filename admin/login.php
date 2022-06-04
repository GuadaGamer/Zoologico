<?php
    require_once('../class/zoologico.class.php');
    $accion= isset($_GET['accion'])?$_GET['accion']:null;
    include_once('view/header_sin_menu.php');
    switch($accion){
        case 'login':
            if (isset($_POST['correo']) && isset($_POST['contrasena'])){
                $correo= $_POST['correo'];
                $contrasena= $_POST['contrasena'];
                if ($Zoologico->validateEmail($correo)){
                    
                    if ($Zoologico->login($correo,$contrasena)){
                        header('Location: index.php');
                    }else{
                        $Zoologico->alerta("Usuario y/o contraseña erroneo","danger");
                        //redirigir
                    }
                }
            }
            break;
        case 'olvido':
            if(isset($_POST['correo'])){
                $correo=$_POST['correo'];
                if ($Zoologico->validateEmail($correo)){
                    if($Zoologico->recuperar($correo)){
                        echo 'Ok';//regresando de vagaciones
                    }else{
                        $Zoologico->alertaError("Correo electronico no valido");
                    }  
                }else{
                    $Zoologico->alertaError("Correo electronico no valido");
                }
            }
            include_once('view/login.olvido.php');
            break;
        case 'restablecer':
            if(isset($_GET['correo']) && isset($_GET['token'])){
                $correo = $_GET['correo'];
                $token =  $_GET['token'];
                if($Zoologico->validarToken($correo,$token)){
                    include_once('view/login.restablecer.php');
                }else{
                   $Zoologico->alertaError("El token a caducado");
                }
            }else{
                $Zoologico->alertaError("Un error grave a ocurrido");
            }
            
            break;
        case 'nueva':
            if(isset($_GET['correo']) && isset($_POST['token']) && isset($_POST['contrasena'])){
                $correo = $_GET['correo'];
                $contrasena = $_POST['contrasena'];
                $token =  $_POST['token'];
                if($Zoologico->validarToken($correo,$token)){
                    if($Zoologico->nuevaContrasena($correo,$contrasena,$token)){
                       $Zoologico->alerta("Su contraseña a sido cambiada, por favor inicie sesion","success");
                        include_once('view/logins.php');
                    }else{
                        $Zoologico->alertaError("Error al cambiar la contraseña");
                    }
                }else{
                   $Zoologico->alertaError("El token a caducado");
                }
            }else{
                $Zoologico->alertaError("Un error grave a ocurrido");
            }
            
            break;
        case 'logOut':
            $Zoologico->logOut();
        default:
            include_once('view/logins.php');
    }
?>