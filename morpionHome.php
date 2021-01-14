<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Découverte PHP</title>
    <meta charset="utf-8"> 
    <?php  require("Morpionfunctions.php")?>
</head>

<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Morpion</h1>
    <p class="lead">Nouvelle partie  : </p>
  </div>
</div>
<div class="container-fluid">
<form action="morpionPlay.php" method="post">
    <div class="form-group">
        <p>Joueur 1 <input type="radio" name="player" value="Joueur 1"/></p>
        <p>Joueur 2 <input type="radio" name="player" value="Joueur 2" /></p>
    </div>
    <div class="form-group">
        <label><label for="link">Lien de la salle (à donner au joueur 2)</label></label>
            <?php
                $randomLink = getRandomLink();
                    echo ' <input id="link" type="text" name="roomlink" value= '.$randomLink  ; 
            ?>
        
    </div>
    <p><input class="btn btn-success"type="submit" value="Commencer la partie"></p>
</form>
</div>
</body>

</html>