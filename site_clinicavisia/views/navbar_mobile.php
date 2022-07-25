<style>
/* MENU INICIO */
#menu_mobile{
  margin-top: 0px;
	background-color: #153650;
	position:fixed;
  width: 100%;
	z-index:90;
  left:0px;
  border-radius: 0px;
}

#link-menu_mobile{
  color: white;
  font-size: 10px;
  font-family: 'NunitoSans-SemiBold';
}
#logo_menu_mobile{
  margin-top: -10px;
}

#pesquisar_campo_mobile{
  height: 25px; 
  width: 100%;
  margin-top: 4px;
}
#pesquisar_btn_mobile{
  height: 25px; 
  margin-top: 4px;
}
/* MENU FIM */
</style>


<!-- MENU INICIO-->
<nav id="menu_mobile" class="navbar navbar-expand-lg navbar-light"> 
  <a class="navbar-brand" href="index.php">
    <img src='img/logo_menu.png' id="logo_menu_mobile" alt='Logotipo Clinica Visia' title='Página Principal'>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmobile" aria-controls="navbarmobile" aria-expanded="false" aria-label="Toggle navigation"  style="background-color: #ceb166; margin-top: 5px">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarmobile" style="margin-top: 50px"> 
    <ul class="navbar-nav mr-auto">
      <li class="nav-item_mobile active">
        <a id="link-menu_mobile" class="nav-link" href="index.php">INÍCIO</a>
      </li>
      <li class="nav-item_mobile">
        <a id="link-menu_mobile" class="nav-link" href="tratamentos.php">TRATAMENTOS</a>
      </li>
      <li class="nav-item_mobile">
        <a id="link-menu_mobile" class="nav-link" href="sobrenos.php">SOBRE NÓS</a>
      </li>
      <li class="nav-item_mobile">
        <a id="link-menu_mobile" class="nav-link" href="index.php#corpo-medico">CORPO MÉDICO</a>
      </li>
      <li class="nav-item_mobile">
        <a id="link-menu_mobile" class="nav-link" href="blog.php">BLOG</a>
      </li>
      <li class="nav-item_mobile">
        <a id="link-menu_mobile" class="nav-link" href="index.php#footer">CONTATOS</a>
      </li>
    </ul>

    <form class="navbar-form navbar-left">
      <div class="input-group" style="width: 90%; height: 10px">
        <div class="gcse-searchbox-only"></div>
      </div>
    </form>

  </div>
</nav>


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
      $("#cabecalho_mobile").css({
         "display": "none",
         "top": $(window).scrollTop()+5+"px"
      });
      // ignora mobile
      if( $(window).width() > 800){
      $("#menu_mobile").css({
         "margin-top": "-5px",
      });
      }
   }else{
     // ignora mobile
    if( $(window).width() > 800){
      $("#cabecalho_mobile").css({
        "display": "block",
         "top": "0px"
      });
      $("#menu_mobile").css({
         "margin-top": "0px",
      });
    }
   }
  
});
</script>