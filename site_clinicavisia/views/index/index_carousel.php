
<!--  INDEX / CAROUSEL  -->
<!-- CSS EM > css\index\carousel_estilo.css -->
<style>
  @charset "UTF-8";
/* CAROUSEL - INICIO*/
#fundocarousel{
  background-color: #ECECEC;
  width: 100%; 
  height: 350px;
}
#myCarousel{
  height: 100%; 
  width: 100%; 
  margin-top: -300px;
}
#item-carousel{
  height: 100%; 
  width: 100%;
}

/* CAROUSEL - FIM */


/*#####################################################################################################################################
																 CONFIGS PARA MOBILE
########################################################################################################################################*/
/* MOBILE*/
@media only screen and (max-width: 800px){
  /* CAROUSEL - INICIO*/
  #fundocarousel{
    height: 200px;
  }
  #myCarousel{
    height: 190px; 
    width: 100%; 
    margin-top: -100px;
  }
  /* CAROUSEL - FIM */
  
}
</style>

<section id="section-carousel">
<div id="fundocarousel"></div>

<div class="container"> 
<center>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" id="item-carousel">
        <a href="tratamentos.php" target="_blank" style="text-decoration:none;">
          <img src="img/carousel/banner1.jpg" style="width: 100%;">
        </a>
      </div>

      <div class="item" id="item-carousel">
        <a href="tratamentos.php" target="_blank" style="text-decoration:none;">
          <img src="img/carousel/banner2.jpg" style="width: 100%;">
        </a>
      </div>
    
      <div class="item" id="item-carousel">
        <a href="tratamentos.php" target="_blank" style="text-decoration:none;">
          <img src="img/carousel/banner3.jpg" style="width: 100%;">
        </a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</center>
</div>
</section>
<!-- CAROUSEL - INDEX - FIM -->
