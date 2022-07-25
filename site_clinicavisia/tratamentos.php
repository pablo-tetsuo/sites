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
	<link rel="stylesheet" href="css/tratamentos/tratamentos.css">

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
      <div id="titulo_intro">Tratamentos</div>
	  <hr id="linha_intro">
	</div>
	<center>
</div>
</section>

<br><br>

<section id="trat-capilares">
	<center>
	<div class="container-fluid" id="titulo-tipo-tratamento">
		<h3 id="titulo-tipo-tratamento-conteudo">Transplantes e Tratamentos capilares</h3>
	</div>
	</center>

	<div class="container-fluid" id="trat-categoria">
		<div class="row">
			<div id="trat-categoria-titulo">Transplantes Capilares</div>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/capilar.png" class="img-fluid" id="img-tratamentos" alt="Capilar">
					<h4 id="titulo_btn_trat">Capilar</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Técnica FUE</h4>
					<a href="capilar.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/barba.png" class="img-fluid" id="img-tratamentos" alt="Barba">
					<h4 id="titulo_btn_trat">Barba</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Técnica FUE</h4>
					<a href="tratamentos_capilar.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/sobrancelha.png" class="img-fluid" id="img-tratamentos" alt="Sobrancelha">
					<h4 id="titulo_btn_trat">Sobrancelha</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Técnica FUE</h4>
					<a href="tratamentos_capilar.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col-vazio">
		</div>

		<div class="row">
			<div id="trat-categoria-titulo">Tratamentos Capilares</div>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/queda capilar.png" class="img-fluid" id="img-tratamentos" alt="Queda capilar">
					<h4 id="titulo_btn_trat">Queda capilar</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos contra queda capilar</h4>
					<a href="queda_capilar.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>


	</div>
</section>

<section id="trat-corporais">
	<center>
	<div class="container-fluid" id="titulo-tipo-tratamento">
		<h3 id="titulo-tipo-tratamento-conteudo">Tratamentos Corporais</h3>
	</div>
	</center>

	<div class="container-fluid" id="trat-categoria">

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/celulite.png" class="img-fluid" id="img-tratamentos" alt="Celulite">
					<h4 id="titulo_btn_trat">Celulite</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para celulite</h4>
					<a href="celulite.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/cicatriz.png" class="img-fluid" id="img-tratamentos" alt="Cicatriz">
					<h4 id="titulo_btn_trat">Cicatriz</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para cicatrizes</h4>
					<a href="cicatriz.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/estrias.png" class="img-fluid" id="img-tratamentos" alt="Estrias">
					<h4 id="titulo_btn_trat">Estrias</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para estrias</h4>
					<a href="estrias.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/gordura localizada.png" class="img-fluid" id="img-tratamentos" alt="Gordura localizada">
					<h4 id="titulo_btn_trat">Gordura localizada</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para gordura localizada</h4>
					<a href="gordura_localizada.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/hiperidrose.png" class="img-fluid" id="img-tratamentos" alt="Hiperidrose">
					<h4 id="titulo_btn_trat">Hiperidrose</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para hiperidrose</h4>
					<a href="hiperidrose.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/remoção tatuagem.png" class="img-fluid" id="img-tratamentos" alt="Remoção de tatuagem">
					<h4 id="titulo_btn_trat">Remoção de tatuagem</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Remoção de tatuagem</h4>
					<a href="remocao_tatuagem.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/hipertrofia.png" class="img-fluid" id="img-tratamentos" alt="Hipertofia muscular">
					<h4 id="titulo_btn_trat">Hipertrofia muscular</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Fortalecimento muscular</h4>
					<a href="hipertrofia_muscular.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

	</div>
</section>

<section id="trat-faciais">
	<center>
	<div class="container-fluid" id="titulo-tipo-tratamento">
		<h3 id="titulo-tipo-tratamento-conteudo">Tratamentos e Cirurgias Faciais</h3>
	</div>
	</center>

	<div class="container-fluid" id="trat-categoria">
		<div class="row">
			<div id="trat-categoria-titulo">Tratamentos Faciais</div>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/acne.png" class="img-fluid" id="img-tratamentos" alt="Acne">
					<h4 id="titulo_btn_trat">Acne</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para acne</h4>
					<a href="acne.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/harmonizacao.png" class="img-fluid" id="img-tratamentos" alt="Harmonização Facial">
					<h4 id="titulo_btn_trat">Harmonização Facial</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Reposição volumétrica</h4>
					<a href="harmonizacao_facial.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/olheiras.png" class="img-fluid" id="img-tratamentos" alt="Olheiras">
					<h4 id="titulo_btn_trat">Olheiras</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para olheiras</h4>
					<a href="olheiras.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/rugas.png" class="img-fluid" id="img-tratamentos" alt="Rugas">
					<h4 id="titulo_btn_trat">Rugas</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Toxina Botulínica</h4>
					<a href="rugas.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/poilorquidermia.png" class="img-fluid" id="img-tratamentos" alt="Poiquilodermia">
					<h4 id="titulo_btn_trat">Poiquilodermia</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para poiquilodermia</h4>
					<a href="olheiras.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/flacidez.png" class="img-fluid" id="img-tratamentos" alt="Flacidez">
					<h4 id="titulo_btn_trat">Flacidez</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para flacidez</h4>
					<a href="flacidez.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/rejuvenescimento-8.png" class="img-fluid" id="img-tratamentos" alt="Rejuvenescimento">
					<h4 id="titulo_btn_trat">Rejuvenescimento</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Rejuvenescimento</h4>
					<a href="rejuvenescimento.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/manchas.png" class="img-fluid" id="img-tratamentos" alt="Manchas de pele">
					<h4 id="titulo_btn_trat">Manchas de pele</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Tratamentos para Melasma</h4>
					<a href="manchas_de_pele.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/vasos_faciais.png" class="img-fluid" id="img-tratamentos" alt="Vasos Faciais">
					<h4 id="titulo_btn_trat">Vasos Faciais</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Rosácea e Telangectasias</h4>
					<a href="vasos_faciais.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/rugas_estaticas.png" class="img-fluid" id="img-tratamentos" alt="Preenchimentos">
					<h4 id="titulo_btn_trat">Preenchimentos</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Rugas Estáticas</h4>
					<a href="preenchimentos.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col-vazio">
		</div>

		<div class="col-md-3" id="tratamentos-col-vazio">
		</div>

		<div class="row">
			<div id="trat-categoria-titulo">Cirurgias faciais</div>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/bichectomia.png" class="img-fluid" id="img-tratamentos" alt="Bichectomia">
					<h4 id="titulo_btn_trat">Bichectomia</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Cirurgia de Bichectomia</h4>
					<a href="bichectomia.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/blefaroplastia.png" class="img-fluid" id="img-tratamentos" alt="Blefaroplastia">
					<h4 id="titulo_btn_trat">Blefaroplastia</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Cirurgia de Blefaroplastia</h4>
					<a href="blefaroplastia.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/castanhares.png" class="img-fluid" id="img-tratamentos" alt="Castañares">
					<h4 id="titulo_btn_trat">Castañares</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Cirurgia de Castañares</h4>
					<a href="castanares.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/fio_de_sustentacao.png" class="img-fluid" id="img-tratamentos" alt="Fio de Sustentação">
					<h4 id="titulo_btn_trat">Fio de Sustentação</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">PDO e Ácido L-Poliático</h4>
					<a href="fio_de_sustentacao.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/lifting.png" class="img-fluid" id="img-tratamentos" alt="Lifting facial">
					<h4 id="titulo_btn_trat">Lifting facial</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Cirurgia para Lifting facial</h4>
					<a href="lifting_facial.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/retirada-de-lesao.png" class="img-fluid" id="img-tratamentos" alt="Retirada de Lesões">
					<h4 id="titulo_btn_trat">Retirada de Lesões</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Câncer de pele, Verrugas</h4>
					<a href="retirada_lesoes.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/lipo_de_papada.png" class="img-fluid" id="img-tratamentos" alt="Lipo de Papada">
					<h4 id="titulo_btn_trat">Lipo de Papada</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Lipoaspiraçãao de gordura</h4>
					<a href="lipo_papada.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		<div class="col-md-3" id="tratamentos-col">
			<center>
			<div id="campo-tratamentos">
				<div id="campo-tratamentos-conteudo">
					<img src="img/tratamentos/lobuloplastia.png" class="img-fluid" id="img-tratamentos" alt="Lóbuloplastia">
					<h4 id="titulo_btn_trat">Lóbuloplastia</h4>
					<hr id="linha_tratamentos">
					<h4 id="subtitulo_btn_trat">Correção de Orelhas</h4>
					<a href="lobuloplastia.php" target="_blank" style="text-decoration:none;">
						<div id="btn_saibamais">SAIBA MAIS</div>
					</a>
					<br>
				</div>
			</div>
			</center>
		</div>

		
	</div>
</section>


<!-- FOOTER - FIXO-->
<!-- CSS EM css/geral.css -->
<?php include 'views/footer.php'?>

</body>
</html>
<!-- FUNCOES -->
 

<!-- WHATSAPP - FIXO -->
<?php include 'funcoes/whatapp_funcoes.php'?>