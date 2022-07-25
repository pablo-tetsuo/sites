<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
$arquivo = strstr($_FILES['arquivo']['name'],'.');

$img = $_POST['img'];

if($_SERVER['SERVER_NAME'] == 'localhost'){
  $destino = "../../../img/imagens_home/";
} else {
  $destino = "../../../img/imagens_home/";
}
if($arquivo= ".jpg" || $arquivo = ".JPG"){
  move_uploaded_file($arquivo_tmp, $destino.''.$img.'.jpg');
  ?>
<script type="text/javascript">
  alert('Imagem alterada com sucesso!');
  window.location.assign('../../admin.php?tela=imagens_home');
</script>
<?php
}else{
?>
<script type="text/javascript">
  alert('Arquivo com extensão errada!');
  window.location.assign('../../admin.php?tela=imagens_home');
</script>
<?php 
}
?>
 
