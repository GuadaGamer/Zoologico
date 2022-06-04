
   <div id="medio" class="row">
    <div class="col">
       <h1 class="text-center">Animales</h1>
        <a class="btn btn-success" href="animal.php?accion=create" role="button"><i class="fa-solid fa-plus"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Animales</th>
                    <th scope="col">Familia</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $cont=0;
                        foreach($animales as $animal):
                        ?>
                <tr>
                    <td><?php echo $animal['animal'] ?></td>
                    <td><?php echo $animal['familia'] ?></td>
                    <td>
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button"><i class="fa-solid fa-eraser"></i></a>
                    <a class="btn btn-warning" href="animal.php?accion=update&id=<?php echo $animal['id_animal']; ?>" role="button"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                    <a class="btn btn-info" href="animal.php?accion=edit&id=<?php echo $animal['id_animal']; ?>"  role="button"><i class="fa-solid fa-circle-info"></i></a></td>
                </tr>
                <?php
                    $cont++;
                            endforeach;
                        ?>
            </tbody>
        </table>
        <p class="text-left" ><?php echo "Se encontraron: ".$cont." registros."; ?></p>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>Esta seguro de borrar este animal</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" href="animal.php?accion=delete&id=<?php echo $animal['id_animal']; ?>">Borrar</button>
      </div>
    </div>
  </div>
</div>
