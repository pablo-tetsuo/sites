<?php
include('../../classes/conexao.php');

$id = $_GET['id'];

$select = "SELECT * FROM tb_textos where ID = $id";
$bd = mysqli_query($conn, $select);

$texto = mysqli_fetch_array($bd);


echo $_GET['t'];
echo "<hr>";

echo utf8_encode($texto['texto']);

echo "<hr>";
?>
<a herf='#' onclick='remove()' class='btn btn-danger' style='color:#fff'>Remover</a>
<a herf='#' onclick='grava()' class='btn btn-primary' style='color:#fff'>Gravar</a>


<script>
function remove(){
  var r = confirm('Deseja Realmente remover o Texto dessa tela?');
  if(r==true){
    $('#text').load("modulos/telas/processa.php?texto=<?php echo $_GET['t']; ?>");
  }
}

function grava(){
  var r = confirm('Deseja Realmente altear o texto dessa tela?');
  if(r==true){
    $('#text').load("modulos/telas/processa.php?texto=<?php echo urlencode($_GET['t']); ?>&id=<?php echo $id; ?>&acao=1");
  }
}

</script>
