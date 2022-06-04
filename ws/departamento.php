<?php 
//header("Content-Type: application/json");
/*require_once('../class/zoologico.class.php');
require_once('../class/atracciones.class.php');
$atracciones = $ATRACCION->read();
$isAtracciones = json_encode($atracciones);
echo $isAtracciones;
die();*/
    $departamento = file_get_contents("php://input"); 
    $departamento = json_decode($departamento);
    print_r($departamento);
    echo $departamento->director;
    echo sizeof($departamento->empleados);
    $empleados = $departamento->empleados;
    foreach($empleados as $empleado){
        echo $empleado->apellido;
    }
?>
