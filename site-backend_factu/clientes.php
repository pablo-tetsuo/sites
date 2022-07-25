<?php
include("conexao_mysql.php");
    
$select = "SELECT * FROM tb_imagens WHERE id_tela = '14' ORDER BY ID";
    $mysql = mysqli_query($conection,$select);
    
    while ($clientes=mysqli_fetch_array($mysql)){                       
    echo "<div class='col-sm-2 align-center'>
            <img alt='clientes' class='clientes' style='margin-top: 30px' src='img/clientes/".$clientes["arquivo"]."'>
          </div>";
    }
?>