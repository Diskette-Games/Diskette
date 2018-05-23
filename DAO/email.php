<?php 
//ATIVAR O APPS DESCONHECIDOS: https://myaccount.google.com/lesssecureapps?pli=1
require("../PHPMailer/src/PHPMailer.php");
require("../PHPMailer/src/SMTP.php");

$emailUsu = $_POST['emailUsu'];
$senhaUsu = $_POST['senhaUsu'] ;
$nomeUsu = $_POST['nomeUsu'] ;
$assuntoUsu = $_POST['assuntoUsu'];
$mensagemUsu = $_POST['mensagemUsu'];

$mail =  new PHPMailer\PHPMailer\PHPMailer(); //instanciar classe, não me pergunte porque tem 3

$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
     $mail->Host = 'smtp.gmail.com'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->Username = $emailUsu; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = $senhaUsu; // Senha do servidor SMTP (senha do email usado)
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom('suporte.diskette@gmail.com', $nomeUsu); //Seu e-mail

	 //$mail->AddReplyTo('naoreponda-diskette@gmail.com', 'Diskette'); //Seu e-mail
     $mail->Subject = $assuntoUsu;//Assunto do e-mail
  
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('suporte.diskette@gmail.com', 'Diskette Games');
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
 
 
     //Define o corpo do email
     $mail->MsgHTML($mensagemUsu); 
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     header("location: ../views/redirecionar.php");
 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}

 