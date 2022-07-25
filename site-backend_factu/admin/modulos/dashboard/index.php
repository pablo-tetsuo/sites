<?php
include('../../classes/conexao.php');

$d_15 = date('Y-m-d', strtotime("-15 days",strtotime(date('Y-m-d'))));
$mes = date('m');
$ano = date('Y');

$select = "SELECT MAX(dia) dia, MAX(quin) quin, MAX(mes) mes, MAX(ano) ano FROM (
           SELECT COUNT(*) AS 'dia', 0 AS 'quin',0 AS 'mes',0 AS 'ano' FROM tb_acessos WHERE CAST(datahora AS DATE) = cast(NOW() AS DATE)
           UNION
           SELECT 0 AS 'dia', COUNT(*) AS 'quin',0 AS 'mes',0 AS 'YEAR' FROM tb_acessos WHERE datahora > '$d_15'
           UNION
           SELECT 0 AS 'dia', 0 AS 'quin', COUNT(*) AS 'mes',0 AS 'YEAR' FROM tb_acessos WHERE month(datahora) = $mes AND YEAR(datahora) = $ano
           UNION
           SELECT 0 AS 'dia', 0 AS 'quin', 0 AS 'mes', COUNT(*) AS 'YEAR' FROM tb_acessos WHERE YEAR(datahora) = $ano) AS data";
$bd = mysqli_query($conn, $select);
while($linhas = mysqli_fetch_array($bd)){
  $dia = $linhas['dia'];
  $d_15 = $linhas['quin'];
  $mes = $linhas['mes'];
  $ano = $linhas['ano'];
}


 ?>


<script>
n=0;
q=0;
m=0;
a=0;
setdia();
setqui();
setmes();
setano();



function setdia(){
  temp = 1000/<?php echo $dia; ?>;
  if(n<=<?php echo $dia; ?>){

      $("#a_dia").text(n);
      n = n+1;
      setTimeout('setdia()', temp);
    }
}

function setqui(){
  temp = 2000/<?php echo $d_15; ?>;
  if(q<=<?php echo $d_15; ?>){
      $("#a_15").text(q);
      q = q+1;
      setTimeout('setqui()', temp);
    }
}

function setmes(){
  temp = 3000/<?php echo $mes; ?>;
  if(m<=<?php echo $mes; ?>){
      $("#a_mes").text(m);
      m = m+1;
      setTimeout('setmes()', temp);
    }
}

function setano(){
  temp = 4000 / <?php echo $ano; ?>;
  if(a<=<?php echo $ano; ?>){
      $("#a_ano").text(a);
      a = a+1;
      setTimeout('setano()', temp);
    }
}



function grafico(tipo, titulo){
  $("#grafico").empty();
  $("#titulo-graf").empty();
  $("#titulo-graf").text(titulo);
  $("#grafico").load('modulos/dashboard/grafico.php?tipo='+tipo);
}





</script>




<div class='row'>
  <div class='col-sm-3' onclick='grafico("dia", "Gráfico de Acessos Diário")'>
    <div style='width:100%; border-radius:3px 3px 0px 0px; background-color: #367FA8; color:#fff;padding:3px; text-align: center'>
      <h5>Acessos do Dia</h5>
    </div>
    <div style='width:100%; border-radius:0px 0px 3px 3px; background-color:#3C8DBC; color:#fff; padding-left: 30px; padding-top: 10px; padding-bottom: 10px; padding-right:30px;'>
      <h1 id='a_dia'>-</h1>
      <h1 style='float:right; color:#367FA8; margin-top: -50px;'><i class="fas fa-chart-line"></i></h1>

    </div>
  </div>

  <div class='col-sm-3' onclick='grafico("d_15", "Gráfico de Acessos Quizenal")'>
    <div style='width:100%; border-radius:3px 3px 0px 0px; background-color: #367FA8; color:#fff;padding:3px; text-align: center'>
      <h5>Acessos dos 15 dias</h5>
    </div>
    <div style='width:100%; border-radius:0px 0px 3px 3px; background-color:#3C8DBC; color:#fff; padding-left: 30px; padding-top: 10px; padding-bottom: 10px; padding-right:30px;'>
      <h1 id='a_15'>-</h1>
      <h1 style='float:right; color:#367FA8; margin-top: -50px;'><i class="fas fa-chart-line"></i></h1>

    </div>
  </div>

  <div class='col-sm-3' onclick='grafico("mes", "Gráfico de Acessos Mensal")'>
    <div style='width:100%; border-radius:3px 3px 0px 0px; background-color: #367FA8; color:#fff;padding:3px; text-align: center'>
      <h5>Acessos do Mês</h5>
    </div>
    <div style='width:100%; border-radius:0px 0px 3px 3px; background-color:#3C8DBC; color:#fff; padding-left: 30px; padding-top: 10px; padding-bottom: 10px; padding-right:30px;'>
      <h1 id='a_mes'>-</h1>
      <h1 style='float:right; color:#367FA8; margin-top: -50px;'><i class="fas fa-chart-line"></i></h1>

    </div>
  </div>

  <div class='col-sm-3' onclick='grafico("ano", "Gráfico de Acessos Anual")'>
    <div style='width:100%; border-radius:3px 3px 0px 0px; background-color: #367FA8; color:#fff;padding:3px; text-align: center'>
      <h5>Acessos do Ano</h5>
    </div>
    <div style='width:100%; border-radius:0px 0px 3px 3px; background-color:#3C8DBC; color:#fff; padding-left: 30px; padding-top: 10px; padding-bottom: 10px; padding-right:30px;'>
      <h1 id='a_ano'>-</h1>
      <h1 style='float:right; color:#367FA8; margin-top: -50px;'><i class="fas fa-chart-line"></i></h1>

    </div>
  </div>
</div>

<div class='row'>
  <div class='col-sm-12'>
    <div style='width:100%; border-radius:3px 3px 0px 0px; background-color: #367FA8; color:#fff;padding:3px; text-align: center; margin-top: 30px'>
      <h5 id='titulo-graf'>Gráfico de Acessos</h5>
    </div>
    <div style='width:100%; border-radius:0px 0px 3px 3px; background-color:#fff; color:#000; padding-left: 30px; padding-top: 10px; padding-bottom: 10px; padding-right:30px; border: solid 1px #367FA8;' id='grafico'>
            <?php include('grafico.php'); ?>
    </div>


  </div>
</div>
