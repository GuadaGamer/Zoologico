<?php

$dbh = new PDO ( 'mysql:dbname=zoologico;host-localhost', 'zoologico', 'informatica123') ;

$gsent = $dbh->prepare("SELECT * from atraccion");
$gsent->execute();

/* Obtener todas las filas restantes del conjunto de resultados */
print("Obtener todas las filas restantes del conjunto de resultados:\n");
$resultado = $gsent->fetchAll();
print_r($resultado);
?>