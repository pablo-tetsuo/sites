<style>
/* Cabeçalho - ínicio */
#cabecalho{
	display: block;
	color: #153650;
  height: 30px;
  font-size: 12px;
}
#endereco-cabecalho{
  font-family: 'NunitoSans-Regular';   
  padding-left: 15%;
  margin-top: 5px;
}
#horario-cabecalho{
  font-family: 'NunitoSans-SemiBold';  
  padding-left: 1%;
  margin-top: 5px;
}
#whatsapp-cabecalho{
  font-family: 'NunitoSans-SemiBold';
  padding-left: 5%;
  margin-top: 5px;
}
#tel-cabecalho{
  font-family: 'NunitoSans-SemiBold';
  padding-left: 5%;
  margin-top: 5px;
}
/* Cabeçalho - Fim */

/* MENU INICIO */
#menu{
	background-color: #153650;
	position:fixed;
  width: 100%;
  height: 50px;
	z-index:90;
  left:0px;
  border-radius: 0px;
  color: white;
}

#link-menu{
  color: white;
  font-size: 10px;
  font-family: 'NunitoSans-SemiBold';
  margin-top: 12px;
  padding: 5px;
  margin-left: 1%;
}
#logo_menu{
  margin-top: -10px;
}

#pesquisar_campo{
  height: 25px; 
  width: 100px; 
  margin-top: 4px;
}
#pesquisar_btn{
  height: 25px; 
  margin-top: 4px;
}
/* MENU FIM */
</style>

<!--   CABEÇALHO            -->
<!--   CSS em css/geral.css -->


<!-- Cabeçalho - ínicio -->
<div id="cabecalho" class="col">
 <label id="endereco-cabecalho">Rua Tenerife, 31. Conj. 101, 10º andar. Vila Olímpia - SP.</label>
 <label id="horario-cabecalho">De Seg. á Sex.: 08:00 - 21:00</label>
 <label id="whatsapp-cabecalho"><i class="fab fa-whatsapp"></i>(11)94792-5785</label>
 <label id="tel-cabecalho"><i class="fas fa-phone-alt"></i>(11)3729-0300</label>
</div>
<!-- Cabeçalho - Fim -->

<!-- MENU INICIO-->

<div class="container-fluid" id="menu"> 
  <div class="container">
    <div class="row">

    <div class="col-sm-3" style="margin-top: 15px">
      <a href="index.php">
        <img src='img/logo_menu.png' id="logo_menu" alt='Logotipo Clinica Visia' title='Página Principal'>
      </a>
    </div>
    
    <a id="link-menu" href="index.php">INÍCIO</a>
    <a id="link-menu" href="tratamentos.php">TRATAMENTOS</a>
    <a id="link-menu" href="sobrenos.php">SOBRE NÓS</a>
    <a id="link-menu" href="index.php#corpo-medico">CORPO MÉDICO</a>
    <a id="link-menu" href="blog.php">BLOG</a>
    <a id="link-menu" href="index.php#footer">CONTATOS</a>
    
    <div class="col-md-3" style="margin-top: 10px; height: 2px; color:black">
      <div class="gcse-searchbox-only"></div>
    </div>

    </div>

  </div>
</div>


<script async src="https://cse.google.com/cse.js?cx=f98550aae21bdacd2"></script>  
<!-- MENU FINAL--> 
<script>
//função para minimizar o menu no mobile
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});
</script>


<!-- Função para não mostrar o cabeçalho-->
<script type="text/javascript">
$(window).on("scroll", function(){
   if($(window).scrollTop() > 0.5){
      $("#cabecalho").css({
         "display": "none",
         "top": $(window).scrollTop()+5+"px"
      });
      // ignora mobile
      if( $(window).width() > 800){
      $("#menu").css({
         "margin-top": "-5px",
      });
      }
   }else{
     // ignora mobile
    if( $(window).width() > 800){
      $("#cabecalho").css({
        "display": "block",
         "top": "0px"
      });
      $("#menu").css({
         "margin-top": "0px",
      });
    }
   }
  
});
</script>