<?php
include_once('../../classes/conexao.php');

echo $_GET['link'];

$update = "UPDATE tb_rede_sociais set link = '".$_GET['link']."' where Nome = '".$_GET['rede']."'";

//echo $update;

$bd = mysqli_query($conn, $update);

 ?>
