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
      <div id="titulo_intro">Hipertrofia</div>
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
		<h3 id="titulo-tipo-tratamento-conteudo">Hipertrofia e Fortalecimento Muscular</h3>
	</div>
	</center>

	<div id="video-capilar-fundo">&nbsp;</div>
	<center>
	<div class="container" id="video-capilar">
		<iframe width="100%" height="315" src="https://youtu.be/niNbRhMgJP8" frameborder="0" 
		allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
		</iframe>
	</div>
	</center>
</section>
<!-- Texto abaixo -->
<section>
	<div class="container" id="texto-video">
		<p id="texto-video-paragrafo">
		Se no seu dia a dia você busca definir e potencializar seus músculos, a Clínica Visia pode te ajudar com seus objetivos. 
		Com a nova tecnologia de Estimulação Magnética Funcional (FMS) é possível ativar nervos motores que normalmente não seriam bem trabalhados apenas com exercício físico.
		</p>

		<p id="texto-video-paragrafo">
		O Tesla Former utiliza a energia magnética para construir músculos de forma não invasiva nas partes do corpo que você deseja moldar.
		</p>

		<p id="texto-video-paragrafo">
		O TESLA Former é um equipamento preciso, focado e efetivo de atuação direta nos músculos. Sua tecnologia exclusiva FMS gera um campo magnético que é propagado para dentro do corpo, mesmo através das roupas.
		</p>

		<p id="texto-video-paragrafo">
		O equipamento excita os nervos motores induzindo a intensas e repetidas contrações musculares involuntárias, dando a sensação de um exercício de alta intensidade realizado na academia
		ao realizar a contração involuntária, o Tesla Former auxilia o ganho muscular, além de aumentar o metabolismo na área aplicada, resultando na consequente perda de gordura na região.
		</p>

	</div>	
	<br><br><br>
</section>

<section>
	<center>
	<div class="container-fluid" id="titulo-tipo-tratamento">
		<h3 id="titulo-tipo-tratamento-conteudo">Tratamento para dores na lombar</h3>
	</div>
	</center>

	<div class="col-md-12">
		<br>
		<center>
		<img src="img/tratamentos/hipertrofia_muscular/tesla.jpg" class="img-fluid">
		</center>
		<br>
	</div>

	<div class="container" id="texto-video">
		<p id="texto-video-paragrafo">
		Os tratamentos para esta região são indolores e eﬁcazes para fortalecimento da musculatura e até melhora da postura.
		</p>

		<p id="texto-video-paragrafo">
		Os músculos são estimulados durante o tratamento levando a uma aceleração da circulação, diminuindo a dor e fortiﬁcando a região.
		</p>
	</div>
	<br><br><br>
</section>

<br><br><br>


<!-- FOOTER - FIXO-->
<!-- CSS EM css/geral.css -->
<?php include 'views/footer.php'?>

</body>
</html>
<!-- FUNCOES -->
 

