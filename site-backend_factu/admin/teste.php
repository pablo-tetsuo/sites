<html lang="pt">
<head>
  <title>Web Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="fontawesome/css/all.css" rel="stylesheet">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>


<?php
$n = 1;
$i = 1;
echo "<div class='row'>";
while($i <= 100){
  echo "<div class='col-sm-2' style='background-color:#ff00fe'>";
  echo $i;
  echo "</div>";
  $i++;

  if($i == $n+5){
    $n = $n+5;
    echo "</div>";
    echo "<div class='row'>";

  }

}
echo "</div>";


 ?>
