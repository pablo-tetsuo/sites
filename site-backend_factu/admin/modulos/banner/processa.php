<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
$arquivo = strstr($_FILES['arquivo']['name'],'.');

if($_SERVER['SERVER_NAME'] == 'localhost'){
  $destino = "../../../img/";
} else {
  $destino = "../../../img/";
}
if($arquivo= ".JPG" || $arquivo = ".jpg"){
  move_uploaded_file( $arquivo_tmp, $destino."intro-background.jpg");
  ?>
<script type="text/javascript">
  alert('Banner alterado com sucesso!');
  window.location.assign('../../admin.php?tela=banner');
</script>
<?php
}else{
?>
<script type="text/javascript">
  alert('Arquivo com extensão errada!');
  window.location.assign('../../admin.php?tela=banner');
</script>
<?php 
}
?>
 
