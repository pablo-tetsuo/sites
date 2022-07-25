<?php
session_start();

if(!$_SESSION['logado']){
    echo "<script>";
    echo "window.location.assign('index.php');";
    echo "</script>;";
    die();
}

 ?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Web Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <script src="js/functions.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body>
  <div class='load' id='load'>
    <img src="img/load.gif" alt="" style='position: fixed; top: 50%; left: 50%; height: 200px; width: 200px;margin: -100px;'>
  </div>


  <div class='topo-esquerda'>
      <h4 style='font-size: 15px; margin-top:7px;'><i class="fas fa-book"></i> Web Admin</h4></center>
  </div>

  <div class = 'topo-direita'>

  </div>

  <div class='fundo_menu'>

    <div class='bt_sair' onclick='sair()'>
      <i class="fas fa-times"></i>  Sair
    </div>

  </div>

  <div class='bt-menu' onclick='menu()'>
    <h5><i class="fas fa-bars"></i></h5>
  </div>

  <div class='topo-modulo'>
    DashBoard
  </div>
  <div class='conteudo'>

  </div>
