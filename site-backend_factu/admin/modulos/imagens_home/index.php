<div id='auxiliar'></div>
<?php
include('../../classes/conexao.php');
?>


<div class="container">
<p class="bg-info">Atenção: As imagens serão alteradas uma de cada pelo botão "Alterar" correspondente.</p>

<hr style='margin-top: 20px;'>
<h5 style="width: 400px; margin-top: 20px">Promoção</h5>
<div class="col-md-8">
  <div class="card" style="width: 400px; margin-top: 20px">
    <div class="card-header bg-primary text-white">Merchandising</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/imagens_home/processa.php'>
        <input type='file' name='arquivo' required>
        <input type='submit' class='btn btn-primary' value='Alterar' style='float:right'>
        <table class='table table-striped' style='width: 3%; margin-right: 10%; margin-top: 20px;'>
          <thead>
            <tr><th width = 30%>Imagem atual</tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM tb_imagens WHERE id_tela=19 and destaque=1 LIMIT 1";
            $bd = mysqli_query($conn, $select);

            while ($row = mysqli_fetch_array($bd)) {?>
            <tr><td><img src = "../img/imagens_home/<?php echo $row['arquivo']; ?>" height=200px></tr>
            <?php }  ?>
          </tbody>
        </table>
        <input type="hide" name="img" value="merchandising" style="display:none">
      </form>
    </div>
  </div>
</div>

<div class="col-md-8">
  <div class="card" style="width: 400px; margin-top: 20px">
    <div class="card-header bg-primary text-white">Ações Promocionais</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/imagens_home/processa.php'>
        <input type='file' name='arquivo' required>
        <input type='submit' class='btn btn-primary' value='Alterar' style='float:right'>
        <table class='table table-striped' style='width: 3%; margin-right: 10%; margin-top: 20px;'>
          <thead>
            <tr><th width = 30%>Imagem atual</tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM tb_imagens WHERE id_tela=10 and destaque=1 LIMIT 1";
            $bd = mysqli_query($conn, $select);

            while ($row = mysqli_fetch_array($bd)) {?>
            <tr><td><img src = "../img/imagens_home/<?php echo $row['arquivo']; ?>" height=200px></tr>
            <?php }  ?>
          </tbody>
        </table>
        <input type="hide" name="img" value="acoes" style="display:none">
      </form>
    </div>
  </div>
</div>

<div class="col-md-8">
  <div class="card" style="width: 400px; margin-top: 20px">
    <div class="card-header bg-primary text-white">Design em PDV</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/imagens_home/processa.php'>
        <input type='file' name='arquivo' required>
        <input type='submit' class='btn btn-primary' value='Alterar' style='float:right'>
        <table class='table table-striped' style='width: 3%; margin-right: 10%; margin-top: 20px;'>
          <thead>
            <tr><th width = 30%>Imagem atual</tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM tb_imagens WHERE id_tela=11 and destaque=1 LIMIT 1";
            $bd = mysqli_query($conn, $select);

            while ($row = mysqli_fetch_array($bd)) {?>
            <tr><td><img src = "../img/imagens_home/<?php echo $row['arquivo']; ?>" height=200px></tr>
            <?php }  ?>
          </tbody>
        </table>
        <input type="hide" name="img" value="desing" style="display:none">
      </form>
    </div>
  </div>
</div>

<div class="col-md-8">
  <div class="card" style="width: 400px">
    <div class="card-header bg-primary text-white">Mídia Impressa</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/imagens_home/processa.php'>
        <input type='file' name='arquivo' required>
        <input type='submit' class='btn btn-primary' value='Alterar' style='float:right'>
        <table class='table table-striped' style='width: 3%; margin-right: 10%; margin-top: 20px;'>
          <thead>
            <tr><th width = 30%>Imagem atual</tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM tb_imagens WHERE id_tela=12 and destaque=1 LIMIT 1";
            $bd = mysqli_query($conn, $select);

            while ($row = mysqli_fetch_array($bd)) {?>
            <tr><td><img src = "../img/imagens_home/<?php echo $row['arquivo']; ?>" height=200px></tr>
            <?php }  ?>
          </tbody>
        </table>
        <input type="hide" name="img" value="desing" style="display:none">
      </form>
    </div>
  </div>
</div>

<div class="col-md-8">
  <div class="card" style="width: 400px; margin-top: 20px">
    <div class="card-header bg-primary text-white">Folders e Catálogos</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/imagens_home/processa.php'>
        <input type='file' name='arquivo' required>
        <input type='submit' class='btn btn-primary' value='Alterar' style='float:right'>
        <table class='table table-striped' style='width: 3%; margin-right: 10%; margin-top: 20px;'>
          <thead>
            <tr><th width = 30%>Imagem atual</tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM tb_imagens WHERE id_tela=13 and destaque=1 LIMIT 1";
            $bd = mysqli_query($conn, $select);

            while ($row = mysqli_fetch_array($bd)) {?>
            <tr><td><img src = "../img/imagens_home/<?php echo $row['arquivo']; ?>" height=200px></tr>
            <?php }  ?>
          </tbody>
        </table>
        <input type="hide" name="img" value="folders" style="display:none">
      </form>
    </div>
  </div>
</div>

<hr>
<h5 style="width: 400px; margin-top: 20px">Vagas</h5>
<div class="col-md-8">
  <div class="card" style="width: 400px; margin-top: 20px">
    <div class="card-header bg-primary text-white">Vagas</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/imagens_home/processa.php'>
        <input type='file' name='arquivo' required>
        <input type='submit' class='btn btn-primary' value='Alterar' style='float:right'>
        <table class='table table-striped' style='width: 3%; margin-right: 10%; margin-top: 20px;'>
          <thead>
            <tr><th width = 30%>Imagem atual</tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM tb_imagens WHERE id_tela=20 and destaque=1 and ID='451'";
            $bd = mysqli_query($conn, $select);

            while ($row = mysqli_fetch_array($bd)) {?>
            <tr><td><img src = "../img/imagens_home/<?php echo $row['arquivo']; ?>" height=200px></tr>
            <?php }  ?>
          </tbody>
        </table>
        <input type="hide" name="img" value="emprego" style="display:none">
      </form>
    </div>
  </div>
</div>

<h5 style="width: 400px; margin-top: 20px">Botões Fixo</h5>
<div class="col-md-8">
  <div class="card" style="width: 400px; margin-top: 20px">
    <div class="card-header bg-primary text-white">Contato</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/imagens_home/processa.php'>
        <input type='file' name='arquivo' required>
        <input type='submit' class='btn btn-primary' value='Alterar' style='float:right'>
        <table class='table table-striped' style='width: 3%; margin-right: 10%; margin-top: 20px;'>
          <thead>
            <tr><th width = 30%>Imagem atual</tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM tb_imagens WHERE id_tela=20 and destaque=1 and ID='453'";
            $bd = mysqli_query($conn, $select);

            while ($row = mysqli_fetch_array($bd)) {?>
            <tr><td><img src = "../img/imagens_home/<?php echo $row['arquivo']; ?>" height=200px></tr>
            <?php }  ?>
          </tbody>
        </table>
        <input type="hide" name="img" value="contato" style="display:none">
        Recomendamos uma resolução máxima de 100px de altura e largura
      </form>
    </div>
  </div>
</div>

<div class="col-md-8">
  <div class="card" style="width: 400px; margin-top: 20px">
    <div class="card-header bg-primary text-white">Blog</div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action='modulos/imagens_home/processa.php'>
        <input type='file' name='arquivo' required>
        <input type='submit' class='btn btn-primary' value='Alterar' style='float:right'>
        <table class='table table-striped' style='width: 3%; margin-right: 10%; margin-top: 20px;'>
          <thead>
            <tr><th width = 30%>Imagem atual</tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM tb_imagens WHERE id_tela=20 and destaque=1 and ID='452'";
            $bd = mysqli_query($conn, $select);

            while ($row = mysqli_fetch_array($bd)) {?>
            <tr><td><img src = "../img/imagens_home/<?php echo $row['arquivo']; ?>" height=200px></tr>
            <?php }  ?>
          </tbody>
        </table>
        <input type="hide" name="img" value="blog" style="display:none">
        Recomendamos uma resolução máxima de 100px de altura e largura
      </form>
    </div>
  </div>
</div>

</div>