<?php

require_once("config.php");

echo "<br>======= Select from Usuarios =======================================<br><br>";

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

echo "<br><br><br>========== Busca Usuario de id = 3  =====================================<br><br>";

$root =  new Usuario();

$root->loadById(3);

echo $root;

echo "<br><br><br>======================================================================<br><br>";

?>
