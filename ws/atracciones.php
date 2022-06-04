<?php
    include_once('../class/zoologico.class.php');
    include_once('../class/atracciones.class.php');
    $accion = $_SERVER['REQUEST_METHOD'];
    $datos = array();
    switch($accion){
        case 'POST':
            $data = file_get_contents("php://input");
            if(strlen($data)>5){
                $datos = json_decode($data, true);
            }else{
                $datos[0]=$_POST;
            }
            if(isset($_GET['id_atraccion'])){
                $id = $_GET['id_atraccion'];
                    $atracciones = $ATRACCION->update($id,$datos,true);
                    $status=200;
                    $msj="se ha actualizado con exito";
            }else{
                    $atracciones = $ATRACCION->create($datos, true);
                    $status = 200;
                    $msj = "Se ha dado de alta una nueva atracción";
            }
            break;
        case 'DELETE':
            if (isset($_GET['id_atraccion'])){
                $id_atraccion = $_GET['id_atraccion'];
                $cantidad= $ATRACCION->delete($id_atraccion);
                $status=200;
                $msj= "se han eliminado: ".$cantidad." con exito" ;
            }else{
                $status= 404;
                $msj ="No se ah encontrado el recurso";
            }
            break;
        case 'GET':
        default:
            $datos= null;
            if (isset($_GET['id_atraccion'])){
                $id_atraccion = $_GET['id_atraccion'];
                $datos= $ATRACCION->readOne($id_atraccion);
            }
            $datos=$ATRACCION->read();
            $status = 200;
            $mensaje = "Se an procesado con exito las acciones";
    }
    $Zoologico->json($datos, $status, $mensaje);
?>