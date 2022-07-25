<?php
include('../../classes/conexao.php');

$tipo = isset($_GET['tipo'])?$_GET['tipo']:'dia';

switch ($tipo) {
  case 'dia':

    $dia = date('Y-m-d');

    $select = "SELECT DataHora FROM tb_acessos WHERE cast(DataHora AS DATE) = '$dia' ORDER BY DataHora";
    $bd = mysqli_query($conn, $select) or die($select);

    $x = array();
    $y = array();
    $hora = '';
    $conta = 0;

    while($linhas = mysqli_fetch_array($bd)){

      if(date('H', strtotime($linhas['DataHora'])) == $hora){
        $y[$conta] = (isset($y[$conta])?$y[$conta]:0) + 1;
      } else {
        $x[$conta] = date('H', strtotime($linhas['DataHora']))."h";
        $y[$conta] = (isset($y[$conta])?$y[$conta]:0) + 1;
        $hora = date('H', strtotime($linhas['DataHora']));
        $conta++;
      }
    }
  break;
  case 'd_15':

  $dia = date('Y-m-d', strtotime("-15 days",strtotime(date('Y-m-d'))));

  $select = "SELECT COUNT(*) as acessos, CAST(DataHora AS DATE) AS data FROM tb_acessos WHERE DataHora >= '$dia'
             GROUP BY CAST(DataHora AS DATE)
             ORDER BY data";

  $bd = mysqli_query($conn, $select) or die($select);

  $x = array();
  $y = array();
  $hora = '';
  $conta = 0;

  while($linhas = mysqli_fetch_array($bd)){
    $x[$conta] = date("d/m", strtotime($linhas['data']));
    $y[$conta] = $linhas['acessos'];
    $conta++;
  }




  break;
  case 'mes':
  $dia_ini = date('Y-m-1');
  $dia_fim = date('Y-m-d');

  $select = "SELECT COUNT(*) as acessos, CAST(DataHora AS DATE) AS data FROM tb_acessos WHERE cast(DataHora as date) >= '$dia_ini' and cast(DataHora as date) <='$dia_fim'
             GROUP BY CAST(DataHora AS DATE)
             ORDER BY data";

  $bd = mysqli_query($conn, $select) or die($select);

  $x = array();
  $y = array();
  $hora = '';
  $conta = 0;

  while($linhas = mysqli_fetch_array($bd)){
    $x[$conta] = date("d/m", strtotime($linhas['data']));
    $y[$conta] = $linhas['acessos'];
    $conta++;
  }
  break;
  case 'ano':

  $select = "SELECT COUNT(*) as acessos, month(DataHora) AS DATA
             FROM tb_acessos
             WHERE year(DataHora) = '".date('Y')."'
             GROUP BY month(DataHora)
             ORDER BY DataHora";

  $bd = mysqli_query($conn, $select) or die($select);

  $x = array();
  $y = array();
  $hora = '';
  $conta = 0;
  $meses = array('','Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');

  while($linhas = mysqli_fetch_array($bd)){
    $x[$conta] = $meses[$linhas['DATA']];
    $y[$conta] = $linhas['acessos'];
    $conta++;
  }
  break;
}



 ?>


<!--Load the AJAX API-->

<script type="text/javascript">

google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Acessos", { role: "style" } ],

    <?php for ($i=0; $i < $conta ; $i++) {
      echo '["'.$x[$i].'", '.$y[$i].', "#367FA8"],';
    }?>

  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);

  var options = {
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
  chart.draw(view, options);
}





</script>

<div id="columnchart_values" style="height: 400px;">

</div>
