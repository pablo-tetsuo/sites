<?php
include("conexao_mysql.php");

// Verificando o numero de acessos ao atualizar o index
$sql = "insert into tb_acessos (DataHora) values (now())";
$bd = mysqli_query($conection,$sql);
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
      //$(".img_logo").animate({height: '150', width: '150' });
      $("nav#menu").addClass('active');
     
     
    }else{
      $("nav#menu").removeClass('active');
      //$(".img_logo").animate({height: '100', width: '100' });
      }
  });
  </script>
  

  
</head>

<body>
<!--Menu Fixo-->
<section id="menu" class="appear">
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
      <ul class="nav navbar-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="#secao-servicos">SERVIÇOS</a></li>
          <li><a href="#secao-promocao">PROMOÇÃO</a></li>
          <li><a href="#secao-clientes">CLIENTES</a></li>
          <li><a href="#secao-vagas">VAGAS</a></li>
          <li><a href="#secao-mapa">LOCALIZAÇÃO</a></li>
          <li><a href="#secao-contato">CONTATO</a></li>
          <li><a href="https://www.factu.com.br/blog" target="_blank">BLOG</a></li>
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

<section>
 <div id="botaofixo" class="navbar-logo">
   <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela=20 AND ID=453";
      $mysql = mysqli_query($conection,$select);
      while ($img=mysqli_fetch_array($mysql)){ 
    echo "<a href='index.php#secao-contato'>
            <img src='img/imagens_home/".$img["arquivo"]."' class='img_logo' title='Contate-nos' style='margin-top:1px'>
          </a><br>";}

    ?>
    <?php
    $select ="SELECT * FROM tb_rede_sociais WHERE ID=7";
    $mysql = mysqli_query($conection,$select);
    while ($blog=mysqli_fetch_array($mysql)){ 
    echo "<a href='".$blog["Link"]."' target='_blank'>"; }
    ?>
    <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela=20 AND ID=452";
      $mysql = mysqli_query($conection,$select);
            
      while ($img=mysqli_fetch_array($mysql)){ 
      echo "<img src='img/imagens_home/".$img["arquivo"]."' class='img_logo' title='Blog'>";} ?>
    </a><br>
  </div>
<section>


 <!--SERVIÇOS-->
 <section id="secao-servicos" class="section appear clearfix">
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
          <?php
          $select = "SELECT * FROM tb_textos WHERE ID='2'";
          $mysql = mysqli_query($conection,$select);
          
          while ($textos=mysqli_fetch_array($mysql)){
            echo "<div>".utf8_encode($textos["texto"])."</div>"
          ;}    
        ?>
          </div><!--class="section-header"-->
        </div><!--class="col-md-offset-3 col-md-6"-->
      </div><!--class="row mar-bot40"-->

      <div class="row">
        <div id="button-menu" class="col-md-12 text-center d-flex justify-content-center mb-5">
          <button type="button" class="current btn btn-small" onclick="mostra('merchandising')">Merchandising</button>
          <button type="button" class="btn btn-small" onclick="mostra('terceirizacao')">Terceirização de profissionais</button>
          <button type="button" class="btn btn-small" onclick="mostra('distribuicao')">Distribuição e Varejo</button>
          <button type="button" class="btn btn-small" onclick="mostra('atendimento')">Atendimento Nacional</button>
          <button type="button" class="btn btn-small" onclick="mostra('gestao')">Gestão inteligente de Equipes Externas</button>
          <button type="button" class="btn btn-small" onclick="mostra('propaganda')">Propaganda</button>
        </div>
      </div><!--class="row"-->
      <div id="merchandising" style="display:block">
        <?php
          $select = "SELECT * FROM tb_textos WHERE ID='3'";
          $mysql = mysqli_query($conection,$select);
          
          while ($textos=mysqli_fetch_array($mysql)){
            echo "<div>".utf8_encode($textos["texto"])."</div>"
          ;}    
          ?>
      </div><!--id="merchandising"-->
      <div id="terceirizacao" style="display:none">
        <?php
          $select = "SELECT * FROM tb_textos WHERE ID='4'";
          $mysql = mysqli_query($conection,$select);
          
          while ($textos=mysqli_fetch_array($mysql)){
            echo "<div>".utf8_encode($textos["texto"])."</div>"
          ;}    
          ?>
      </div><!--id="terceirizacao"-->
      <div id="distribuicao" style="display:none">
        <?php
          $select = "SELECT * FROM tb_textos WHERE ID='5'";
          $mysql = mysqli_query($conection,$select);
          
          while ($textos=mysqli_fetch_array($mysql)){
            echo "<div>".utf8_encode($textos["texto"])."</div>"
          ;}    
        ?>
      </div><!--id="distribuicao-->
      <div id="atendimento" style="display:none">
        <?php
          $select = "SELECT * FROM tb_textos WHERE ID='6'";
          $mysql = mysqli_query($conection,$select);
          
          while ($textos=mysqli_fetch_array($mysql)){
            echo "<div>".utf8_encode($textos["texto"])."</div>"
          ;}    
        ?>
      </div><!--id="atendimento"-->
      <div id="gestao" style="display:none">
        <?php
          $select = "SELECT * FROM tb_textos WHERE ID='7'";
          $mysql = mysqli_query($conection,$select);
          
          while ($textos=mysqli_fetch_array($mysql)){
            echo "<div>".utf8_encode($textos["texto"])."</div>"
          ;}    
        ?>
      </div><!--id="gestao"-->
      <div id="propaganda" style="display:none">
        <?php
          $select = "SELECT * FROM tb_textos WHERE ID='8'";
          $mysql = mysqli_query($conection,$select);
          
          while ($textos=mysqli_fetch_array($mysql)){
            echo "<div>".utf8_encode($textos["texto"])."</div>"
          ;}    
        ?>
      </div><!--id="propaganda"-->
    </div><!--class="container"-->
  </section><!--id="secao-servicos"-->

<!--Galeria (tela promoção)-->
<section id="secao-promocao" class="section-body">
  <div class="container">
    <center>
    <?php
      $select = "SELECT * FROM tb_textos WHERE ID='9'";
      $mysql = mysqli_query($conection,$select);         
      while ($textos=mysqli_fetch_array($mysql)){
        echo "<div>".utf8_encode($textos["texto"])."</div>"
      ;}    
    ?>
    </center>
     </div>
  <div class='col-sm-2' style='height: 100px; width: 150px; margin-top:2px; display:'>
  </div>

  <div class='col-sm-2 align-self-center' style='height: 300px; margin-top:2px'>
    <a class='thumbnail fancybox' rel='ligthbox' href='promocao.php?ID=merchandising' title='Merchandising'>
      <figure class='foto-legenda' style='width:315 ;height: 177px; background-size: cover; background-image: url("img/imagens_home/merchandising.jpg");'>
        <figcaption></figcaption>
      </figure>
      <div class='caption' id='caption'><center>Merchandising</center></div>
    </a>
  </div>

  <div class='col-sm-2 align-self-center' style='height: 300px; margin-top:2px'>
    <a class='thumbnail fancybox' rel='ligthbox' href='promocao.php?ID=acoes' title='Ações Promocionais'>
      <figure class='foto-legenda' style='width:315 ;height: 177px; background-size: cover; background-image: url("img/imagens_home/acoes.jpg");'>
        <figcaption></figcaption>
      </figure>
      <div class='caption' id='caption'><center>Ações Promocionais</center></div>
    </a>
  </div>

  <div class='col-sm-2 align-self-center' style='height: 300px; margin-top:2px'>
    <a class='thumbnail fancybox' rel='ligthbox' href='promocao.php?ID=desing' title='Desing em PDV'>
      <figure class='foto-legenda' style='width:315 ;height: 177px; background-size: cover; background-image: url("img/imagens_home/desing.jpg");'>
        <figcaption></figcaption>
      </figure>
      <div class='caption' id='caption'><center>Desing em PDV</center></div>
    </a>
  </div>

  <div class='col-sm-2 align-self-center' style='height: 300px; margin-top:2px'>
    <a class='thumbnail fancybox' rel='ligthbox' href='promocao.php?ID=midia' title='Mídia impressa'>
      <figure class='foto-legenda' style='width:315 ;height: 177px; background-size: cover; background-image: url("img/imagens_home/midia.jpg");'>
        <figcaption></figcaption>
      </figure>
      <div class='caption' id='caption'><center>Mídia impressa</center></div>
    </a>
  </div>

  <div class='col-sm-2 align-self-center' style='height: 300px; margin-top:2px'>
    <a class='thumbnail fancybox' rel='ligthbox' href='promocao.php?ID=folders' title='Folders e catálogos'>
      <figure class='foto-legenda' style='width:315 ;height: 177px; background-size: cover; background-image: url("img/imagens_home/folders.jpg");'>
        <figcaption></figcaption>
      </figure>
      <div class='caption' id='caption'><center>Folders e catálogos</center></div>
    </a>
  </div>

</section>

  <!--CLIENTES-->
<section id="secao-clientes" class="section-body">
  <div class="container">

    <div class="row mar-bot40">
      <div class="col-md-offset-3 col-md-6">
        <div class="section-header">
          <?php
          $select = "SELECT * FROM tb_textos WHERE ID='10'";
          $mysql = mysqli_query($conection,$select);
          
          while ($textos=mysqli_fetch_array($mysql)){
            echo "<div>".utf8_encode($textos["texto"])."</div>"
          ;}    
          ?>
        </div>
      </div>
    </div>
      
<!-- resolução das imagens L:170 x A:100-->
  <div class="row" id="logoclientes"><!--1º Linha-->
    <?php
      $select = "SELECT * FROM tb_imagens WHERE id_tela = '14' ORDER BY ID";
      $mysql = mysqli_query($conection,$select);

          // funcão do botão "Mostrar mais desabilitada"
         /* $i=0;
          while ($i<6) {
          while ($clientes=mysqli_fetch_array($mysql)) {
            if ($i < 12) {
            echo "<div class='col-sm-2 align-center'>
                    <img alt='clientes' class='clientes' style='margin-top: 30px' src='img/clientes/".$clientes["arquivo"]."' title='".$clientes["titulo"]."'>
                  </div>";
                  $i++;
                }
              }
          }  */
          while ($clientes=mysqli_fetch_array($mysql)) {
            echo "<div class='col-sm-3 align-center'>
                    <img alt='clientes' class='clientes' style='margin-top: 30px' src='img/clientes/".$clientes["arquivo"]."' title='".$clientes["titulo"]."'>
                  </div>";}
          ?>
      </div><!-- Final 1º Linha-->
      <!--
      <center>
        Botão para mostrar o restante da div de logos e depois após clicar ele desaparece  conforme função ajax
        <button type="button" id="mostrarmais" class="btn btn-info" onclick="$('#logoclientes').load('clientes.php');$('#mostrarmais').hide()">
          Mostrar Mais
        </button>
      </center> -->
  </div><!--class="container"-->
</section><!--id="secao-clientes"-->

  <!--VAGAS-->
  <section id="secao-vagas" class="section-body">
    <div class="container">
      <?php
        $select = "SELECT * FROM tb_textos WHERE ID='11'";
        $mysql = mysqli_query($conection,$select);      
        while ($textos=mysqli_fetch_array($mysql)){
          echo "<div>".utf8_encode($textos["texto"])."</div>"
        ;}    
      ?>    
  <div id="emprego">
    <p><center><a href="vagas.php"><img alt="Emprego" class="img-responsive" src="img/imagens_home/emprego.jpg" /></a></center></p>
  </div>
      </div><!--class="container"--> 
  </section><!--id="secao-vagas"-->

 <!-- LOCALIZAÇÃO -->
 <section id="secao-mapa" class="section-body">
    <div class="container">
    <center>
      <?php
        $select = "SELECT * FROM tb_textos WHERE ID='12'";
        $mysql = mysqli_query($conection,$select);
          
        while ($textos=mysqli_fetch_array($mysql)){
          echo "<div>".utf8_encode($textos["texto"])."</div>"
          ;}    
        ?>    
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.1877933683522!2d-46.61700158447499!3d-23.597597068817826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5bc0616a84eb%3A0x93ddf835f592a153!2sFactu%20Trade%20Marketing%20e%20Funcion%C3%A1rios%20Tempor%C3%A1rios!5e0!3m2!1spt-BR!2sbr!4v1570111467203!5m2!1spt-BR!2sbr" width="55%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </center>
    </div><!--class="col-md-offset-3--> 
</section>

  <!--CONTATO-->
  <section id="secao-contato" class="section-body">
    <div class="container">
      <div class="row">
        <div class="section-header">
          <?php
          $select = "SELECT * FROM tb_textos WHERE ID='13'";
          $mysql = mysqli_query($conection,$select);
          
          while ($textos=mysqli_fetch_array($mysql)){
            echo "<div>".utf8_encode($textos["texto"])."</div>"
            ;}    
        ?>
        </div>
        <form action="envio.php" method="POST" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
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
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="txtMensagem" rows="5" data-rule="required" placeholder="Mensagem"></textarea>
            </div>
          </div>
          <div class="col-xs-5">
          <input type="hide" name="acao" value="contato" style="display:none">
            <!-- Button -->
              <button type="submit" id="submit" name="submit" class="btn btn-info">Enviar</button>
          </div>
        </form>
      </div><!--class="row"-->
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
  <a href="#intro" class="scrollup"><i class="fa fa-chevron-up"></i></a>
</section>

</body>
</html>
<!--BIBLIOTECAS-->
<!-- Função da tela de Serviços para trocar os textos -->
<script>
  function mostra(div){
    $("#merchandising").hide();
    $("#terceirizacao").hide();
    $("#distribuicao").hide();
    $("#atendimento").hide();
    $("#gestao").hide();
    $("#propaganda").hide();
    $("#"+div).show('100');
        }

//função para minimizar o menu no mobile
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});
</script>

