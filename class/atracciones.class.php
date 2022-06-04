<?php
require_once('zoologico.class.php');

class Atracciones extends Zoologico{
    public function read(){
        $todo = $this->db->prepare("SELECT * from atraccion");
        $todo->execute();
        $atracciones = $todo->fetchAll(PDO::FETCH_ASSOC);
        return $atracciones;
    }
    
    public function readOne($id){
        $linea = $this->db->prepare("SELECT * from atraccion where id_atraccion=:id_atraccion");
        $linea->bindParam(':id_atraccion', $id, PDO::PARAM_INT);
        $linea->execute();
        $atracciones = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $atracciones;
    }
    
    public function delete($id){
        $borrar = $this->db->prepare("delete from atraccion where id_atraccion=:id_atraccion");
        $borrar->bindParam(':id_atraccion', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    
    public function create($data, $sinfoto=false){
        $cuenta = null;
        if(!$sinfoto){
            $fotografia=$this->cargarimg("atraccion");    
        }else{
            $fotografia="images/atraccion/10_estacionamiento.jpg";
        }
        if ($fotografia){
            $sql="insert into atraccion (atraccion, altitud, latitud, descripcion, foto) values 
            (:atraccion,:altitud, :latitud, :descripcion, :foto)";
            $insertar=$this->db->prepare($sql);
            $insertar->bindParam(':atraccion', $data["atraccion"], PDO::PARAM_STR);
            $insertar->bindParam(':altitud', $data["altitud"], PDO::PARAM_STR);
            $insertar->bindParam(':latitud', $data["latitud"], PDO::PARAM_STR);
            $insertar->bindParam(':descripcion', $data["descripcion"], PDO::PARAM_STR);
            $insertar->bindParam(':foto', $fotografia, PDO::PARAM_STR);
            $insertar->execute();
            $cuenta = $insertar->rowCount();
        }
        return $cuenta;
    }
    
    public function update($id,$data,$sinfoto=false){
        if(!$sinfoto){
            $fotografia = $this->cargarimg("atracciones");
        }else{
            $fotografia = "images/atraccion/10_estacionamiento.jpg";
        }
        $fotografia=$this->cargarimg("atraccion");
        if ($fotografia){
            $sql = "update atraccion set atraccion=:atraccion, latitud=:latitud, altitud=:altitud, descripcion=:descripcion, foto=:foto where id_atraccion=:id_atraccion";
            $actualizar = $this->db->prepare($sql);
        }else{
            $sql = "update atraccion set atraccion=:atraccion, latitud=:latitud, altitud=:altitud, descripcion=:descripcion where id_atraccion=:id_atraccion";
            $actualizar = $this->db->prepare($sql);
        }
        $actualizar->bindParam(':atraccion', $data['atraccion'], PDO::PARAM_STR);
        $actualizar->bindParam(':altitud', $data['altitud'], PDO::PARAM_STR);
        $actualizar->bindParam(':latitud', $data['latitud'], PDO::PARAM_STR);
        $actualizar->bindParam(':descripcion', $data['descripcion'], PDO::PARAM_STR);
        $actualizar->bindParam(':id_atraccion', $id, PDO::PARAM_INT);
        if  ($fotografia){
            $actualizar->bindParam(':foto', $fotografia, PDO::PARAM_STR);
        }
        $actualizar->execute();
        $cuenta = $actualizar->rowCount();
        return $cuenta;
        
    }
}

$ATRACCION = new Atracciones;
$ATRACCION->conexion();
?>