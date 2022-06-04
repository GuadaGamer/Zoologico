<img src="../images/header.jpg" alt="una imagen de acuario" style="width: 100%;" />
<h1 style="color: red;"> Atracciones</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Atraccion</th>
        <th>Descripcion</th>
        <th>Foto</th>
    </tr>
    <?php
        $cont=0;
        foreach($atracciones as $atraccion):
    ?>
    <tr>
        <td><?php echo $atraccion['id_atraccion'] ?></td>
        <td><?php echo $atraccion['atraccion'] ?></td>
        <td><?php echo $atraccion['descripcion'] ?></td>
        <td><img src="../<?php echo $atraccion["foto"] ?>" alt="" style="width:50px; heigth:50px; -moz-border-radius:50px; -webkit-border-radius:50px; border-radius: 50px;"></td>
    </tr>
    <?php
        $cont++;
        endforeach;
    ?>
</table>
