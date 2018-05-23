<?php
include '../conexao/conexao.php';
include '../DAO/acessoLogin.php';

$nome= $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$nametag = $_POST["nametag"];
$pais = $_POST["pais"];
$cpf = $_POST["cpf"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$bio = $_POST["bio"];
$id_usu = $_POST['codigo'];

$sql = "UPDATE `criar_usuario` SET `nome_usu` = ('".$nome."'), `sobrenome_usu` = ('".$sobrenome."'),`name_tag` = ('".$nametag."'), `pais_usu` = ('".$pais."'), `cpf` = ('".$cpf."'), `email_usu` = ('".$email."'), `biografia_usu` = ('".$bio."')
WHERE `id_usu` = ('".$id_usu."')";

$banco = new ConexaoBanco();
$banco->executeQuery($sql) or die (mysqli_error($myConnection));


header("location: ../Views/dashboard.php");
?>