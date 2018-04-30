<?php
include '../Conexao/conexao.php';
include '../Conexao/session.php';
Sessao_Diskette::ValidaSessao();

$codigo = $_GET['id_usu'];

$sql = "DELETE FROM `diskette`.`criar_usuario` WHERE `id_usu`= '".$codigo."'";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listarclientes.php");
?>