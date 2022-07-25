<?php
include('../../classes/conexao.php');

?>

<div class="row">
<div class="col-md-5">
  <div class="card" style="width: 500px">
    <div class="card-header bg-primary text-white">Configuração Email para Contato</div>
    <div class="card-body">
    <form action="modulos/email/processa.php" method="POST">
    <div class="col-md-9 col-sm-6">
      <?php
        $select = "SELECT * FROM tb_email WHERE ID=1";
        $bd = mysqli_query($conn, $select); 
      while ($linhas=mysqli_fetch_array($bd)){?>
        <div class="form-group">
          <label>SMTP</label>
          <input type="text" class="form-control form" name="smtp" id="smtp" value='<?php echo $linhas['smtp']; ?>'/>
        </div>
        <div class="form-group">
          <label>Porta</label>
          <input type="text" class="form-control form" name="porta" id="porta" value='<?php echo $linhas['porta']; ?>'/>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" id="email" value='<?php echo $linhas['email']; ?>'/>
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input type="password" class="form-control" name="senha" id="senha" value='<?php echo $linhas['senha']; ?>'/>
        </div>
        <div class="col-xs-5">
          <button type="submit" id="submit" name="submit" class="btn btn-info">Gravar</button>
        </div> 
        <input type="hidden" name="formemail" value="1">
      <?php } ?>
    </div>
    </form>     
    </div>
  </div>
</div>

<div class="col-md-5">
  <div class="card" style="width: 500px">
    <div class="card-header bg-primary text-white">Configuração Email para Currículo</div>
    <div class="card-body">
    <form action="modulos/email/processa.php" method="POST">
    <div class="col-md-9 col-sm-6">
      <?php
        $select = "SELECT * FROM tb_email WHERE ID=2";
        $bd = mysqli_query($conn, $select); 
      while ($linhas=mysqli_fetch_array($bd)){?>
        <div class="form-group">
          <label>SMTP</label>
          <input type="text" class="form-control form" name="smtp" id="smtp" value='<?php echo $linhas['smtp']; ?>'/>
        </div>
        <div class="form-group">
          <label>Porta</label>
          <input type="text" class="form-control form" name="porta" id="porta" value='<?php echo $linhas['porta']; ?>'/>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" id="email" value='<?php echo $linhas['email']; ?>'/>
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input type="password" class="form-control" name="senha" id="senha" value='<?php echo $linhas['senha']; ?>'/>
        </div>
        <div class="col-xs-5">
          <button type="submit" id="submit" name="submit" class="btn btn-info">Gravar</button>
        </div> 
        <input type="hidden" name="formemail" value="2">
      <?php } ?>
    </div>
    </form>     
    </div>
  </div>
</div>

</div>