<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include('../../classes/conexao.php');

$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
$arquivo = $_FILES['arquivo']['name'];
$titulo = utf8_decode($_POST['titulo']);

if($_SERVER['SERVER_NAME'] == 'localhost'){
  $destino = "img/";

} else {
  $destino = "../../../img/clientes/";
}

move_uploaded_file( $arquivo_tmp, $destino.$arquivo);




$insert = "INSERT INTO tb_imagens (nome, titulo, arquivo, id_tela) values ('$arquivo','".$titulo."', '$arquivo', 14)";

$bd = mysqli_query($conn, $insert) or die($insert);
 ?>
  <script type="text/javascript">
 	  alert('cliente Cadastrado com sucesso!');
 	  window.location.assign('../../admin.php?tela=clientes');
  </script>
