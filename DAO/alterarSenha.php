<?php
include '../conexao/conexao.php';
include '../DAO/acessoLogin.php';

//$nametag = $_POST["nametag"];
$id_usu = $_POST['codigo'];
$senha = $_POST['senha'];
$conSenha = $_POST["conSenha"];
$cript = md5($senha);

if ($conSenha == $senha) {
	$sql = "UPDATE `criar_usuario` SET `senha_usu` = ('".$cript."')
	WHERE `id_usu` = ('".$id_usu."')";

	$banco = new ConexaoBanco();
	$banco->executeQuery($sql) or die (mysqli_error($myConnection));

	header("location: ../Views/dashboard.php");

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