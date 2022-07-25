<meta charset="utf-8">
<?php

include('../../classes/conexao.php');
$select = "SELECT * FROM tb_textos where id = ".$_GET['id'];
$bd = mysqli_query($conn, $select) or die($select);

while($linhas = mysqli_fetch_array($bd)){
  echo "<h5>".utf8_encode($linhas['Descricao'])."</h5>
        <hr>";
  ?>



  <div id='edit'>
<form action='modulos/textos/processa_.php' method='post'>

    <textarea cols="80" id="editor1" name="editor1" rows="20" data-sample="1" data-sample-short style='height: 350px;'>
      <?php 
        echo utf8_encode($linhas['texto'])
      ?>
      
    </textarea>

    <input type='hidden' name='id' value="<?php echo $linhas['ID']; ?>">
    <br>
    <input type='submit' class='btn btn-primary btn-sm' style='float: right' value='Salvar'>
</form>

  </div>
  
  <br>
  
  <!--<button class='btn btn-primary'  onclick='gravar()'>Gravar</button>-->


<script data-sample="1">
CKEDITOR.replace( 'editor1', {
  uiColor: '#3C8DBC'
} );
</script>
<?php } ?>
