<?php
include '../conexao/conexao.php';
include '../conexao/session.php';

$senha = $_POST['Senha'];
$email = $_POST['Email'];
$codificada = md5($senha);

$sql="SELECT * FROM `Diskette`.`criar_usuario` where email_usu ='".$email."' and senha_usu = '".$codificada."'";
$banco = new ConexaoBanco();
$Usuario = $banco->executeQuery($sql);

if ($Usuario->num_rows==0) {
	header("location:../Views/login.php");
}
else
{
	while ($linha = mysqli_fetch_array($Usuario)) {
		$usuario_session = array('id_usu' => $linha['id_usu'], 'email_usu' =>$linha['email_usu'], 'nome_usu'=> $linha['nome_usu']);
		Sessao_Diskette::EscreverSessao($usuario_session);

	}
	header("location:../Views/dash.php");
	
}
?>
