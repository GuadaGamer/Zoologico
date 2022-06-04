<div id="medio" class="row">
    <div class="col">
       <h1 class="text-center">Alimentos</h1>
        <a class="btn btn-success" href="alimento.php?accion=create" role="button"><i class="fa-solid fa-plus"></i></a>
        <button onclick="window.print()" class="btn btn-secondary"><i class="fa-solid printer"></i></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Alimento</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $cont=0;
                        foreach($alimentos as $alimento):
                        ?>
                <tr>
                    <td><?php echo $alimento['alimento'] ?></td>
                    <td><a class="btn btn-danger" href="alimento.php?accion=delete&id=<?php echo $alimento['id_alimento']; ?> " role="button"><i class="fa-solid fa-eraser"></i></a><a class="btn btn-success" href="alimento.php?accion=update&id=<?php echo $alimento['id_alimento']; ?> " role="button"><i class="fa-solid fa-wand-magic-sparkles"></i></a></td>
                </tr>
                <?php
                    $cont++;
                            endforeach;
                        ?>
            </tbody>
        </table>
        <p class="text-left" ><?php echo "Se encontraron: ".$cont." registros."; ?></p>
    </div>
<script>
    function 
</script>