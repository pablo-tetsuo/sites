<?php

// Criptografa o código do site nos navegadores
require 'lib/ObfuscatorHTML/ObfuscatorHTML.php';
session_start();

?>

<!doctype html>
<html lang="pt-br">
<head>
  <!-- Desenvolvida por Fanny's Informática 
        Contatos: (11) 5012 - 0004/0422/0181
        0800 773 0422
        www.fannys.com.br

  -->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>REEI - Real Escola de Educação Infantil e Fundamental I</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link href="fontawesome/css/all.css" rel="stylesheet">
    
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

<section id="menu">
  <?php require dirname(__FILE__).'/views/navbar.php'; ?>
</section>

<section id="trabalhe_conosco" class="section-body" style="background: rgb(233, 243, 252)">
  <div class="container">
    <br><br><br><br><br>
      <h2 align="center">TRABALHE CONOSCO</h2>
      <hr style="width: 80%;">
      <p style="color: black; font-size: 25px;">
    Preencha o formulário abaixo, para se candidatar a alguma vaga.
    </p>

<form action="trabalhe_envio.php" method="POST" role="form" enctype="multipart/form-data" class="contactForm">      
    <div class="form-group">
        <input type="text" name="txtNome" class="form-control form" id="nome" placeholder="Nome*" data-rule="minlen:4" data-msg="Digite no minímo 4 caracteres"/>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="txtEmail" id="email" placeholder="Email*" data-rule="email" data-msg="Digite um e-mail Válio"/>
    </div>
    <div class="form-group">
        <input type="tel" class="form-control" name="tel" id="tel" placeholder="Telefone/Celular" data-rule="minlen:4"/>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Digite a vaga que deseja se candidatar" data-rule="minlen:4" data-msg="Digite a vaga que deseja se candidatar."/>
    </div>
    <div class="form-group">
        <label>Envie o seu Currículo de preferencia arquivos pdf</label><br>
        <span class="btn btn-default btn-file">
        <input type="file" name="arquivo" id="arquivo">
        </span>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="txtMensagem" rows="5" data-rule="required" placeholder="Mensagem"></textarea>
    </div>
    <img src="captcha.php" alt="Código Captcha"><br>
    <label>Digite o código</label>
    <input type="text" name="captcha" required><br>
    <div class="form-group">
        <!-- Button -->
        <button type="submit" id="submit" name="submit" class="btn btn-info" style="float:left">Enviar</button>
    </div>
</form>


<br><br><br>


  </div>
</section>

  <!-- FOOTER RODA PÉ-->
  <?php require dirname(__FILE__).'/views/footer.php'; ?>

  <!-- TAWK TO -- BATE PAPO -- >
  <?php require dirname(__FILE__).'/views/tawkto.php'; ?>

</body>

</html>
<script>
//função para minimizar o menu no mobile
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});
</script>
