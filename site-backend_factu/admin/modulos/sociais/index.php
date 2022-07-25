<?php
include('../../classes/conexao.php');


$select = "SELECT * FROM tb_rede_sociais";
$bd = mysqli_query($conn, $select);

?>
<form onsubmit="return processa_form()">
<table class='table table-striped' style='width: 50%; margin-left: 25%; margin-top:40px;'>
  <thead>
  <tr>
    <th>Rede Social
    <th>Link
  </tr>
  </thead>
  <tbody>
    <?php
    $conta = 0;

    while ($linhas = mysqli_fetch_array($bd)) {?>
      <tr>
        <td><?= utf8_encode($linhas['Nome']); ?>
        <td><input type='hidden' class='form-control' value='<?= utf8_encode($linhas['Nome']); ?>' id='Rede<?php echo $conta ?>'>
            <input type='text' class='form-control' value='<?= utf8_encode($linhas['Link']); ?>' id='link<?php echo $conta ?>'>
      </tr>

    <?php $conta ++;
    }
    ?>
    <tr>
      <td><input type='hidden' class='form-control' value='<?php echo $conta; ?>' id='processa'>
      <td align='right'>
        <input type='submit' value='Gravar' class='btn btn-primary'>
    </tr>

  </tbody>
</table>

<div id='auxiliar'></div>

<script>
function processa_form(){
  var n = $("#processa").val();

  for (var i = 0; i < n; i++) {
    $('#auxiliar').load('modulos/sociais/processa.php?rede='+$("#Rede"+i).val()+"&link="+$("#link"+i).val());
    if(i == n-1){
      alert("Atualização realizada com sucesso!");
      carrega('modulos/sociais/index.php', '1', 'Redes Sociais')
    }

  }

  return false;
}


</script>
