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
$controle = 2;
$conSenha = $_POST["conSenha"];

if ($conSenha == $senha) {

	$con = mysqli_connect('localhost', 'root', '', 'diskette');

	mysqli_query($con, "INSERT INTO criar_usuario (nome_usu, sobrenome_usu, name_tag, sexo_usu, data_nascimento, pais_usu, cpf, celular, email_usu, senha_usu, biografia_usu,controle_de_restricao)VALUES('$nome','$sobrenome','$nametag','$sexo','$dataN','$pais','$cpf','$celular','$login','$cript','$biografia','$controle')");

	header('Location: ../views/dashboard.php');
}elseif ($conSenha != $senha) {
	echo "<script src='../assets/js/alertify.js'></script>

		<script>
			var x;
			alertify.error('Senha Incorreta');
			var r=confirm('Senhas não conferem, Digite uma senha Valida!');	
			if (r==true)
			  {
			  	window.location.href = 'http://localhost/diskette/views/create.php';
			  }
			else
			  {
			  	window.location.href = 'http://localhost/diskette.com/views/dashboard.php';
			  }
		</script>
	";
	
}
