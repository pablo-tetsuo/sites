<?php
include('../../classes/conexao.php');


$select = "SELECT tl.ID, tl.tela, te.id, te.Descricao, te.texto  FROM tb_telas tl
           LEFT JOIN tb_textos  te ON tl.id_texto = te.ID
           WHERE tipo_galeria = 0";
$bd = mysqli_query($conn, $select);

?>

<table class='table table-striped' style='width: 50%; display: inline-block'>
<thead>
  <tr>
    <th width=50%>Tela
    <th width=50%>Texto
  </tr>
</thead>
<tbody>
<?php
  $conta = 0;

  while($linhas = mysqli_fetch_array($bd)){ ?>
    <tr>
      <td><?php echo utf8_encode($linhas['tela']); ?>
      <td>
          <?php
          $sel_text = "SELECT * FROM tb_textos where Descricao not like '".$linhas['Descricao']."'";

          $bd1 = mysqli_query($conn, $sel_text);
           ?>
          <select id='t_<?php echo  utf8_encode($linhas['ID']) ?>' class="form-control" onchange = "mostra_texto('<?php echo  $linhas['ID'] ?>', '<?php echo  utf8_encode($linhas['tela']) ?>')";>
            <option value ='<?php echo $linhas['ID'] ?>'><?php echo utf8_encode($linhas['Descricao']) ?></option>
            <?php
            while($row = mysqli_fetch_array($bd1)){?>
            <option value ='<?php echo $row['ID'] ?>'><?php echo utf8_encode($row['Descricao']) ?></option>
          <?php } ?>
          </select>


    </tr>
  <?php $conta++; } ?>

</tbody>

</table>

<div id='text' style='width: 45%; float:right; background-color:#fff; height: 500px; margin: 10px;  border: solid 1px #ccc; box-shadow: 5px 5px 5px #ccc; display: inline-block; padding: 10px;'>

</div>

<script>
    function mostra_texto(n,t){

      var id = $("#t_"+n).val();
      $("#text").load("modulos/telas/exibe_texto.php?id="+id+"&t="+encodeURIComponent(t));

    }
</script>
