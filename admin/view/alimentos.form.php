<?php if($accion=="create"): ?>
<h1 class="text-center">Nuevo alimento</h1>
<?php
 else:
?>
<h1 class="text-center">Modificar alimento</h1>
<?php
endif;
?>
<form method="POST" enctype="multipart/form-data" action="alimento.php?accion=<?php echo $accion; ?><?php if($accion=='update') echo '&id='.$idrecibe;?>">
    <label class="form-label" for="">Nombre del alimento: </label>
    <input class="form-control" type="text" name="data[alimento]" id="" value="<?php echo ($accion=="update")?$data["alimento"]:""; ?>" />
    <input class="btn btn-primary" type="submit" value="Guardar alimento" name="data[enviar]" />
</form>
