<script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>


<?php
include('../../classes/conexao.php');


$select = "SELECT *  FROM tb_textos";
$bd = mysqli_query($conn, $select);

?>

<table class='table table-striped' style='width: 40%; display: inline-block'>
<thead>
  <tr>
    <th width=80%>Texto
    <th width=20%>Editar
  </tr>
</thead>
<tbody>
<?php
  $conta = 0;

  while($linhas = mysqli_fetch_array($bd)){ ?>
    <tr>
      <td><?php echo utf8_encode($linhas['Descricao']); ?>
      <td align='rigth'><a href='#' onclick="editar('<?php echo $linhas['ID']; ?>')" class='btn btn-primary'><i class="fas fa-pencil-alt"></i></a>
    </tr>
  <?php $conta++; } ?>

</tbody>

</table>

<div id='text' style='width: 55%; float:right; background-color:#fff; height: 550px; margin: 10px;  border: solid 1px #ccc; box-shadow: 5px 5px 5px #ccc; display: inline-block; padding: 10px;'>

</div>


<script>
    function editar(id){
      $("#text").load('modulos/textos/exibe_texto_.php?id='+id);
    }
</script>
