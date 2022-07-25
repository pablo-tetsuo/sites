<?php
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
          <li><a href="index.php#secao-promocao">PROMOÇÃO</a></li>
          <li><a href="index.php#secao-clientes">CLIENTES</a></li>
          <li><a href="vagas.php">VAGAS</a></li>
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

 <section id="secao-vagas" class="section appear clearfix">
    <div class="container" style="padding-top: 50px">
      <div class="row mar-bot">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Vagas</h2>
          </div>
        </div>
      </div>
      <center>
        <h4>
          <p>Envie seu CV para
            <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">curriculo@factu.com.br</button>
            E informe no campo o assunto, a vaga pretendida.
          </p> 
        </h4>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Envie seu Currículo</h4>
              </div>
            <div class="modal-body">
              <form action="envio.php" method="POST" role="form" enctype="multipart/form-data" class="contactForm">
                
                  <div class="form-group">
                    <input type="text" name="txtNome" class="form-control form" id="nome" placeholder="Nome*" data-rule="minlen:4" data-msg="Digite no minímo 4 caracteres"/>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="txtEmail" id="email" placeholder="Email*" data-rule="email" data-msg="Digite um e-mail Válio"/>
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="Telefone/Celular" data-rule="minlen:4"/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" data-rule="minlen:4" data-msg="Digite o assunto"/>
                  </div>
                  <div class="form-group">
                    <span class="btn btn-default btn-file">
                      <input type="file" name="arquivo" id="arquivo">
                    </span>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="txtMensagem" rows="5" data-rule="required" placeholder="Mensagem"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="acao" value="curriculo">
                    <!-- Button -->
                    <button type="submit" id="submit" name="submit" class="btn btn-info" style="float:left">Enviar</button>
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      </div>
    </div>
      </center>

      <!--Fotos-->
      <div class="container">
	      
		      <div class='list-group gallery'>
          <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela='15'  ORDER BY ID DESC";
      $mysql = mysqli_query($conection,$select);

 
  

      while ($vagas=mysqli_fetch_array($mysql)){
        
  
            echo 
            "<div class='col-sm-4 align-self-center' style='height: 300px; margin-top:2px'>
              <a class='thumbnail fancybox' rel='ligthbox' href='img/vagas/".$vagas["arquivo"]."' title='".utf8_encode($vagas["titulo"])."'>
              <figure class='foto-legenda' style='width:315 ;height: 177px'>
                <img class='img-responsive' src='img/vagas/".$vagas["arquivo"]."'/>
                <figcaption></figcaption>
              </figure>
              <div class='caption'>".utf8_encode($vagas["titulo"])."</div>
              </a>
            </div>";
          }
          ?>

          </div> <!-- list-group / final -->    
      </div> <!-- container / final -->
    </div><!--class="container"-->
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
  <a href="vagas.php" class="scrollup"><i class="fa fa-chevron-up"></i></a>
</section>

</body>
</html>
<!--BIBLIOTECAS-->

<script>
//função para minimizar o menu no mobile
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});
</script>
