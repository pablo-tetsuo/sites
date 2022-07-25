<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
$arquivo = strstr($_FILES['arquivo']['name'],'.');

if($_SERVER['SERVER_NAME'] == 'localhost'){
  $destino = "../../../img/";
} else {
  $destino = "../../../img/";
}
if($arquivo= ".png" || $arquivo = ".PNG"){
  move_uploaded_file( $arquivo_tmp, $destino."logo.png");
  ?>
<script type="text/javascript">
  alert('Logo alterado com sucesso!');
  window.location.assign('../../admin.php?tela=logo');
</script>
<?php
}else{
?>
<script type="text/javascript">
  alert('Arquivo com extensão errada!');
  window.location.assign('../../admin.php?tela=logo');
</script>
<?php 
}
?>
 
