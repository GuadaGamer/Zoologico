<?php
require_once('zoologico.class.php');

class Familias extends Zoologico{
    public function read(){
        $todo = $this->db->prepare("SELECT id_familia, familia,id_atraccion,atraccion, f.fotografia FROM familia f left join atraccion a USING(id_atraccion) ORDER BY familia; ");
        $todo->execute();
        $familias = $todo->fetchAll(PDO::FETCH_ASSOC);
        return $familias;
    }
    
    public function readOne($id){
        $linea = $this->db->prepare("SELECT * from familia where id_familia=:id_familia");
        $linea->bindParam(':id_familia', $id, PDO::PARAM_INT);
        $linea->execute();
        $familias = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $familias;
    }
    
    public function delete($id){
        $borrar = $this->db->prepare("delete from familia where id_familia=:id_familia");
        $borrar->bindParam(':id_familia', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    
    public function create($data){
        $cuenta = null;
        $fotografia=$this->cargarimg("familia");
        if ($fotografia){
            $sql="insert into familia (familia, fotografia, id_atraccion) values (:familia, :foto, :id_atraccion)";
            $insertar=$this->db->prepare($sql);
            $insertar->bindParam(':familia', $data['familia'], PDO::PARAM_STR);
            $insertar->bindParam(':foto', $fotografia, PDO::PARAM_STR);
            $insertar->bindParam(':id_atraccion', $data['id_atraccion'], PDO::PARAM_INT);
            $insertar->execute();
            $cuenta = $insertar->rowCount();
        }
        return $cuenta;
    }
    
    public function update($id,$data){
        $fotografia=$this->cargarimg("familia");
        if ($fotografia){
            $sql = "update familia set familia=:familia, fotografia=:foto, id_atraccion=:id_atraccion where id_familia=:id_familia";
            $actualizar = $this->db->prepare($sql);
        }else{
            $sql = "update familia set familia=:familia, id_atraccion=:id_atraccion where id_familia=:id_familia";
            $actualizar = $this->db->prepare($sql);
        }
        $actualizar->bindParam(':familia', $data['familia'], PDO::PARAM_STR);
        $actualizar->bindParam(':id_familia', $id, PDO::PARAM_INT);
        $actualizar->bindParam(':id_atraccion', $data['id_atraccion'], PDO::PARAM_INT);
        if  ($fotografia){
            $actualizar->bindParam(':foto', $fotografia, PDO::PARAM_STR);
        }
        
        $actualizar->execute();
        $cuenta = $actualizar->rowCount();
        return $cuenta;
        
    }
}

$FAMILIA = new Familias;
$FAMILIA->conexion();
?>
