<?php
include('../../classes/conexao.php');


$select = "SELECT id, tela FROM tb_telas WHERE tipo_galeria = 1 AND id not in (15,14,17,18,20)";
$bd = mysqli_query($conn, $select);?>

<div class="container">

  <div class="card">
    <div class="card-header bg-primary text-white">Adicionar nova Imagem</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/imagens/processa.php'>
        Titulo:
        <input type = 'text' class='form-control' name='titulo' required>
        Categoria:
        <select name='categoria' class='form-control' required>
          <option>Selecione.. </option>
          <?php while($linhas = mysqli_fetch_array($bd)){?>
            <option value='<?php echo $linhas['id']; ?>'><?php echo utf8_encode($linhas['tela']); ?></option>

          <?php } ?>

        </select>
       <!--
        <br>
        <input type='checkbox' value='1' name='destaque'> Imagem em destaque
        <div class="glyphicon glyphicon-asterisk"><p><b>Imagens em destaque serão mostradas na página principal<br></b></p></div>
        <br>
        <br> -->

        <input type='file' name='arquivo' required>

        <input type='submit' class='btn btn-primary' value='Adicionar' style='float:right'>

      </form>
  </div>
</div>

<hr>
<hr>



<?php
$bd = mysqli_query($conn, $select);

if($_SERVER['SERVER_NAME'] == 'localhost'){
  $pasta = "../img/portfolio/";
} else {
  $pasta = "http://factumerchandising.com.br/img/portfolio/";
}


while($linhas = mysqli_fetch_array($bd)){
  echo "<h5>".utf8_encode($linhas['tela'])."- (".$linhas['id'].")</h5>";
  echo "<hr>";
  echo "<div class='row'>";

        $sel_img = "SELECT * FROM tb_imagens where id_tela = ".$linhas['id'];
        $bd_1 = mysqli_query($conn, $sel_img);
        while($row = mysqli_fetch_array($bd_1)){
          echo "<div class='col-sm-2' style='text-align: center'>";
          echo "<img src='".$pasta.$row['arquivo']."' height=100px><br>";
          //echo "<a href='modulos/imagens/deleta.php?id=".$row['ID']."' class='btn btn-danger'>Excluir</a>";
          echo "<a href='#' onclick=\"carrega('imagens/deleta.php?id=".$row['ID']."', 5, 'Imagens')\" class='btn btn-danger'>Excluir</a>";

          
          echo "</div>";
        }
  echo "</div>";

}
?>
