<?php	
//Carrega as classes do PHPMailer
require_once('phpmailer/PHPMailerAutoload.php'); // https://github.com/PHPMailer/PHPMailer
//include("./phpmailer/class.phpmailer.php"); 
//include("./phpmailer/class.smtp.php"); 

		//envia o e-mail para o visitante do site
		$mailDestino = $_POST['txtEmail']; 
		$nome = $_POST['txtNome'];	
		$mensagem = "Obrigado pelo seu contato, responderemos em breve!";
		$assunto = "Obrigado pelo seu contato!";
		//envia o e-mail para o administrador do site
		$nome = $_POST['txtNome'];	
		$assunto = $_POST['assunto'];
		$mensagem = "Recebemos uma mensagem no site <br/>
				<strong>Nome:</strong> $_POST[txtNome]<br/>
				<strong>e-mail:</strong> $_POST[txtEmail]<br/>
				<strong>Assunto:</strong> $_POST[assunto]<br/>
				<strong>Telefone:</strong> $_POST[tel]<br/>
				<strong>Mensagem:</strong> $_POST[txtMensagem]";

		$mail->SMTPOptions = array(
					'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				  )
				);

		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->CharSet = 'UTF-8';
		$mail->True;
		$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
		$mail->Host = 'smtp.gmail.com'; // SMTP servers
		$mail->Port = 587; //Porta de envio do email 
		$mail->Username = 'fannyssoftware@gmail.com'; // SMTP username
		$mail->Password = 'fannystec1314'; // SMTP password
		$mail->From = 'fannyssoftware@gmail.com'; // From
		$mail->FromName = 'fannyssoftware@gmail.com' ;
		$mailDestino = 'fannyssoftware@gmail.com';

		$mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
		$mail->WordWrap = 50; // Definir quebra de linha
		$mail->IsHTML = true ; // Enviar como HTML
		$mail->Subject = $assunto ; // Assunto
		$mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
		$mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML
			if(!$mail->Send()){	
				$msg = "Erro ao enviar a mensagem.";
				echo "echo <script>alert('$msg');window.location.assign('contato.html');</script>";
				}else{
					$msg = "Sua mensagem foi enviada com sucesso.";
					echo "<script>alert('$msg');
					window.location.assign('contato.html');</script>";
				}
?>