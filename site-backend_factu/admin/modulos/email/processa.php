<?php
include_once('../../classes/conexao.php');

$smtp = $_POST["smtp"];
$porta = $_POST["porta"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$formemail = $_POST["formemail"];


$update = "UPDATE tb_email SET smtp='$smtp', porta='$porta', email='$email', senha='$senha' WHERE ID='$formemail'";

$bd=mysqli_query($conn, $update) or die($update);

 ?>
<script type="text/javascript">
 	  alert('Email gravado com sucesso!');
 	  window.location.assign('../../admin.php?tela=email');
</script>