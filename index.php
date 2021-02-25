<?php

require_once("config.php");

// echo "<br>======= Select from Usuarios =======================================<br><br>";

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

// echo "<br><br><br>========== Busca Usuario de id = 3  =====================================<br><br>";

// $root =  new Usuario();

// $root->loadById(3);

// echo $root;

// echo "<br><br><br>=========================  Lista de Usuários  =============================================<br><br>";


// $lista = Usuario::getList();

// echo json_encode($lista);

// echo "<br><br><br>=======================Busca  usuários pelo login ==============================================<br><br>";

// $search = Usuario::search("Jo");
// echo json_encode($search);


// echo "<br><br><br>======================= Carrega Usuário utilizando o Login e a senha ==============================================<br><br>";

// $usuario = new Usuario();
// $usuario->login("jose", "1234a567890");

// echo $usuario;

// echo "<br><br><br>======================= Insert via Store Procedure ==============================================<br><br>";

// $aluno = new Usuario("teste", "5263541");

// $aluno->insert();

// echo $aluno;


// echo "<br><br><br>======================= Atualizando/alterar a senha de um usuario ==============================================<br><br>";

// $usuario = new Usuario();
// $usuario->loadById(10);
// $usuario->update("Teacher", "235632");

// echo $usuario;


// echo "<br><br><br>======================= Atualizando/alterar a senha de um usuario ==============================================<br><br>";

$usuario = new Usuario();
$usuario->loadById(10);
$usuario->delete();

echo $usuario;



?>
