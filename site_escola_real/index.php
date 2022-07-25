<?php

// Criptografa o código do site nos navegadores
//require 'lib/ObfuscatorHTML/ObfuscatorHTML.php';

?>

<!doctype html>
<html lang="pt-br">
<head>
  <!-- Desenvolvida por Fanny's Informática 
        Contatos: (11) 5012 - 0004/0422/0181
        0800 773 0422
        www.fannys.com.br

  -->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>REEI - Real Escola de Educação Infantil e Fundamental I</title>
  <meta name="keywords" content="Escola bairro Ipiranga, colégio bairro ipiranga, escola real, colégio real, escola no bairro do ipiranga, ensino infantil, ensino fundamental, berçario, maternal">
  <meta name="description" content="Escola no bairro do Ipiranga Berçário ensino infantil e ensino fundamental">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link href="fontawesome/css/all.css" rel="stylesheet">
    
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

<!-- NAVBAR-->
  <?php require dirname(__FILE__).'/views/navbar.php'; ?>

  <div class="espaco01" class="espaco01"><br><br><br></div>

<section id="inicio" class="home"  
  style="
  background-size: cover; 
	background-image: url('img/carousel/fundo.jpg');
  background-repeat: no-repeat;
  padding-top: 30px;
  margin-top: 100px;
  height: 100%;
  width: 100%;
  ">

  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel/01.jpg" id="img-carousel" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/carousel/02.jpg" id="img-carousel" class="d-block w-100">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div style="margin-top: 10px;">&nbsp;<div>
</section>

<!--Cursos-->
<section id="cursos" class="section-body">
    <div class="container">
    <br>
      <div class="row text-center d-flex justify-content-center" id="titulo-curso" align="center">
      <br><br>
        <h2 align="center" style="margin-top: 10px">NOSSOS CURSOS</h2>
        <hr style="width: 80%;">
        
      </div>

      <div class="row text-center d-flex justify-content-center mb-5" id="button-menu">
    
          <div id="btn-cursos" type="button" class="current btn btn-small" onclick="mostra('bercario')">BERÇÁRIO</div>
          <div id="btn-cursos" type="button" class="btn btn-small" onclick="mostra('infantil')">EDUCAÇÃO INFANTIL</div>
          <div id="btn-cursos" type="button" class="btn btn-small" onclick="mostra('fundamental')">FUNDAMENTAL I</div>

      </div><!--class="row"-->

      <div id="bercario" style="display:block; background-color: white; padding: 20px; margin-top: -20px; border-radius:5px;">
        <h2 align="center" style="margin-top: 10px">BERÇÁRIO</h2>

        <div class="row" style="color: black; font-size: 20px;">
          <div class='col-sm-6'>
            Oferecemos espaços estruturados e profissionais qualificados para oferecer todos os cuidados e
            estímulos de que as crianças pequenas necessitam, respeitando cada etapa do desenvolvimento infantil. 
            Priorizamos o entendimento das individualidades de cada bebê, suprindo suas necessidades de maneira personalizada, 
            desde a alimentação, higiene e estimulação psicomotora, de linguagem e relacionamento interpessoal. 
          </div>
          <div class='col-sm-6'>
            <img class="img-fluid" src="img/cursos/bercario.jpg" alt="">
          </div>
      </div>
      </div><!--id="bercario"-->
      <div id="infantil" style="display:none; background-color: white; padding: 20px; margin-top: -20px; border-radius:5px;">
        <h2 align="center" style="margin-top: 10px">EDUCAÇÃO INFANTIL</h2>

        <div class="row" style="color: black; font-size: 20px;">
          <div class='col-sm-6'>
          A Educação Infantil é um espaço de acolhimento, segurança, trocas afetivas, descobertas e aquisição de conhecimentos.
          Um lugar em que brincando, a criança compreende o mundo e a si mesma, construindo significações e modificando-as em 
          cada interação. É na escola que a criança entra em contato com valores e normas culturais, aprende a trabalhar as emoções, 
          a se descobrir e a descobrir os seus gostos e os dos amigos, oportunizando vivências que provocarão o desenvolvimento afetivo, 
          cognitivo e social.
          </div>
          <div class='col-sm'>

            <div class="row">
              <div class="col-sm" style="margin-top: 50px">
                <center>
                  <img class="img-fluid" src="img/cursos/infantil1.jpg" alt="">
                </center>
              </div>
              <div class="col-sm" style="margin-top: 50px">
                <center>
                  <img class="img-fluid" src="img/cursos/infantil2.jpg" alt="">
                </center>
              </div>
            </div>

            <div class="row">
              <div class="col-sm" style="margin-top: 50px">
                <center>
                  <img class="img-fluid" src="img/cursos/infantil3.jpg" alt="">
                </center>
              </div>
              <div class="col-sm" style="margin-top: 50px">
                <center>
                  <img class="img-fluid" src="img/cursos/infantil4.jpg" alt="">
                </center>
              </div>
            </div>

          </div>
        </div>
      </div><!--id="infantil"-->
      <div id="fundamental" style="display:none; background-color: white; padding: 20px; margin-top: -20px; border-radius:5px;">
        <h2 align="center" style="margin-top: 10px">FUNDAMENTAL I</h2>

        <div class="row" style="color: black; font-size: 20px;">
          <div class='col-sm-6'>
          O Ensino Fundamental corresponde ao 1º ano ao 5º ano, revelando aos estudantes um novo e atraente universo de saberes: 
          o aluno encerra o processo de alfabetização, iniciado na Educação Infantil, adquirindo pleno domínio da leitura, 
          da escrita e do cálculo, além de desenvolver diferentes competências, habilidades, tornando-se mais autônomo e 
          protagonista de sua vida.
          </div>
          <div class='col-sm'>

            <div class="row">
              <div class="col-sm" style="margin-top: 50px">
                <center>
                  <img class="img-fluid" src="img/cursos/fundamental1.jpg" alt="">
                </center>
              </div>
              <div class="col-sm" style="margin-top: 50px">
                <center>
                  <img class="img-fluid" src="img/cursos/fundamental2.jpg" alt="">
                </center>
              </div>
            </div>

            <div class="row">
              <div class="col-sm" style="margin-top: 50px">
                <center>
                  <img class="img-fluid" src="img/cursos/fundamental3.jpg" alt="">
                </center>
              </div>
              <div class="col-sm" style="margin-top: 50px">
                <center>
                  <img class="img-fluid" src="img/cursos/fundamental4.jpg" alt="">
                </center>
              </div>
            </div>

          </div>
        </div>
      </div><!--id="fundamental-->
    </div><!--class="container"-->
    <br><br><br>
</section><!--id="secao-servicos"-->



<section id="sobre" class="section-body">
  <div class="cursos-itens">
    <div class="container">
    <br>
      <h2 align="center">QUEM SOMOS</h2>
      <hr style="width: 80%;">

      <p style="color: black; font-size: 20px;">
      &nbsp;&nbsp; Estamos localizadas no bairro do Ipiranga, oferecendo um trabalho diferenciado desde 1991, 
        nos seguimentos do Berçário ao 5º ano do Fundamental I.
      </p>
      <p style="color: black; font-size: 20px;">
      &nbsp;&nbsp; Somos uma escola acolhedora, repleta de amor e carinho. 
        Nossa ESCOLA não é feita de muros e paredes, é feita por pessoas. 
        Todas as áreas e cantinhos foram especialmente planejados para que o aluno se sinta em casa. 
      </p>

      <div class='row'>
        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/quemsomos/01.jpg" alt="">
        </div>

        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/quemsomos/02.jpg" alt="">
        </div>

        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/quemsomos/03.jpg" alt="">
        </div>

        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/quemsomos/04.jpg" alt="">
        </div>

        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/quemsomos/05.jpg" alt="">
        </div>

        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/quemsomos/06.jpg" alt="">
        </div>
      </div>
    <br><br>
    </div>

 
  </div>
</section>

<section id="proposta" class="proposta">
  <div class="container">
    <br>
    <h2 align="center">PROPOSTA PEDAGÓGICA</h2>
    <hr style="width: 80%;">

    <p style="color: black; font-size: 20px;">
    &nbsp;&nbsp; Nossa proposta prioriza o aprendizado ativo, onde o aluno é o protagonista de todo processo de conhecimento, 
      estando no centro do seu próprio aprendizado. Através do desenvolvimento das habilidades cognitivas, motoras, 
      emocionais e sociais o aluno vai construindo o seu conhecimento.
    </p>
    <p style="color: black; font-size: 20px;">
    &nbsp;&nbsp; Nosso compromisso é oferecer aos nossos alunos um ambiente agradável, estimulante, desafiador e seguro, por meio de um projeto educacional alinhado aos novos tempos.
      Nossa equipe pedagógica é composta por educadores capacitados e envolvidos no acompanhamento cuidadoso dos processos de aprendizagem dos alunos onde o aperfeiçoamento contínuo garantirá a qualidade do ensino.
    </p>

    <div class='row'>
        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/proposta/01.jpg" alt="" style="width: 350px; height: 265px">
        </div>

        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/proposta/02.jpg" alt="">
        </div>

        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/proposta/03.jpg" alt="">
        </div>
    </div>

    <div class='row'>
        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/proposta/04.jpg" alt="" style="width: 350px; height: 265px">
        </div>

        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/proposta/05.jpg" alt="">
        </div>

        <div class='col-sm-4' style="margin-top: 20px;">
          <img class="img-fluid" src="img/proposta/06.jpg" alt="" style="width: 350px; height: 265px">
        </div>
    </div>

    <br><br>
  </div>
</section>
     
<section id="contato" class="contato">
  <div class="col">
    <br>
    <h3 align="center">CONTATO</h3>
    <hr style="width: 80%;">

    <p align="center" style="color: black; font-size: 20px;">Deseja enviar algo? Clique no botão logo abaixo e preencha o formúlario</p>
  </div>

  <div class="col" align="center">
    <a href="contato.php" style="text-decoration: none;">
      <div align="center" class="botao-contato">
        Enviar E-mail
      </div>
    </a>
  </div>
  <br>

  <div class="col" align="center">
    <p style="color: black; font-size: 20px;">Nossa Localização</p>
    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.2954219553917!2d-46.60875818538306!3d-23.593735768672925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5bec8cebcdb5%3A0xe3b74fd82e9dc598!2sEscola%20Real!5e0!3m2!1spt-BR!2sbr!4v1600811073372!5m2!1spt-BR!2sbr" 
      width="450" height="450" frameborder="1" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
  </div>
  <br>
</section>
            
<section id="trabalhe" class="trabalhe">
  <center>
  <div class="container">
  <br>
    <h2 align="center">TRABALHE CONOSCO</h2>
    <hr style="width: 80%;">

    <p style="color: black; font-size: 20px;">
    Venha fazer parte da nossa equipe!
    </p>
    <div class="row" style="color: black; font-size: 20px;">
      <div class="col">
      <p style="color: black; font-size: 20px;">
        Clique no botão "Enviar Currículo" e preencha o formulário.
      </p>    

      <br<br>
            <a href="trabalhe.php" style="text-decoration: none; margin-top: 20px">
              <div align="center" class="botao-trabalhe">
                Enviar Currículo
              </div>
            </a>
      
      </div>
      <!-- Primeira Imagem Escola -->
    </div>

    <br><br>

    <div>
      <img class="img-fluid" src="img/trabalhe/trabalhe.jpg" alt="Trabalhe Conosco">
    </div>

    <br><br>

  </div>
  </center>
</section>

<section id="apoio" class="apoio">
  <div class="container">
    <br>
    <h2 align="center">APOIO AOS PAIS</h2>
    <hr style="width: 80%;">

    <p style="color: black; font-size: 20px;">
    Ferramenta para logar e realizar consultas financeiras e pedagógicas.
    </p>
    <div class="row" style="color: black; font-size: 15px;">
      <!-- Primeira Imagem Apoio -->
      <div class="col img-apoio" align="center">
        <img class="img-fluid" src="img/apoioaospais/logoapoio.jpg" alt="">
      </div>
      <div class="col" align="left">
      &nbsp;&nbsp; Disponibilizamos o acesso ao portal apoio aos pais para o responsável receber 
        comunicados em geral sobre assuntos da escola, ocorrências pedagógicas e médicas sobre o aluno e
        acompanhamento financeiro com a disponibilidade de imprimir boletos das mensalidades. 
      <br>
      <center>
        <a href="login.php" style="text-decoration: none; margin-top: 20px">
          <div align="center" class="botao-apoio">
            Fazer login
          </div>
        </a>
      </center>
      </div>
    </div>
    <div class="row img-apoio-mobile" align="center">
          <img class="img-fluid" src="img/apoioaospais/logoapoio.jpg" alt="">
    </div>
    <br><br><br><br>
  </div>
</section>


  <!-- FOOTER RODA PÉ-->
    <?php require dirname(__FILE__).'/views/footer.php'; ?>
 
  <!-- TAWK TO -- BATE PAPO -- >
  <?php require dirname(__FILE__).'/views/tawkto.php'; ?>


</body>

</html>
<!--BIBLIOTECAS-->
<!-- Função da tela de Serviços para trocar os textos -->
<script>
  function mostra(div){
    $("#bercario").hide();
    $("#infantil").hide();
    $("#fundamental").hide();
    $("#"+div).show('100');
        }


//função para minimizar o menu no mobile
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});
</script>
