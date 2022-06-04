<?php
    require_once('../class/animal.class.php');
    require_once('../class/familia.class.php');
    require_once('../class/alimento.class.php');
    $rol=$FAMILIA->validar_rol('Empleado');
    $accion= isset($_GET['accion'])?$_GET['accion']:null;
    $idrecibe = isset($_GET['id'])?$_GET['id']:null;
    $idrecibe=is_numeric($idrecibe)?$idrecibe:null;
    $consecutivo = isset($_GET['consecutivo'])?$_GET['consecutivo']:null;
    $data=isset($_POST['data'])?$_POST['data']:null;
    $familias = $FAMILIA->read();
    $alimentos = $ALIMENTO->read();
    include('view/header.php');
    switch($accion){
        case 'create':
            if (isset($data['enviar'])){
                $animales = $ANIMAL->create($data);
                if ($animales){ 
                    $ANIMAL->alerta("Animal insertado correctamente","success");
                    $animales = $ANIMAL->read();
                    include("view/animales.php");
                }else{
                    $ANIMAL->alerta("No se a agregado el animal","danger");
                    include("view/animales.form.php");
                }
            }else{
                include("view/animales.form.php");
            }
            break;
        case 'delete':
            $animales = $ANIMAL->delete($idrecibe);
            if ($animales)
                $ANIMAL->alerta("Animal borrado","success");
            else
                $ANIMAL->alerta("El registro no a sido borrado","danger");
            $animales = $ANIMAL->read();
            include("view/animales.php");
            break;
        case 'update':
            if (isset($data['enviar'])){
                if (!is_null($idrecibe)){
                    $animales = $ANIMAL->update($idrecibe, $data);
                    if ($animales){
                        $ANIMAL->alerta("Animal actualizado correctamente","success");
                        $animales = $ANIMAL->read();
                        include("view/animales.php");
                    }else{
                        $ANIMAL->alerta("No se ha actualizado el animal","danger");
                        include("view/animales.form.php");
                    }
                }
            }else{
                if (!is_null($idrecibe)){
                    $animales = $ANIMAL->readOne($idrecibe);
                    $misAlimentos = $ANIMAL->read_aa($idrecibe);
                    if (isset($animales[0])){
                        $data=$animales[0];
                        include("view/animales.form.php");
                    }else{
                        $ANIMAL->alerta("No existe el animal","danger");
                        $animales = $ANIMAL->read();
                        include("view/animales.php");
                    }
                }
            }
            
            break;
        case 'edit':
            $animal = $ANIMAL->readOne($idrecibe);
            $animales_detalles = $ANIMAL->read_animal($idrecibe);
            include('view/animales_detalles.php');
            break;
        case 'delete_animal':
            if (!is_null($consecutivo) && !is_null($idrecibe)){
                $animales = $ANIMAL->delete_animal($idrecibe,$consecutivo);
                if ($animales)
                    $ANIMAL->alerta("Registro borrado","success");
                else
                    $ANIMAL->alerta("El registro no a sido borrado","danger");
                $animal = $ANIMAL->readOne($idrecibe);
                $animales_detalles = $ANIMAL->read_animal($idrecibe);
                include('view/animales_detalles.php');
            }
            break;
        case 'create_animal':
            if (isset($_POST['data']['enviar'])){
                $data = $_POST['data'];
                $animal = $ANIMAL->create_animal($data,$idrecibe);
                if ($animal)
                    $ANIMAL->alerta("Registro insertado correctamente","success");
                else
                    $ANIMAL->alerta("El registro no a sido insertado","danger");
                $animal = $ANIMAL->readOne($idrecibe);
                $animales_detalles = $ANIMAL->read_animal($idrecibe);
                include('view/animales_detalles.php');
            }else{
                $animal = $ANIMAL->readOne($idrecibe);
                include('view/animales_detalles.form.php');
            }
            break;
        default:
            $animales = $ANIMAL->read();
            include('view/animales.php');
            break;
                
    }
    include('view/footer.php');
?>