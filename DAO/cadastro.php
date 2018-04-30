<?php
//Conexão
include "../conexao/conexao.php";
/*-------------------------------------------------------*/
$nome= $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$nametag = $_POST["nametag"];
$sexo = $_POST["sexo"];
$dataN = $_POST["data"];
$pais = $_POST["pais"];
$cpf = $_POST["cpf"];
$celular = $_POST["celular"];
$login = $_POST["email"];
$senha = $_POST["senha"];
$biografia = $_POST["bio"];
$cript = md5($senha);

$con = mysqli_connect('localhost', 'root', '', 'diskette');

mysqli_query($con, "INSERT INTO criar_usuario (nome_usu, sobrenome_usu, name_tag, sexo_usu, data_nascimento, pais_usu, cpf, celular, email_usu, senha_usu, biografia_usu)VALUES('$nome','$sobrenome','$nametag','$sexo','$dataN','$pais','$cpf','$celular','$login','$cript','$biografia')");

header('Location: ../Views/index.php');

