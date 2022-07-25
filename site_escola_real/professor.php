<?php

// Criptografa o código do site nos navegadores
require 'lib/ObfuscatorHTML/ObfuscatorHTML.php';

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
  <title>REEI - Real Escola de Educação Infantil e Fundamental I - Login Apoio aos Pais</title>
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
<style>


</style>

<body style="background-color: rgb(212, 255, 239);">

<!-- NAVBAR-->
  <?php require dirname(__FILE__).'/views/navbar.php'; ?>


<div class="espaco01" class="espaco01"><br><br><br></div>

<section id="diario-login" class="section-body" style="margin-top:120px;">
  <div class="container">
  <br>
    <h2 align="center">DIÁRIO DO PROFESSOR</h2>
    <hr style="width: 80%;">

    <p align="center" style="color: black; font-size: 25px;">Digite o login e a senha para acessar:</p>


  <div class="row">
    <div class="col-sm">&emsp;&emsp;</div>

    <div class="col-sm" style="margin-left: 10%;">
    <form action =  "https://apoioaospais.com.br/diario/rotina_login.php" method=post>
        <!-- Incluir o identificador da escola no value do campo a seguir -->				  						
        <input type='hidden' value='334' name='identificador' style='width: 300px; border-radius:3px; font-size: 20px; border-color: solid 1px #4287f5'>
        <div class="row">
          <i class="fas fa-user-graduate fa-2x"></i>&emsp;
          <input type="text" name="login" style='width: 200px; border-radius:3px; font-size: 20px; border-color: solid 1px #4287f5' required>
        </div>
        <br>
        <div class="row">
          <i class="fas fa-lock fa-2x"></i>&emsp;
          <input type="password" name="senha" style='width: 200px; border-radius:3px; font-size: 20px; border-color: solid 1px #4287f5' required>
        </div>
        <br>
        <div class="row" align="center">
          &emsp;&emsp;&emsp;
          <input type='submit' value="Login" id="loginapoio" style='width: 50%; border-radius: 5px; background-color:#4287f5; color:#fff; border: solid 1px #4287f5;font-size: 20px; padding: 5px'>
        </div>
        <br><br><br><br><br><br>
    </form>
    </div>

    <div class="col-sm">&emsp;&emsp;</div>

  </div>
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
