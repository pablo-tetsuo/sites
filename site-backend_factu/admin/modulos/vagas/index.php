<div id='auxiliar'></div>
<?php
include('../../classes/conexao.php');
$select = "SELECT * FROM tb_imagens WHERE id_tela=15 order by id desc";
$bd = mysqli_query($conn, $select);
?>


<div class="container">

  <div class="card">
    <div class="card-header bg-primary text-white">Adicionar nova vaga</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/vagas/processa.php'>
        Titulo:
        <input type = 'text' class='form-control' name='titulo' required>
        <br>

        <input type='file' name='arquivo' required>
        <div class="glyphicon glyphicon-asterisk"><p><b>Recomendamos uma resolução de 680px de Largura e 380px de Altura<br></b></p></div>

        <input type='submit' class='btn btn-primary' value='Adicionar' style='float:right'>

      </form>
  </div>
</div>




<table class='table table-striped' style='width: 60%; margin-left: 20%; margin-top: 50px;'>
  <thead>
  <tr>
    <th width = 50%>Vaga
    <th width = 30%>Titulo
  </tr>
  </thead>
  <tbody>
  <?php
    while ($row = mysqli_fetch_array($bd)) {?>
      <tr>
        <td colspan=2><b><?php echo utf8_decode($row['titulo']); ?></b>
      </tr>
      <tr>
        <td><img src = "http://factumerchandising.com.br/img/vagas/<?php echo $row['arquivo']; ?>" height=200px>
        <td align='right'><a href = '#' onclick='deleta(<?php echo $row['ID']; ?>)' class='btn btn-danger'><i class="fas fa-trash-alt"></i></a>
      </tr>
    <?php }  ?>
  </thead>
</table>

<script>
function deleta(id){
    r = confirm('deseja realmente excluir essa imagem?');

    if (r == true) {
      $("#auxiliar").load("modulos/vagas/deleta.php?id="+id);
    }
}
</script>
