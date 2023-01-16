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
        <div class="square white"><img src="public/media/chess_pieces/pawn-white.svg"></div>
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
      //création du plateau vide avec les coordonnées
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
      //ajout des pièces 
      $chessboard["a2"] = "pawn-white.svg";
      $chessboard["b2"] = "pawn-white.svg";
      $chessboard["c2"] = "pawn-white.svg";
      $chessboard["d2"] = "pawn-white.svg";
      $chessboard["e2"] = "pawn-white.svg";
      $chessboard["f2"] = "pawn-white.svg";
      $chessboard["g2"] = "pawn-white.svg";
      $chessboard["h2"] = "pawn-white.svg";
      $chessboard["a1"] = "rook-white.svg";
      $chessboard["b1"] = 'knight-white.svg';
      $chessboard["c1"] = 'bishop-white.svg';
      $chessboard["d1"] = 'queen-white.svg';
      $chessboard["e1"] = 'king-white.svg';
      $chessboard["f1"] = 'bishop-white.svg';
      $chessboard["g1"] = 'knight-white.svg';
      $chessboard["h1"] = 'rook-white.svg';
      $chessboard["a7"] = 'pawn-black.svg';
      $chessboard["b7"] = 'pawn-black.svg';
      $chessboard["c7"] = 'pawn-black.svg';
      $chessboard["d7"] = 'pawn-black.svg';
      $chessboard["e7"] = 'pawn-black.svg';
      $chessboard["f7"] = 'pawn-black.svg';
      $chessboard["g7"] = 'pawn-black.svg';
      $chessboard["h7"] = 'pawn-black.svg';
      $chessboard["a8"] = 'rook-black.svg';
      $chessboard["b8"] = 'knight-black.svg';
      $chessboard["c8"] = 'bishop-black.svg';
      $chessboard["d8"] = 'queen-black.svg';
      $chessboard["e8"] = 'king-black.svg';
      $chessboard["f8"] = 'bishop-black.svg';
      $chessboard["g8"] = 'knight-black.svg';
      $chessboard["h8"] = 'rook-black.svg';
      ?>
      <div class="chessboard">
      <?php
        foreach ($chessboard as $cell) {
          ?>
        <div id="" class="square">
        
        <?php
        if (!empty($cell)) {
          ?>
            <img src="public/media/chess_pieces/<?= $cell ?>" />
          <?php
        }
        ?>
        </div>
          <?php
        }
      ?>
      </div>
      <pre><?php var_dump($chessboard) ?></pre>
  <script type="text/javascript" src="public/js/canvas.js"></script>
  <script type="text/javascript" src="public/js/main.js"></script>
  </body>
</html>