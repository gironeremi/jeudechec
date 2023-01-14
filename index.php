<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu d'échec</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  <body>
    <section>
        <h1>Bienvenue aux échecs!</h1>  
        <h2>Test avec des Div et un Grid</h2>
    </section>
    <div id="chessboard2">
      <div class="row">
        <div class="square white"><img src="public/media/chess-pawn-regular.svg"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
      </div>  
      <div class="row">
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
      </div>
      <div class="row">
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
      </div>
      <div class="row">
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
      </div>
      <div class="row">
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
      </div>
      <div class="row">
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
      </div>
      <div class="row">
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
      </div>
      <div class="row">
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
        <div class="square black"></div>
        <div class="square white"></div>
      </div>
    </div>
    <h3>Ici, un canva mais bon...</h3>
    <canvas id="chessboard" width="400" height="400">
    </canvas>
  <script type="text/javascript" src="public/js/canvas.js"></script>
  <script type="text/javascript" src="public/js/main.js"></script>
  </body>
</html>