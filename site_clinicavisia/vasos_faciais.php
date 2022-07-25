<!DOCTYPE html>
  <!-- Desenvolvida por Fanny's Informática 
        Contatos: (11) 5012 - 0004/0422/0181
        0800 773 0422
        www.fannys.com.br

  -->
<html lang="pt-br">
<head>    
    <!-- INTENS PADRÃO DO HEAD-->
    <title>Clínica Visia | Implante Capilar, Emagrecimento Saudável, Facial e Estética </title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content=" A Clínica Visia conta com médicos altamente qualificados no Brasil e no exterior, que unidos dos melhores equipamentos disponíveis e das melhores práticas do seguimento, conseguem lhe proporcionar conforto e segurança em todos os tratamentos propostos. | Clínica Visia (11) 3729-0300">  
	<meta name="keywords" content="clinica visia, visia, implante capilar, implante de barba, longevidade saudável, clinica de estetica, medicina estetica, tratamentos corporais, tratamentos faciais, implante de sobrancelhas, emagrecimento saudável,fotona, botox, toxinabutolinica,  microagulhamento, dr anderson zei, dr claudio mutti, rejuvescimento intimo são paulo, rejucescimento, rejuvescumento intimo, fotona 4d, laser fotona, fotona, legacy, promoção fotona, venus legacy  ">

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">   
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">  
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="fontawesome/css/all.css" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
	<!--<script src="bootstrap/js/jquery.min.js"></script> -->
	<!--<script src="bootstrap/js/popper.min.js"></script>-->

	<!-- CSS - GERAL - PARA ITENS FIXOS COMO MENU E FOOTER -->
	 <link rel="stylesheet" href="css/geral.css<?php echo '?'.time(); ?>">


	<!-- LISTANDO OS ARQUIVOS CSS ESPECIFICO DESSA PÁGINA-->
	<link rel="stylesheet" href="css/tratamentos/tratamentos_capilar.css">

    <!--- Scripts - sites terceiros -- Facebook, twitter etc.. -->
    <?php include 'scripts_campanha.php'?>

	
</head>

<body>
<!--   CABEÇALHO MOBILE -->
<!--   CSS EM css/geral.css -->
<!--   Funções em funcoes/navbar_funcoes.php -->
<div id='menu_mobile'>
	<?php include 'views/navbar_mobile.php'?>
</div>

<!--   CABEÇALHO -->
<!--   CSS EM css/geral.css -->
<!--   Funções em funcoes/navbar_funcoes.php -->
<div id='menu_desktop'>
	<?php include 'views/navbar.php'?>
</div>


<!-- CONTEUDO  -->

<!-- CASO NÃO TENHA CAROUSEL -->
<section><div class="container"></div></section>
<!-- CASO NÃO TENHA CAROUSEL -->

<section>
<div class="container-fluid" id="intro" style="background-image: url('img/backgroundheader.jpg');">
	<center>
	<div id="intro_titulos">
      <div id="titulo_intro">Vasos Faciais</div>
	  <hr id="linha_intro">
	</div>
	<center>
</div>
</section>

<br><br>

<!-- Video -->
<section>
	<center>
	<div class="container-fluid" id="titulo-tipo-tratamento">
		<h3 id="titulo-tipo-tratamento-conteudo">Rosácea e Telangectasias</h3>
	</div>
	</center>

	<div id="video-capilar-fundo">&nbsp;</div>
	<center>
	<div class="container" id="video-capilar">
		<iframe width="100%" height="315" src="https://www.youtube.com/embed/UisvEgUsQew" frameborder="0" 
		allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
		</iframe>
	</div>
	</center>
</section>
<!-- Texto abaixo -->
<section>
	<div class="container" id="texto-video">

		<p id="texto-video-paragrafo">
		Telangiectasias são vasos muito finos na superfície da pele e que justamente por isso acabam sendo conhecidos como microvasos ou vasinhos. Representam um problema estético, já que não costumam apresentar sintomas. Esses vasos se localizam principalmente nas pálpebras, nariz e bochechas
		</p>

		<p id="texto-video-paragrafo">
		Ocorrem muitas vezes pelo tipo de pele (geralmente peles muito clara) descendentes de europeus. Outras vezes aparecem pelo afinamento da pele (epiderme) que aparece com a idade.
		</p>

		<p id="texto-video-paragrafo">
		Quando associada a processos inflamatórios dos vasos podem configurar o diagnóstico de Rosácea. Esta surge principalmente em mulheres apesar de acometer também o sexo masculino. 
		</p>

	</div>	
	<br><br><br>
</section>

<section>
	<center>
	<div class="container-fluid" id="titulo-tipo-tratamento">
		<h3 id="titulo-tipo-tratamento-conteudo">Técnicas de tratamento</h3>
	</div>
	</center>

	<div class="container" id="texto-video">
		<ul style="margin-top: 10px">
			<li>Laser Nd:YAG</li>
			<li>Luz pulsada</li>
			<li>Laser Nd Yag + Erbium Yag</li>
			<li>d Yag Q swhiched</li>
		</ul>
	</div>
</section>

<br><br><br>


<!-- FOOTER - FIXO-->
<!-- CSS EM css/geral.css -->
<?php include 'views/footer.php'?>

</body>
</html>
<!-- FUNCOES -->
 

