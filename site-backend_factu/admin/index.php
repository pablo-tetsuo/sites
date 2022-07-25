<?php
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Web Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<div class='fundo-login'>
<center>
<img src="http://factumerchandising.com.br/img/logo.png" class='logo'>
<br><br>
<h1>Login </h1>
</center>

Login:
<input type='text' class='form-control' name='login' id='login'>

Senha:
<input type='password' class='form-control' name='password' id='senha'>

<br>
<br>

<p class='alert alert-danger' style='display: none'>


</p>

<center>
  <input type='button' class='btn btn-primary' value='Logar' onclick='logar()'>
  <a href='../index.php' class='btn btn-danger' >Cancelar</a>
</center>

</div>

<script>
function logar(){

  $(".alert").fadeOut(300);
  var login = $("#login").val();
  var senha = $("#senha").val();

  if(login =='' || senha ==''){
    $(".alert").text('Por favor preencha todos os campos!');
    $(".alert").fadeIn(300);
  } else {
    var control = window.location.protocol + "//" + window.location.host + window.location.pathname.replace("index.php", "") + "control/control.php";

    $.ajax({
              type: "GET",
              url: control+'?acao=login&user='+login+'&pass='+senha,
              timeout: 3000,
              datatype: 'JSON',
              contentType: "application/json; charset=utf-8",
              cache: false,
              beforeSend: function() {

              },
              error: function() {
                /*alert("Não foi possível montar o menu!")
                $("#load").hide();*/
              },
              success: function(retorno) {
                var obj = JSON.parse(retorno);

                if(obj['login'] == "ok"){
                  document.location.assign('admin.php');
                } else {
                  $(".alert").text(obj['login']);
                  $(".alert").fadeIn(300);
                }

              }
          });
  }


}


</script>
