<?php if($accion=="create"): ?>
<h1 class="text-center">Nueva familia</h1>
<?php
 else:
?>
<h1 class="text-center">Modificar familia</h1>
<div class="d-flex justify-content-center">
    <img class="rounded-circle" src="../<?php echo $data['fotografia']; ?>" width="200" height="200">
</div><!-- /.col-lg-4 -->
<?php
endif;
?>
<form method="POST" enctype="multipart/form-data" action="familia.php?accion=<?php echo $accion; ?><?php if($accion=='update') echo '&id='.$idrecibe;?>">
    <label class="form-label" for="">Nombre de la familia: </label>
    <input class="form-control" type="text" name="data[familia]" id="" value="<?php echo ($accion=="update")?$data["familia"]:""; ?>" />
    <label for="" class="form-label">Atracción:</label>
    <select name="data[id_atraccion]" class="form-select" id="">
        <?php
            foreach($atracciones as $atraccion):
        ?>
        <option <?php if(isset($data["id_atraccion"])){ if($data["id_atraccion"]==$atraccion["id_atraccion"]) {echo "selected";}} ?> value="<?php echo $atraccion["id_atraccion"] ?>"><?php echo $atraccion["atraccion"] ?></option>
        <?php endforeach; ?>
    </select>
    <label class="form-label" for="">Foto:</label>
    <input class="form-control" type="file" name="fotografia" id="" value="<?php echo ($accion=="update")?$data["fotografia"]:""; ?>" />
    <input class="btn btn-primary" type="submit" value="Guardar familia" name="data[enviar]" />
</form>
