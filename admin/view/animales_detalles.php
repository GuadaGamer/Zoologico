<div id="medio" class="row">
    <div class="col">
       <h1 class="text-center"><?php echo $animal[0]['animal']; ?></h1>
        <a class="btn btn-success" href="animal.php?accion=create_animal&id=<?php echo $animal[0]['id_animal']; ?>" role="button"><i class="fa-solid fa-plus"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nacimiento</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $cont=0;
                        foreach($animales_detalles as $animal_detalle):
                        ?>
                <tr>
                    <td><?php echo $animal_detalle['nacimiento'] ?></td>
                    <td><?php echo $animal_detalle['cantidad'] ?></td>
                    <td>
                    <a class="btn btn-danger" href="animal.php?accion=delete_animal&id=<?php echo $animal[0]['id_animal']; ?>&consecutivo=<?php echo $animal_detalle['consecutivo']; ?>" role="button"><i class="fa-solid fa-eraser"></i></a>
                    </td>
                </tr>
                <?php
                    $cont++;
                            endforeach;
                        ?>
            </tbody>
        </table>
        <p class="text-left" ><?php echo "Se encontraron: ".$cont." registros."; ?></p>
    </div>