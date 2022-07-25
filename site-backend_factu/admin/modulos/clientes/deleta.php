<?php
include('../../classes/conexao.php');


  $update = "delete from tb_imagens where ID =". $_GET["id"];
  $bd = mysqli_query($conn, $update) or die($update);

  ?>
  <script>
    alert("Imagem excluida com sucesso!");
    carrega('clientes/index.php', 5, 'Clientes');
  </script>
