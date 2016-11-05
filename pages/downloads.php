<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head lang="pt-br">
        <title>Downloads</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Um site de Jogos que disponibiliza pra você um programa de baixar jogos via torrent.">
        <meta name="keywords" content="jogos potentes, games 2016, como baixar jogos 2016, melhores jogos, programa para baixar jogos">
        <meta name="robots" content="index,follow">
        
        <link rel="icon" href="../ativos/img/icon.png">
        <link rel="stylesheet" href="../ativos/css/style.css">
        <link href="../ativos/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../ativos/fonts/glyphicons-halflings-regular.svg">
        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
        
        <script src="../ativos/js/bootstrap.js"></script>
        <script src="../ativos/js/jquery-3.1.1.min.js"></script>
        <style type="text/css">
            div.c{
                border: solid 1px crimson;
                margin-bottom: 10px;

            }
        </style>
        
    </head>
    <body>
        <header class="inicio bgd">
            <a href="index.html"><h1 class="logo">Jogos Potentes</h1></a>
            <button class="btn-menu"><i class="fa fa-bars fa-lg" title="Menu"></i></button>
            <nav class="menu">
                <a href="#" class="btn-close"><p class="fa fa-times-circle"></p></a>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="../pages/downloads.php">Downloads</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav> 
        </header>
        <div class="banner">
            <div class="grid-dw">
              <h2>Melhores Jogos para PC</h2>
                <div id="test"><a href="#"><img src="../ativos/img/img-pager/1.jpg"></a></div>
                <div class="c"><a href="#"><img src="../ativos/img/img-pager/1.jpg"></a></div>
                <div class="c"><a href="#"><img src="../ativos/img/img-pager/1.jpg"></a></div>
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
