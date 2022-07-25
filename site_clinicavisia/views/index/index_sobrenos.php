
<style>
.carousel-3d-container figure {
  margin: 0;
}

.carousel-3d-container figcaption {
  position: absolute;
  background-color: rgba(0, 0, 0, 0.0);
  color: #fff;
  bottom: 0;
  position: absolute;
  bottom: 0;
  padding: 15px;
  font-size: 12px;
  /*min-width: 100%;*/
  box-sizing: border-box;
}
</style>


<!-- INDEX - SOBRE NÓS-->
<!-- CSS EM - css\index\sobrenos_estilo.css-->
<section id="sobrenos">
<div class="container">
<center>
  <div id="campo-sobrenos" style="width:100%;">
    <div class="row-md" id="titulo_sobrenos">
      <h1 id="titulo">Sobre nós</h1>
      <hr id="linha">
    </div>

    <div id="example">

    <carousel-3d :controls-visible="true" :controls-prev-html="'&#10092; '" :controls-next-html="'&#10093;'" :controls-width="20" :controls-height="60" :clickable="false">
      
      <slide v-for="(slide, i) in slides" :index="0">
        <figure>
          <img src="img\carousel_3d\1.jpg">
        </figure>
      </slide>

      <slide v-for="(slide, i) in slides" :index="1">
        <figure>
          <img src="img\carousel_3d\2.jpg">
        </figure>
      </slide>

      <slide v-for="(slide, i) in slides" :index="2">
        <figure>
          <img src="img\carousel_3d\3.jpg">
        </figure>
      </slide>

      <slide v-for="(slide, i) in slides" :index="3">
        <figure>
          <img src="img\carousel_3d\4.jpg">
        </figure>
      </slide>

      <slide v-for="(slide, i) in slides" :index="4">
        <figure>
          <img src="img\carousel_3d\5.jpg">
        </figure>
      </slide>

      <slide v-for="(slide, i) in slides" :index="5">
          <img src="img\carousel_3d\6.jpg">
        </figure>
      </slide>

      <slide v-for="(slide, i) in slides" :index="6">
        <figure>
          <img src="img\carousel_3d\7.jpg">
        </figure>
      </slide>

      <slide v-for="(slide, i) in slides" :index="7">
        <figure>
          <img src="img\carousel_3d\8.jpg">
        </figure>
      </slide>

    </carousel-3d>
    </div>


<!-- ajustes tamanho dos slides - procurar por width ou height-->
<script src="funcoes\carousel_3d\carousel-3d.umd.js"></script>
<script src="funcoes\carousel_3d\vue.js"></script>


<script>
new Vue({
  el: '#example',
  data: {
    slides: 1
  },
  components: {
    'carousel-3d': window['carousel-3d'].Carousel3d,
    'slide': window['carousel-3d'].Slide
  }
})
</script>




  <div id="texto-sobrenos">
    <p>
    >&nbsp;A Clínica Visia, agora em novo endereço, está situada em um dos mais importantes 
    pólos comerciais de São Paulo próximos a Av Luis Carlos Berrini , em frente ao Shopping 
    Vila Olimpia e à 500 m do Shopping JK Iguatemi; nela encontramos qualidade em serviços 
    médicos e bem estar. Ambiente confortável, elegante e seguro, fácil de estacionar 
    enquanto realiza seus tratamentos.
    </p>
    <p>
    >&nbsp;Contamos com um corpo clínico qualificado com médicos dermatologistas, tricologistas, 
    médicos do esporte, medicina ortomolecular, enfermeiros, fisioterapeutas e que estão em constante aprimoramento 
    e verdadeiramente comprometidos com o melhor resultado para nossos pacientes. Uma equipe de atendimento está 
    preparada para lhe acolher com rapidez e máxima cortesia que você merece.
    </p>
    <p>
    >&nbsp;A Clínica Visia se empenha para que você se veja e sinta de maneira singular e especial.
    </p>
    <p>
    >&nbsp;Nossos tratamentos irão fortalecer sua autoestima e dar confiança que lhe ajudará a ser a pessoa melhor, e feliz.
    </p>
  </div>

</center>
<div>
<br><br>
</section>