<?php
    require_once('../class/alimento.class.php');
    $rol=$ALIMENTO->validar_rol('Empleado');
    $accion= isset($_GET['accion'])?$_GET['accion']:null;
    $idrecibe = isset($_GET['id'])?$_GET['id']:null;
    $idrecibe=is_numeric($idrecibe)?$idrecibe:null;
    $data=isset($_POST['data'])?$_POST['data']:null;
    include('view/header.php');
    switch($accion){
        case 'create':
            if (isset($data['enviar'])){
                $alimentos = $ALIMENTO->create($data);
                if ($alimentos){ 
                    $ALIMENTO->alerta("Alimento insertado correctamente","success");
                    $alimentos = $ALIMENTO->read();
                    include("view/alimentos.php");
                }else{
                    $ALIMENTO->alerta("No se a agregado el alimento","danger");
                    include("view/alimentos.form.php");
                }
            }else{
                include("view/alimentos.form.php");
            }
            break;
        case 'delete':
            $alimentos = $ALIMENTO->delete($idrecibe);
            if ($alimentos)
                $ALIMENTO->alerta("Alimento borrado","success");
            else
                $ALIMENTO->alerta("El registro no a sido borrado","danger");
            $alimentos = $ALIMENTO->read();
            include("view/alimentos.php");
            break;
        case 'update':
            if (isset($data['enviar'])){
                if (!is_null($idrecibe)){
                    $alimentos = $ALIMENTO->update($idrecibe, $data);
                    if ($alimentos){
                        $ALIMENTO->alerta("Alimento actualizado correctamente","success");
                        $alimentos = $ALIMENTO->read();
                        include("view/alimentos.php");
                    }else{
                        $ALIMENTO->alerta("No se a actualizado el alimento","danger");
                        include("view/alimentos.form.php");
                    }
                }
            }else{
                if (!is_null($idrecibe)){
                    $alimentos = $ALIMENTO->readOne($idrecibe);
                    if (isset($alimentos[0])){
                        $data=$alimentos[0];
                        include("view/alimentos.form.php");
                    }else{
                        $ALIMENTO->alerta("No existe el alimento","danger");
                        $alimentos = $ALIMENTO->read();
                        include("view/alimentos.php");
                    }
                }
            }
            
            break;
        default:
            $alimentos = $ALIMENTO->read();
            include('view/alimentos.php');
            break;
                
    }
    include('view/footer.php');
?>