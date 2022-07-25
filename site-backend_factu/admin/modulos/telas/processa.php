<?php
include('../../classes/conexao.php');

if(!isset($_GET['acao'])){
  $update = "UPDATE tb_telas set id_texto=null where tela like '".$_GET['texto']."'";
  $bd = mysqli_query($conn, $update);?>
  <script>
  alert("Texto Removido com sucesso!");
  $("#text").empty();
  </script>
<?php } else {
  $update = "UPDATE tb_telas set id_texto='".$_GET['id']."' where tela like '%".substr($_GET['texto'],0,4)."%'";
  
  $bd = mysqli_query($conn, $update) or die(mysqli_error($conn));?>
  <script>
  alert("Texto Alterado com sucesso!");
  $("#text").empty();
  </script>
<?php
  }
 ?>
