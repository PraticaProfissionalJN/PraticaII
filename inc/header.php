<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>css/estilos.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="cadastro.html">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Bom Cuidado</title>
  </head>
  <body>

    <!--Menu Inicial -->
    <nav>
      <nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark"> 
        <a class="navbar-brand" href="#"><strong>Bem Cuidar</strong></i></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label=" Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <div class="container">
                  <div class="row">
                    <h1 class="text-center"><a href="#myModal" id="home" role="button" class="btn btn-dark btn-lg" ><i class="fas fa-home"></i> Home</a></h1>
                  </div>
              </div>
          </li>
        <li class="nav-item">
            <div class="container">
                <div class="row">
                  <h1 class="text-center"><a href="#myModal" id="quemsomos" role="button" class="btn btn-dark btn-lg" ><i class="fas fa-users"></i> Quem somos</a></h1>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="container">
                <div class="row">
                  <h1 class="text-center"><a href="#myModal" id="profissionais" role="button" class="btn btn-dark btn-lg" ><i class="fab fa-black-tie"></i> Profissionais</a></h1>
                </div>
              </div>
            </li>
            <li class="nav-item">
            <div class="container">    
              <h1 class="text-center"><a href="#myModal" id="faleconosco" role="button" class="btn btn-dark btn-lg" data-toggle="modal"><i class="far fa-envelope"></i> Fale Conosco</a></h1>
           </div>
           </li>
           <li class="nav-item">
              <div class="container">    
                <h1 class="text-center"><a href="#myModal" id="faleconosco" role="button" data-target="#SignInModal" class="btn btn-secondary btn-lg" data-toggle="modal"> <i class="far fa-user"></i> Entre ou Cadastre-se</a></h1>
             </div>
             </li>
          </ul>
        </div>
      </nav>
    </nav>

    <div class="modal fade brandmodal" id="SignInModal" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"></button>
            <h4 class="modal-title"><img src="img/logo.png" class="img-fluid" class="modal-logo text-center" /></h4>
          </div>
          <div class="modal-body text-center">    
          <form action="" method="POST" autocomplete="off">
            <h5><i class="fa fa-lock"></i> <strong>Login</strong></h5>
            <div class="modalform-group">
            <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-envelope"></i> </span>
            <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required="" />
            </div>
            <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-key"></i> </span>
            <input type="password" name="password"  class="form-control" placeholder="Digite sua senha"  required="" />
            </div>
            <div class="senha">
            <span class=""><a href="#" class="btn btn-default btn-sm"><i title="Forgot Password ?" class="fa fa-1x fa-question-circle"></i> Esqueci a senha </a></span>
          </div>
           </div>
           <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-sign-in-alt"></i> <strong>Entre</strong> </button>
            </div>
            <br>
            <p class="pull-right"> <a href="cadastro.html" class="btn btn-warning btn-md"><strong>Cadastre-se</strong> <i class="fas fa-pencil-alt"></i></a></p>
           </form> 
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Fale Conosco-->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" id="cabeçalho_faleconosco">
            <h4 class="modal-title"> <img src="img/logo.png" class="modal-logo" id="logofaleconosco" /></h4>
            <h3 id="frasefaleconosco"> Queremos ouvir você!</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal col-sm-12">
              <div class="form-group"><label>Nome</label><input class="form-control required" placeholder="Seu nome" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
              <div class="form-group"><label>E-Mail</label><input class="form-control email" placeholder="Digite seu e-mail para entrarmos em contato" data-placement="top" data-trigger="manual" data-content="Deve ser um endereço de e-mail válido (user@gmail.com)" type="text"></div>
              <div class="form-group"><label>Fone</label><input class="form-control phone" placeholder="(xx) 99999-9999" data-placement="top" data-trigger="manual" data-content="Deve ser um número de telefone válido. Ex: (xx) 99999-9999)" type="text"></div>
              <label>Assunto</label>
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option value="1">Dúvida</option>
                  <option value="2">Críticas</option>
                  <option value="3">Sugestões</option>
                </select>
              <div class="form-group"><label>Mensagem</label><textarea class="form-control" placeholder="Digite sua mensagem aqui..." data-placement="top" data-trigger="manual"></textarea></div>
              <button class="btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
              <div class="form-groupo"><button type="submit" class="btn btn-success pull-right">Envie!</button> <p class="help-block pull-left text-danger hide" id="form-error">  </p></div>
            </form>
          </div>
        </div>
      </div>
    </div>
