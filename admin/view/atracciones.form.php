<?php if($accion=="create"): ?>
<h1>Nueva atracción</h1>
<?php
 else: $accion="update";
?>
<h1 class="text-center">Modificar atracción</h1>
<div class="d-flex justify-content-center">
    <img class="rounded-circle" src="../<?php echo $data['foto']; ?>" width="200" height="200">
</div><!-- /.col-lg-4 -->
<?php
endif;
?>
<form method="POST" enctype="multipart/form-data" action="atraccion.php?accion=<?php echo $accion; ?><?php if($accion=='update') echo '&id='.$idrecibe;?>">
    <label class="form-label" for="">Nombre de la atraccion: </label>
    <input class="form-control" type="text" name="data[atraccion]" id="" value="<?php echo ($accion=="update")?$data["atraccion"]:""; ?>" />
    <label class="form-label" for="">Descripción: </label>
    <textarea class="form-control" name="data[descripcion]" cols="20" rows=""><?php echo ($accion=="update")?$data["descripcion"]:""; ?></textarea>
    <label class="form-label" for="">Latitud: </label>
    <input class="form-control" type="text" name="data[latitud]" id="" value="<?php echo ($accion=="update")?$data["latitud"]:""; ?>" />
    <label class="form-label" for="">Altitud:</label>
    <input class="form-control" type="text" name="data[altitud]" id="" value="<?php echo ($accion=="update")?$data["altitud"]:""; ?>" />
    <label class="form-label" for="">Foto:</label>
    <input class="form-control" type="file" name="fotografia" id="" />
    <input class="btn btn-primary" type="submit" value="Guardar Atracción" name="data[enviar]" />
</form>