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
    <div id="chessboard">
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
    <?php
      $chessboard = array();
      $letter = 'a';
      $number = 1;
      for ($i = 0; $i < 64; $i++) {
        $chessboard[$letter.$number] = array();
          if ($number == 8) {
              $letter++;
              $number = 1;
          } else {
              $number++;
          }
      }
      $chessboard["a2"][0] = "pion";
      $chessboard["b2"][0] = "pion";
      $chessboard["a1"][0] = "Tour";
      ?>
      <pre><?php var_dump($chessboard) ?></pre>
  <script type="text/javascript" src="public/js/canvas.js"></script>
  <script type="text/javascript" src="public/js/main.js"></script>
  </body>
</html>