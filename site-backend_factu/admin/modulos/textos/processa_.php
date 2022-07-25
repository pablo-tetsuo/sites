<?php
include('../../classes/conexao.php');

$texto = $_POST['editor1'];
$id = $_POST['id'];

//echo "<pre>";
$update = "update tb_textos set texto='".utf8_encode($texto)."' where ID = $id";

//echo $update;

$bd = mysqli_query($conn, $update);

//echo "Texto Alterado com sucesso";

 ?>
<script>
 alert("Texto alterado com sucesso!")
 window.location.assign('../../admin.php?tela=textos');
</script>