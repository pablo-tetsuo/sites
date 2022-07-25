<?php

$div=isset($_GET["ID"])?$_GET["ID"]:'';
//conexão com o Banco de Dados
include("conexao_mysql.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>FACTU Agência de Trade Marketing e Funcionários Temporários</title>
  <meta name="description" content="Factu">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/estilo.php">
  <!--apenas para o Footer e rodapé-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="skin/default.css">
  <!-- Função para a magia de transparecer o menu-->
  <script>
  $(window).scroll(function(event){
  var yOffset = window.pageYOffset;
  var breakpoint = 50;
    if (yOffset > breakpoint){
      $("nav#menu").addClass('active');
    }else{
      $("nav#menu").removeClass('active');
      }
  });
  </script>
  
<!--Inicio Abrindo foto pelo Fancybox-->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>
<!--Final Abrindo foto pelo Fancybox-->
</head>

<body>
<!--Menu Fixo-->
<section id="cabecalho" class="appear">
<nav id="menu" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="float:left">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">HOME</a></li>
          <li><a href="index.php#secao-servicos">SERVIÇOS</a></li>
          <li><a href="promocao.php">PROMOÇÃO</a></li>
          <li><a href="index.php#secao-clientes">CLIENTES</a></li>
          <li><a href="index.php#secao-vagas">VAGAS</a></li>
          <li><a href="index.php#secao-mapa">LOCALIZAÇÃO</a></li>
          <li><a href="index.php#secao-contato">CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="logo" class="navbar-logo">
  <a href="index.php">
    <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela='17'";
      $mysql = mysqli_query($conection,$select);
          
      while ($logo=mysqli_fetch_array($mysql)){
        echo "<img src='img/".$logo["arquivo"]."' class='img_logo' title='".$logo["titulo"]."'>"
      ;}    
    ?>
  </a>
</div>
</section>

<!--Texto e imagem fundos-->
<section>
  <div id="intro" class="intro-content">
      <?php
      $select = "SELECT * FROM tb_textos WHERE ID='1'";
      $mysql = mysqli_query($conection,$select);
          
      while ($banner=mysqli_fetch_array($mysql)){
        echo "<div>".utf8_encode($banner["texto"])."</div>"
      ;}    
    ?>
  </div>
</section>

<!--Galeria (tela promoção)-->
<section id="">
<div class="container">
  
  <div class="row mar-bot40">
    <div class="col-md-offset-3 col-md-6">
      <div class="section-header">
        <h2 class="section-heading" data-animation="bounceInUp">Promoção</h2>
        <h3>Confira abaixo todas as fotos de nossos serviços</h3>
      </div><!--class="section-header"-->
    </div><!--class="col-md-offset-3-->
  </div><!--class="row mar-bot40"-->

  <div class="row">
    <div id="button-menu" class="col-md-12 text-center d-flex justify-content-center mb-5">
      <button type="button" class="current btn btn-small" onclick="mostra('merchandising')">Merchandising</button>
      <button type="button" class="btn btn-small" onclick="mostra('acoes')">Ações</button>
      <button type="button" class="btn btn-small" onclick="mostra('desing')">Design em PDV</button>
      <button type="button" class="btn btn-small" onclick="mostra('midia')">Mídia em PDV</button>
      <button type="button" class="btn btn-small" onclick="mostra('folders')">Folders e Catálogos</button>
    </div>
  </div><!--class="row"-->


  <div id="merchandising" style="display:block; margin-top:20px">
    <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela='19' and destaque='0' ORDER BY ID DESC";
      $mysql = mysqli_query($conection,$select);
      while ($acoes=mysqli_fetch_array($mysql)){
        echo
            "
            <center>                       
            <div class='col-sm-2 align-self-center' style='margin: 3px; width: 200px; height: 200px; background-size: cover; background-image: url(\"img/portfolio/".$acoes["arquivo"]."\");'>
              <a class='fancybox' rel='ligthbox' href='img/portfolio/".$acoes["arquivo"]."' title='".utf8_encode($acoes["titulo"])."'> 
                <div class='image' style='width:100%; height:100%'></div>
              </a>
            </div>
            </center>
            ";
          }

    ?>
  </div>

  <div id="acoes" style="display:none; margin-top:20px">
    <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela='10' and destaque='0' ORDER BY ID DESC";
      $mysql = mysqli_query($conection,$select);
      while ($acoes=mysqli_fetch_array($mysql)){
        echo
            "
            <center>                       
            <div class='col-sm-2 align-self-center' style='margin: 3px; width: 200px; height: 200px; background-size: cover; background-image: url(\"img/portfolio/".$acoes["arquivo"]."\");'>
              <a class='fancybox' rel='ligthbox' href='img/portfolio/".$acoes["arquivo"]."' title='".utf8_encode($acoes["titulo"])."'> 
                <div class='image' style='width:100%; height:100%'></div>
              </a>
            </div>
            </center>
            ";
          }

    ?>
  </div>

  <div id="desing" style="display:none; margin-top:20px">
    <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela='11' and destaque='0' ORDER BY ID DESC";
      $mysql = mysqli_query($conection,$select);
      while ($acoes=mysqli_fetch_array($mysql)){
        echo
        " 
        <center>           
        <div class='col-sm-2 align-self-center' style='margin: 3px; width: 200px; height: 200px; background-size: cover; background-image: url(\"img/portfolio/".$acoes["arquivo"]."\");'>
        <a class='fancybox' rel='ligthbox' href='img/portfolio/".$acoes["arquivo"]."' title='".utf8_encode($acoes["titulo"])."'>
          <div class='image' style='width:100%; height:100%'></div>
        </a>
        </div>
        </center>
        ";
      }

    ?>
        
  </div>
  <div id="midia" style="display:none; margin-top:20px">
    <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela='12' and destaque='0' ORDER BY ID DESC";
      $mysql = mysqli_query($conection,$select);
      while ($acoes=mysqli_fetch_array($mysql)){
        echo
        "
        <center>            
        <div class='col-sm-2 align-self-center' style='margin: 3px; width: 200px; height: 200px; background-size: cover; background-image: url(\"img/portfolio/".$acoes["arquivo"]."\");'>
        <a class='fancybox' rel='ligthbox' href='img/portfolio/".$acoes["arquivo"]."' title='".utf8_encode($acoes["titulo"])."'>
          <div class='image' style='width:100%; height:100%'></div>
        </a>
        </div>
        </center>
        ";
      }

    ?>
  </div>
  <div id="folders" style="display:none; margin-top:20px">
    <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela='13' and destaque='0' ORDER BY ID DESC";
      $mysql = mysqli_query($conection,$select);
      while ($acoes=mysqli_fetch_array($mysql)){
        echo
        "
        <center>            
        <div class='col-sm-2 align-self-center' style='margin: 3px; width: 200px; height: 200px; background-size: cover; background-image: url(\"img/portfolio/".$acoes["arquivo"]."\");'>
        <a class='fancybox' rel='ligthbox' href='img/portfolio/".$acoes["arquivo"]."' title='".utf8_encode($acoes["titulo"])."'>
          <div class='image' style='width:100%; height:100%'></div>
        </a>
        </div>
        </center>
        ";
      }

    ?>
  </div>
</div><!--Class="Container"-->
</section>

<!-- Roda Pé-->
<section id="footer" class="section-body" style="margin-top:20px">
  <div class="container" style="margin-top:75px">
    <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
      <div class="col-sm-12 align-center">
        <ul class="social-network social-circle">
          <?php
          $select = "SELECT * FROM tb_rede_sociais WHERE ID <> '7'";
          $mysql = mysqli_query($conection,$select);
          
          while ($redes=mysqli_fetch_array($mysql)){
            echo "<li><a href='".$redes["Link"]."' target='_Blank' class='ico".$redes["Nome"]."' title='".$redes["Nome"]."'>".$redes["icone"]."
          </a></li>"
          ;}
          ?>
        </ul>
      </div>
    </div>
    <div class="row align-center copyright" style="margin-top:5px">
      <div class="col-sm-12">
        <p>Copyright &copy; Todos os direitos reservados</p>
      </div>
    </div>
    <div class="credits">
        Desenvolvido por <a href="http://fannys.com.br" target="_blank">Fanny's Informática</a>
    </div>
  </div>
  <a href="promocao.php" class="scrollup"><i class="fa fa-chevron-up"></i></a>
</section>

</body>
</html>
<!--BIBLIOTECAS-->

<!-- Função de promoção.php para trocar os as fotos -->
<script>
  function mostra(div){
    $("#merchandising").hide();
    $("#acoes").hide();
    $("#desing").hide();
    $("#midia").hide();
    $("#folders").hide();
    $("#"+div).show('100');
        }

<?php if($div != ''){ ?>
mostra('<?php echo $div; ?>');
<?php } ?>

//função para minimizar o menu no mobile
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});
</script>