<?php
	include_once '../conexao/conexao.php';
	include_once '../conexao/session.php';
	
	Sessao_Diskette::ValidaSessao();
	$banco = new ConexaoBanco();
	$sql = "SELECT * FROM 'criar_usuario'";
	$todosUsu = $banco->executeQuery($sql);


    while ($linha = mysqli_fetch_array($todosUsu)) {
       echo "<tr>";
       echo "<td>".$linha['id_usu']."</td>";
       echo "<td>".$linha['nome_usu']."</td>";
       echo "<td>".$linha['name_tag']."</td>";
       echo "<td>".$linha['email_usu']."</td>";
       echo "<td>".$linha['data_nascimento']."</td>";	 
    }
           