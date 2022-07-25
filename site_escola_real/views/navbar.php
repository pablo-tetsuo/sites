
<style>
  nav#menu{
    background-color: #fff;
    box-shadow: 0px 0px 10px rgb(113, 180, 201);
    position:fixed;
    top:-2px;
    left:0px;
    width: 100%;
    z-index:99;
    }

#link-menu{
    color: black;
    font-size: 15px;
}
#contato-menu{
    color: black;
    font-size: 12px;
}
#item-menu:hover{
    background-image: linear-gradient(white 95%, black 5%);
}
#whats-menu{
    text-decoration: none;
    color:#333a3d;
}
#whats-menu:hover{
    color: red;
} 
#icone-whats{
  color: green;
}
#icone-whats:hover{
  color: #00fc19;
}


/* Efeito para dos sub-menus */
#item-menu:hover #submenu { display: block; }
	#submenu {
		display: none;
		position: absolute;
	}
	#submenu li {
        float: none; 
    }

/* configuração para mobile */
@media only screen and (max-width: 800px){
    #submenu{
        display: block;
        position: relative;
    }
  }
/* Menu - Final */

</style>


<section id="menu">
    <nav id="menu" class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php">
        <img src='img/logo.png' alt='Logotipo Escola Real' title='Página Principal' style='height: 80px; margin-left:5%'>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left: 10px;">
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="index.php" id='link-menu'>Home</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="index.php#cursos" id='link-menu'>Cursos</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="index.php#sobre" id='link-menu'>Quem Somos</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="index.php#proposta" id='link-menu'>Proposta<br> Pedagógica</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="matricula.php" id='link-menu'>Matricule-se</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="contato.php" id='link-menu'>Contato</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="trabalhe.php" id='link-menu'>Trabalhe Conosco</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="login.php" id='link-menu'>Apoio aos Pais</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="professor.php" id='link-menu'>Área do Professor</a>
          </li>

        </ul>
        <span class="navbar-text" id="contato-menu">
    <!-- <a href="https://api.whatsapp.com/send?phone=5511940287159" id="whats-menu" target="_blank">
    Contate-nos via Whatsapp <i class="fab fa-whatsapp-square fa-2x" id='icone-whats'></i></a><br>
    <div style="font-size: 13px;"><i class="fas fa-phone-alt"></i>WhatsApp: (11)94028-7159<br> -->
    <i class="fas fa-at"></i> Email: escolareal.abc@hotmail.com<br>
    <i class="fas fa-phone-alt"></i>Telefone: (11) 2063-8380</div>
    </span>
      </div>
    </nav>
</section>