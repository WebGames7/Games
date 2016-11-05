<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head lang="pt-br">
        <title>Web Games</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Um site de Jogos que disponibiliza pra você um programa de baixar jogos via torrent.">
        <meta name="keywords" content="jogos potentes, games 2016, como baixar jogos 2016, melhores jogos, programa para baixar jogos">
        <meta name="robots" content="index,follow">
        
        <link rel="icon" href="ativos/img/icon.png">
        <link rel="stylesheet" href="ativos/css/style.css">
        <link href="ativos/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="ativos/fonts/glyphicons-halflings-regular.svg">
        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <script src="ativos/js/bootstrap.js"></script>
        <script src="ativos/js/bootstrap.min.js"></script>
       
        
    </head>
    <body>
        <header class="inicio bgd">
            <a href="index.html"><h1 class="logo">Jogos Potentes</h1></a>
            <button class="btn-menu"><i class="fa fa-bars fa-lg" title="Menu"></i></button>
            <nav class="menu">
                <a href="#" class="btn-close"><p class="fa fa-times-circle"></p></a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="pages/downloads.php">Downloads</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav> 
        </header>
      <!--Primeira Imagem-->
        <div class="banner">
            <div class="btn-login">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Login
        </button>
        <div class="collapse" id="collapseExample">
          <div class="well">
              <div class="login">
                  <input type="text" name="login" placeholder="EMAIL">
              </div>
              <div class="login">
                  <input type="password" name="senha" placeholder="SENHA">
              </div>
              <div class="btn-ir">
                  <button>Entrar</button>
              </div>
          </div>
        </div>
            </div>
            <div class="lancamento">
                <h3><i class="fa fa-gamepad"></i> LANÇAMENTOS</h3>
                <div class="videos">
                    <iframe  src="https://www.youtube.com/embed/nlW175pnJjI" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videos">
                    <iframe  src="https://www.youtube.com/embed/7bAyciSC5xc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            
        </div>
      <div class="banner-um">
          <div class="cadastro">
              <h2>Cadastre-se</h2>
              <form action="#" method="post">
                  <input type="text" name="nome" placeholder="NOME">
                  <input type="text" name="email" placeholder="EMAIL">
                  <input type="password" name="senha" placeholder="SENHA">
                  <input type="password" name="senha" placeholder="REPETIR SENHA">
                  <button> cadastrar</button>
              </form>
          </div>
          <div class="rede-social">
              <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </div>
      </div>
        
        <!--rodapé-->
        <footer class="rodape bgd">
            <p>&COPY; Copyright WEB GAMES - Todos os direitos reservados.</p>
        </footer>
        <script src="http://code.jquery.com/jquery-3.1.0.min.js"></script> 
        <script>
            //abrir menu //
            $(".btn-menu").click(function(){
                $(".menu").show();
            });
            //feixar menu //
            $(".btn-close").click(function(){
                $(".menu").hide();
            });
            
            
        </script>
    </body>
</html>
