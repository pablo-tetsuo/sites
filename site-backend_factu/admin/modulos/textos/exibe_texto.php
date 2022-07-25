<?php

include('../../classes/conexao.php');
$select = "SELECT * FROM tb_textos where id = ".$_GET['id'];
$bd = mysqli_query($conn, $select) or die($select);

while($linhas = mysqli_fetch_array($bd)){
  echo "<h5>".utf8_encode($linhas['Descricao'])."</h5>
        <hr>";
  ?>



  <div id='edit'>
    <textarea cols="80" id="editor1" name="editor1" rows="20" data-sample="1" data-sample-short style='height: 400px;'>
      <?php
        echo utf8_encode($linhas['texto']);
       ?>
    </textarea>
  </div>


<script data-sample="1">
CKEDITOR.replace( 'editor1', {
  uiColor: '#CCEAEE'
} );
</script>

<?php } ?>
