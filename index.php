<?php

require_once("config.php");

//Carrega um usuário
/*
$root = new Usuario();

$root->loadByid(3);

echo */

//Carrega uma lista de usuários
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/

//Carrega uma lista de usuários buscando pelo login
/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

//Carrega um usuário usando o login e a senha
/*
$usuario = new Usuario();
$usuario->login("root", "!@#$");

echo $usuario;
*/

$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;

?>