<div id='auxiliar'></div>
<?php
include('../../classes/conexao.php');
$select = "SELECT * FROM tb_imagens WHERE id_tela=18 order by id desc";
$bd = mysqli_query($conn, $select);
?>
<div class="container">
  <div class="card" style="width: 50%">
    <div class="card-header bg-primary text-white">Alterar Banner</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/banner/processa.php'>
        <input type='file' name='arquivo' required>
        <input type='submit' class='btn btn-primary' value='Alterar' style='float:right'>
        <table class='table table-striped' style='width: 3%; margin-right: 10%; margin-top: 20px;'>
          <thead>
            
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_array($bd)) {?>
            <tr><td><img src = "../img/<?php echo $row['arquivo']; ?>" width=500px></tr>
            <?php }  ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>