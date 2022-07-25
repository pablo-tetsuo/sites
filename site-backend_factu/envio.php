<?php	
//carrega a classe classes para conectar ao banco de dados
include("conexao_mysql.php");
//Carrega as classes do PHPMailer
include("./phpmailer/class.phpmailer.php"); 
include("./phpmailer/class.smtp.php"); 

$acao= $_REQUEST['acao'];
$curriculo= $_REQUEST['curriculo'];
switch($acao){
	case "contato":
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

		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->CharSet = 'UTF-8';
		$mail->True;
		$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
		
		$select = "SELECT * FROM tb_email WHERE ID=1";
    	$mysql = mysqli_query($conection,$select);
		while ($envio=mysqli_fetch_array($mysql)){
		$mail->Host = $envio["smtp"]; // SMTP servers
		$mail->Port = $envio["porta"]; //Porta de envio do email 
		$mail->Username = $envio["email"]; // SMTP username
		$mail->Password = $envio["senha"]; // SMTP password
		$mail->From = $envio["email"]; // From
		$mail->FromName = "Contato" ;
		$mailDestino = $envio["email"]; 
		} // Nome de quem envia o email
		$mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
		$mail->WordWrap = 50; // Definir quebra de linha
		$mail->IsHTML = true ; // Enviar como HTML
		$mail->Subject = $assunto ; // Assunto
		$mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
		$mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML
			if(!$mail->Send()){	
				$msg = "Erro ao enviar a mensagem.";
				echo "echo <script>alert('$msg');window.location.assign('index.php#secao-contato');</script>";
				}else{
					$msg = "Sua mensagem foi enviada com sucesso.";
					echo "<script>alert('$msg');
					window.location.assign('index.php#secao-contato');</script>";
				}
	break;
	case "curriculo":	
		//envia o e-mail para o visitante do site
		$mailDestino = $_POST['txtEmail']; 
		$nome = $_POST['txtNome'];	
		$mensagem = "Obrigado pelo seu contato, responderemos ASAP!";
		$assunto = "Obrigado pelo seu contato!";
		$arquivo = $_FILES["arquivo"];
		//var_dump($arquivo);
		//die();

		//envia o e-mail para o administrador do site
		$nome = 'Factu';	
		$assunto = "Mensagem recebida do site";
		$mensagem = "Recebemos uma mensagem no site <br/>
				<strong>Nome:</strong> $_POST[txtNome]<br/>
				<strong>e-mail:</strong> $_POST[txtEmail]<br/>
				<strong>Assunto:</strong> $_POST[assunto]<br/>
				<strong>Telefone:</strong> $_POST[tel]<br/>
				<strong>Mensagem:</strong> $_POST[txtMensagem]";

		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->CharSet = 'UTF-8';
		$mail->True;
		$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
		
		$select = "SELECT * FROM tb_email WHERE ID=2";
    	$mysql = mysqli_query($conection,$select);
		while ($envio=mysqli_fetch_array($mysql)){
		$mail->Host = $envio["smtp"]; // SMTP servers
		$mail->Port = $envio["porta"]; //Porta de envio do email 
		$mail->Username = $envio["email"]; // SMTP username
		$mail->Password = $envio["senha"]; // SMTP password
		$mail->From = $envio["email"]; // From
		$mail->FromName = "Currículo" ;
		$mailDestino = $envio["email"]; 
		} // Nome de quem envia o email
		$mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
		$mail->WordWrap = 50; // Definir quebra de linha
		$mail->IsHTML = true ; // Enviar como HTML
		$mail->Subject = $assunto ; // Assunto
		$mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
		$mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

		$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );
			if(!$mail->Send()){	
				$msg = "Erro ao enviar a mensagem.";
				echo "echo <script>alert('$msg');window.location.assign('vagas.php');</script>";
				}else{
					$msg = "Sua mensagem foi enviada com sucesso.";
					echo "<script>alert('$msg');
					window.location.assign('vagas.php');</script>";
				}
	break;
}

?>