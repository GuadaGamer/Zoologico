<div id="medio" class="row">
    <div class="col">
       <h1 class="text-center">Atracciones</h1>
        <a class="btn btn-success" href="atraccion.php?accion=create" role="button"><i class="fa-solid fa-plus"></i></a>
        <a class="btn btn-link" target="_blank" href="atraccion.php?accion=reporte" role="button"><i class="fa-solid fa-file-pdf"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Atraccion</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $cont=0;
                        foreach($atracciones as $atraccion):
                        ?>
                <tr>
                    <td><?php echo $atraccion['id_atraccion'] ?></td>
                    <td><?php echo $atraccion['atraccion'] ?></td>
                    <td><?php echo $atraccion['descripcion'] ?></td>
                    <td><img class="rounded-circle" src="../<?php echo $atraccion["foto"] ?>" alt="" width="50" height="50"></td>
                    <td><a class="btn btn-danger" href="atraccion.php?accion=delete&id=<?php echo $atraccion['id_atraccion']; ?> " role="button"><i class="fa-solid fa-eraser"></i></a><a class="btn btn-success" href="atraccion.php?accion=update&id=<?php echo $atraccion['id_atraccion']; ?> " role="button"><i class="fa-solid fa-wand-magic-sparkles"></i></a></td>
                </tr>
                <?php
                    $cont++;
                            endforeach;
                        ?>
            </tbody>
        </table>
        <p class="text-left" ><?php echo "Se encontraron: ".$cont." registros."; ?></p>
    </div>
