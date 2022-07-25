<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include('../../classes/conexao.php');

$sel_max = "SELECT max(id) as id from tb_imagens";
$bd = mysqli_query($conn, $sel_max);
while($linhas = mysqli_fetch_array($bd)){
  $id = $linhas['id'];
}

$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
$arquivo = $_FILES['arquivo']['name'];
$arquivo_tipo = strstr($_FILES['arquivo']['name'],'.');
$titulo = utf8_decode($_POST['titulo']);
$destaque = isset($_POST['destaque'])?1:0;
$categoria = $_POST['categoria'];
//var_dump($_POST);die();

  $destino = "../../../img/portfolio/";


move_uploaded_file($arquivo_tmp, $destino.$id.$arquivo_tipo);

$insert = "INSERT INTO tb_imagens (nome, titulo, arquivo, id_tela, destaque) values ('$arquivo','".utf8_encode($titulo)."', '$id$arquivo_tipo', $categoria, $destaque)";

$bd = mysqli_query($conn, $insert) or die($insert);
 ?>
  <script type="text/javascript">
 	  alert('Imagem Cadastrada com sucesso!');
 	  window.location.assign('../../admin.php?tela=imagens');
  </script>
