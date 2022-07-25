<?php
require_once('phpmailer/PHPMailerAutoload.php'); // https://github.com/PHPMailer/PHPMailer

$mail = new PHPMailer;
$mail->setLanguage('br');                                   // Habilita as saídas de erro em Português
$mail->CharSet='UTF-8';                                     // Habilita o envio do email como 'UTF-8'

                          
$mail->isSMTP(true);                                        // Configura o disparo como SMTP
$mail->SMTPAuth = true;                                     // Habilita a autenticação SMTP
$mail->SMTPDebug = false;                                   // Habilita a saída do tipo "verbose" false/true/3/2
$mail->Port = 587;                                          // Porta TCP para a conexão 587/25/465
$mail->SMTPSecure = 'tls';                                  // Habilita criptografia TLS | 'ssl' também é possível


$mail->Host = 'smtp.gmail.com';                             // Especifica o enderço do servidor SMTP
$mail->Username = 'fannyssoftware@gmail.com';               // Usuário do SMTP
$mail->Password = '';                          // Senha do SMTP
$mail->From = 'fannyssoftware@gmail.com';                   // Endereço previamente verificado no painel do SMTP
$mail->FromName = 'fannyssoftware@gmail.com';               // Nome no remetente
$mail->addAddress('fannyssoftware@gmail.com');              // Acrescente um destinatário

//COPIA DE EMAILS [OPCIONAL]
//$mail->addAddress('joao@exemplo.com');
//$mail->addReplyTo('info@exemplo.com', 'Informação');
//$mail->addCC('cc@exemplo.com');
//$mail->addBCC('bcc@exemplo.com');


$mail->isHTML();                                        // Configura o formato do email como HTML

$mail->Subject = "$_POST[assunto]";
$mail->Body    = "Recebemos uma mensagem no site <br/>
<strong>Nome:</strong> $_POST[txtNome]<br/>
<strong>e-mail:</strong> $_POST[txtEmail]<br/>
<strong>Assunto:</strong> $_POST[assunto]<br/>
<strong>Telefone:</strong> $_POST[tel]<br/>
<strong>Mensagem:</strong> $_POST[txtMensagem]";

//$mail->AltBody = 'Esse é o corpo da mensagem em formato "plain text" para clientes de email não-HTML';

$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
  )
);

if(!$mail->Send()){	
    $msg = "Erro ao enviar a mensagem.";
    echo "echo <script>alert('$msg');window.location.assign('contato.html');</script>";
    }else{
        $msg = "Sua mensagem foi enviada com sucesso.";
        echo "<script>alert('$msg');
        window.location.assign('contato.html');</script>";
    }

?>