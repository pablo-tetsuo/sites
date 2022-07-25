<?php	
//carrega a classe classes para conectar ao banco de dados
//Carrega as classes do PHPMailer
include("./phpmailer/class.phpmailer.php"); 
include("./phpmailer/class.smtp.php"); 

session_start();

//echo 'curso:'.$_POST['curso']; die();

// Verifica se o usuário digitou o captcha corretamente
if($_SESSION['captcha'] == $_POST['captcha'] and $_POST['curso']!= 'Selecione'){
	//envia o e-mail para o visitante do site
	$mailDestino = $_POST['txtEmail']; 
	$nome = $_POST['txtNome'];	
	$mensagem = "Obrigado pela sua solicitação, responderemos e breve!";
	$assunto = "Obrigado pelo seu contato!";
	$arquivo = $_FILES["arquivo"];
	//var_dump($arquivo);
	//die();

	//envia o e-mail para o administrador do site
	$nome = 'Escola Real';	
	$assunto = "SOLICITAÇÃO DE MATRÍCULA - enviado pelo Site Escola Real";
	$mensagem = "Recebemos uma mensagem no site na página Contato<br/>
			<strong>Nome do aluno:</strong> $_POST[txtNome]<br/>
			<strong>Nome do Responsável:</strong> $_POST[txtresponsavel]<br/>
			<strong>e-mail:</strong> $_POST[txtEmail]<br/>
			<strong>Telefone:</strong> $_POST[tel]<br/>
			<strong>Curso:</strong> $_POST[curso]<br/>
			<strong>Observação:</strong> $_POST[txtMensagem]";

	$mail = new PHPMailer();
	//$mail->SMTPDebug = 2;
	//$mail->Debugoutput = 'html';


	$mail->IsSMTP(); 
	$mail->CharSet = 'UTF-8';
	$mail->True;
	$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação

	$mail->Host = 'br940.hostgator.com.br'; // SMTP servers
	$mail->Port = '587'; //Porta de envio do email - 465
	$mail->Username = 'contato@escolareal.com.br'; // SMTP username
	$mail->Password = 'Real@1009'; // SMTP password
	$mail->From = 'contato@escolareal.com.br'; // From
	$mail->FromName = "Contato";
	$mailDestino = 'contato@escolareal.com.br'; 
	$mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
	$mail->WordWrap = 50; // Definir quebra de linha
	$mail->IsHTML = true ; // Enviar como HTML
	$mail->Subject = $assunto ; // Assunto
	$mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
	$mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

	$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );
		if(!$mail->Send()){	
			$msg = "Erro ao enviar a mensagem.";
			echo "<script>alert('$msg');window.location.assign('matricula.php');</script>";
			}else{
				$msg = "Obrigado por enviar sua Mensagem.";
				echo "<script>alert('$msg');
				window.location.assign('matricula.php');</script>";
			}
} else {
	$msg = "Código inválido ou curso não informado! Tente novamente";
	echo "<script>alert('$msg');window.location.assign('matricula.php');</script>";
}
?>