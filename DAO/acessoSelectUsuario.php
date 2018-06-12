<?php 
include_once '../conexao/conexao.php';
$idUsuario =($_SESSION["Usuario"]["id_usu"]);
$nometag = ($_SESSION["Usuario"]["name_tag"]);
$email = ($_SESSION["Usuario"]["email_usu"]);
$controle =($_SESSION["Usuario"]["controle_de_restricao"]);
$sexo =($_SESSION["Usuario"]["sexo_usu"]);
$banco = new ConexaoBanco();
$sql = "SELECT * FROM diskette.criar_usuario WHERE id_usu = $idUsuario";

if ($controle == 1) {
	$sql = "SELECT * FROM diskette.criar_usuario";
}elseif ($controle == 2) {
	$sql = "SELECT * FROM diskette.criar_usuario WHERE id_usu = $idUsuario";
}

$todosusuarios = $banco->executeQuery($sql);
$SelectEdit = $banco->executeQuery($sql);