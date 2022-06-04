<div id="medio" class="row">
    <div class="col">
        <h1 class="text-center"><?php echo $animal[0]['animal']; ?></h1>
    </div>
</div>
<div>
    <form method="POST" action="animal.php?accion=create_animal&id=<?php echo $animal[0]['id_animal']?>">
        <label class="form-label" for="">Fecha de nacimiento: </label>
        <input class="form-control" type="date" name="data[nacimiento]" pattern="\d{4}-\d{1,2}-\d{1,2}"/>
        <label for="" class="form-label">Cantidad</label>
        <input class="form-control" type="number" name="data[cantidad]">
        <input class="btn btn-primary" type="submit" value="Guardar animal" name="data[enviar]" />
    </form>
</div>
