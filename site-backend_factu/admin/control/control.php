<?php
session_start();
$pontos = array(".",",","'","/","-","_",'"');

include('../classes/conexao.php');

header('Access-Control-Allow-Origin: http://localhost');

$acao = isset($_GET['acao'])?$_GET['acao']:'';

$resposta = array();
$conta = 0;


switch ($acao) {
  case 'menu':
      $modulo_pai = isset($_GET['mod'])?$_GET['mod']:0;

      $select = "SELECT * FROM tb_modulos where ModuloPai = $modulo_pai order by Ordem";
      $bd = mysqli_query($conn, $select);

      $resposta['erro'] = "0";
      $resposta['msg'] = "Solicitação Capturada com sucesso!";

      while($row = mysqli_fetch_array($bd)){
        $resposta['campos']['id'][$conta] = $row['ID'];
        $resposta['campos']['icone'][$conta] = $row['Icone'];
        $resposta['campos']['titulo'][$conta] = utf8_encode($row['Titulo']);
        $resposta['campos']['arquivo'][$conta] = $row['ArquivoBase'];
        $conta++;
      }
  break;

  case 'login':
      $usuario = $_GET['user'];
      $senha = $_GET['pass'];

      $conta = 0;

      $select = "SELECT * FROM tb_usuarios WHERE Usuario = '$usuario'";
      $bd = mysqli_query($conn, $select);
      while($row = mysqli_fetch_array($bd)){
          $senha_u = $row['Senha'];
          $conta = 1;
      }

      if($conta ==0){
        $resposta['login']='Usuário Incorreto';
      } else {
      if($senha_u == $senha){
        $resposta['login']='ok';
        $_SESSION['logado'] = true;
      } else {
        $resposta['login']='Senha Incorreta';
      }
    }


  break;

}

$resposta['registros']=$conta;

echo json_encode($resposta);

?>
