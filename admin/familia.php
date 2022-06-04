<?php
    require_once('../class/familia.class.php');
    require_once('../class/atracciones.class.php');
    $rol=$FAMILIA->validar_rol('Empleado');
    $accion= isset($_GET['accion'])?$_GET['accion']:null;
    $idrecibe = isset($_GET['id'])?$_GET['id']:null;
    $idrecibe=is_numeric($idrecibe)?$idrecibe:null;
    $data=isset($_POST['data'])?$_POST['data']:null;
    $atracciones = $ATRACCION->read();
    include('view/header.php');
    switch($accion){
        case 'create':
            if (isset($data['enviar'])){
                $familias = $FAMILIA->create($data);
                if ($familias){ 
                    $FAMILIA->alerta("Familia insertada correctamente","success");
                    $familias = $FAMILIA->read();
                    include("view/familias.php");
                }else{
                    $FAMILIA->alerta("No se a agregado la familia","danger");
                    include("view/familias.form.php");
                }
            }else{
                include("view/familias.form.php");
            }
            break;
        case 'delete':
            $familias = $FAMILIA->delete($idrecibe);
            if ($familias)
                $FAMILIA->alerta("Familia borrada","success");
            else
                $FAMILIA->alerta("El registro no a sido borrado","danger");
            $familias = $FAMILIA->read();
            include("view/familias.php");
            break;
        case 'update':
            if (isset($data['enviar'])){
                if (!is_null($idrecibe)){
                    $familias = $FAMILIA->update($idrecibe, $data);
                    if ($familias){
                        $FAMILIA->alerta("Familia actualizada correctamente","success");
                        $familias = $FAMILIA->read();
                        include("view/familias.php");
                    }else{
                        $FAMILIA->alerta("No se a actualizado la familia","danger");
                        include("view/familias.form.php");
                    }
                }
            }else{
                if (!is_null($idrecibe)){
                    $familias = $FAMILIA->readOne($idrecibe);
                    if (isset($familias[0])){
                        $data=$familias[0];
                        include("view/familias.form.php");
                    }else{
                        $FAMILIA->alerta("No existe la familia","danger");
                        $familias = $FAMILIA->read();
                        include("view/familias.php");
                    }
                }
            }
            
            break;
        default:
            $familias = $FAMILIA->read();
            include('view/familias.php');
            break;
                
    }
    include('view/footer.php');
    $Zoologico->send_correo("guadasv2000@gmail.com","prueba 2","Este es otro correo de prueba");
?>