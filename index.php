<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>


<?php include(HEADER_TEMPLATE); ?>

    <!--Carossel -->
  <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/slider2.png" alt="Second slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  </div> 
  <!-- Como funciona-->
  <div class="notice notice-danger">
    <strong><h3>Conheça como funciona:</h3></strong>
</div>
  <!--Beneficios -->
  <div class="container">
    <div id="motivos" class="beneficios">
        <div class="row">
            <div class="col-md-3 text-center">
              <img src="img/user.jpg" class="img-fluid" id="beneficios" alt="Imagem Responsiva">
                <h4><strong>Cadastre-se</strong></h4>
                <h5>Crie um usuário e senha para acesso ao ambiente.</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="img/lupa.jpg" class="img-fluid" id="beneficios" alt="Imagem Responsiva">
                <h4><strong>Busque o profissional</strong></h4>
                <h5>Os profissionais descrevem por completo suas experiências.</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="img/profissional.png" class="img-fluid" id="beneficios" alt="Imagem Responsiva">
                <h4><strong>Analise os profissionais</strong></h4>
                <h5>Analise os perfis, avaliações e comentários. Em seguida, escolha o profissional que melhor lhe atende.</h5>
            </div>
            <div class="col-md-3 text-center">
              <img src="img/avaliar.jpg" class="img-fluid" id="beneficios" alt="Imagem Responsiva">
              <h4><strong>Avalie</strong></h4>
              <h5>Avalie e comente sobre o serviço prestado. É muito importante para nós e outros usuários.</h5>
          </div>
       </div>  
       <br>
       <br>
       <!-- Linha transparente-->
       <hr class="featurette-divider">
       <br>
       <br>
       <div class="row featurette">
          <div class="col-md-7">
            <h1 class="featurette-heading">Identifique o profissional ideal <span class="text-muted">para sua necessidade.</span></h1>
            <p class="lead">O ambiente do Cuidar bem, possibilita que vários profissionais da área possam oferecer seus serviços. Eles descrevem suas experiências, cursos, especialidades, área de atuação, etc.</p>
          </div>
          <div class="col-md-5 text-center" id="imagem_quadro1">
              <img src="img/cuidador.jpg" class="img-fluid" alt="Responsive image">
          </div>
        </div>
        <br>
        <br>
        <hr class="featurette-divider">
        <!-- Fotos
        <div class="container">
            <div id="sobrenos" class="sobre-nos">
              <div class="row">
                <div class="col-md-12">
                  <h3>As mentes por trás do Bom Cuidado:</h3>
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="img/foto.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Adson Sobral</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/foto.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Antonio Carlos</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/foto.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Fábio Lins</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
              <div class="card">
                  <img class="card-img-top" src="img/foto.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">José Roberto</h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/foto.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Kelvin Lucas</h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div>
            </div>
            -->
  <!--Modal Login-->
<?php include(FOOTER_TEMPLATE); ?>

