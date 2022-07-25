<?php

//carrega a classe classes para conectar ao banco de dados
//Carrega as classes do PHPMailer
include("./phpmailer/class.phpmailer.php"); 
include("./phpmailer/class.smtp.php"); 


// Recebendo os valores do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$cel = $_POST['cel'];
// $arquivo = $_FILES['arquivo'];

//echo ' nome:'.$nome. ' sobrenome: '.$sobrenome. ' email: '.$email. ' cel: '.$cel; die();
//var_dump($_FILES['arquivo']);
// die();


	//envia o e-mail para o administrador do site	
	$assunto = "site Clinica Visia - Pré-Avaliação Online";
	$mensagem = "Recebemos uma mensagem no site Clinica Visia - Pré-Avaliação Online<br/>
			<strong>Nome:</strong> $nome<br/>
            <strong>Sobrenome:</strong> $sobrenome<br/>
			<strong>e-mail:</strong> $email<br/>
			<strong>Celular:</strong> $cel<br/>";

	$mail = new PHPMailer();
	//$mail->SMTPDebug = 2;
	//$mail->Debugoutput = 'html';


	$mail->IsSMTP(); 
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
	$mail->Port = 587; //Porta de envio do email - 465
	$mail->Host = 'smtp.gmail.com'; // SMTP servers
	$mail->Username = 'clinicavisiaenvio@gmail.com'; // SMTP username
	$mail->Password = 'visia123'; // SMTP password

	// Quem receberá o e-mail
	$mail->From = 'comercial@clinicavisia.com.br'; // From
	$mail->FromName = "Clinica Visia - Pré avaliação";
	$mailDestino = 'comercial@clinicavisia.com.br'; // Email que vai receber as informações do site
	$mail->AddAddress($mailDestino); // Email e nome de quem receberá //Responder
	$mail->addReplyTo($email);

	$mail->isHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->WordWrap = 50; // Definir quebra de linha
	$mail->Subject = $assunto ; // Assunto

	$mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
	$mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML


	$total = count($_FILES['arquivo']['name']);
 
	for($i=0; $i<$total; $i++) {
		$ext = strstr($_FILES["arquivo"]["name"][$i],".");
		$ext_permitida = array('.jpg','.png','.jpeg','.JPG','.PNG','.JPEG','.gif','.GIF','.bmp','.BMP','.pdf','.PDF');
		if(!in_array($ext, $ext_permitida)){
			$msg = "Imagem em extensão não permitida!";
            echo "<script>alert('$msg');
            window.location.assign('capilar.php');</script>";
		}

		//verifica tamanho do arquivo máximo 2Mb
		if($_FILES['arquivo']['size'][$i] <= 2500000){
			// arquivo temporário
			$temp = $_FILES['arquivo']['tmp_name'][$i];
			$arquivo = $_FILES['arquivo']['name'][$i];
			$mail->AddAttachment($temp, $arquivo);
		}else{
			$msg = "Tamanho da foto Excedido. Máximo 2MB";
            echo "<script>alert('$msg');
            window.location.assign('capilar.php');</script>";
		}
	}

		if(!$mail->Send()){	
			$msg = "Erro ao enviar a mensagem.";
			echo "<script>alert('$msg');window.location.assign('capilar.php');</script>";
        } else{
            $msg = "Obrigado por enviar sua Pré-Avaliação aguarde retorno.";
            echo "<script>alert('$msg');
            window.location.assign('capilar.php');</script>";
        }
