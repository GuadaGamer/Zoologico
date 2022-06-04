<?php
    require_once('../class/atracciones.class.php');
    $rol=$ATRACCION->validar_rol('Empleado');
    $accion= isset($_GET['accion'])?$_GET['accion']:null;
    $idrecibe = isset($_GET['id'])?$_GET['id']:null;
    $idrecibe=is_numeric($idrecibe)?$idrecibe:null;
    $data=isset($_POST['data'])?$_POST['data']:null;
    include('view/header.php');
    switch($accion){
        case 'create':
            if (isset($data['enviar'])){
                $atracciones = $ATRACCION->create($data);
                if ($atracciones){ 
                    $ATRACCION->alerta("Atraccion insertada correctamente","success");
                    $atracciones = $ATRACCION->read();
                    include("view/atracciones.php");
                }else{
                    $ATRACCION->alerta("No se a agregado la atraccion","danger");
                    include("view/atracciones.form.php");
                }
            }else{
                include("view/atracciones.form.php");
            }
            break;
        case 'delete':
            $atracciones = $ATRACCION->delete($idrecibe);
            if ($atracciones)
                $ATRACCION->alerta("Atracción borrada","success");
            else
                $ATRACCION->alerta("El registro no a sido borrado","danger");
            $atracciones = $ATRACCION->read();
            include("view/atracciones.php");
            break;
        case 'update':
            if (isset($data['enviar'])){
                if (!is_null($idrecibe)){
                    $atracciones = $ATRACCION->update($idrecibe, $data);
                    if ($atracciones){
                        $ATRACCION->alerta("Atraccion actualizada correctamente","success");
                        $atracciones = $ATRACCION->read();
                        include("view/atracciones.php");
                    }else{
                        $ATRACCION->alerta("No se a actualizado la atraccion","danger");
                        include("view/atracciones.form.php");
                    }
                }
            }else{
                if (!is_null($idrecibe)){
                    $atracciones = $ATRACCION->readOne($idrecibe);
                    if (isset($atracciones[0])){
                        $data=$atracciones[0];
                        include("view/atracciones.form.php");
                    }else{
                        $ATRACCION->alerta("No existe la atracción","danger");
                        $atracciones = $ATRACCION->read();
                        include("view/atracciones.php");
                    }
                }
            }
            
            break;
        case 'reporte':
            ob_clean();
            $atracciones = $ATRACCION->read();
            ob_start();
            include('view/atracciones.reporte.php');
            $variable=ob_get_clean();
            $ATRACCION->pdf('P','A4',$variable,'prueba.pdf');
            break;
        default:
            $atracciones = $ATRACCION->read();
            include('view/atracciones.php');
            break;
                
    }
    include('view/footer.php');
?>