<?php
session_start();
require_once('./class/gameData.php');
require("functions.php"); 

if(!empty($_POST['roomlink'])){
$room = $_POST['roomlink'];
$player = $_POST['player'];
saveSession($room, $player);
}


?>
<!DOCTYPE HTML>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Découverte PHP</title>
    <meta charset="utf-8">
</head>

<body>
<div class=container>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <?php echo " <h2> Vous êtes dans la salle de jeux : <b> ".$_SESSION['room_link'] ."</b> </h2>"?>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <?php echo " <h4>Vous êtes le : Joueur ".$_SESSION['player'] ."</h4>"?>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <?php $auJoueur = getauJoueur();
                echo " <h4>C'est au tour du Joueur ".$auJoueur ."</h4>" 
                ?>
            </div>
        </div>
    </div>
    <?php $grid = getGrid();
        if($_GET['case']){
            if($auJoueur == 1){
                $grid = array(1, 0, 0, 0, 0, 0, 0, 0, 0);
            }elseif($auJoueur == 2){
                $grid = array(2, 0, 0, 0, 0, 0, 0, 0, 0);
            }
        }
    ?>
    <div class="game-board">
        <a case="1"href="?case=1#" class="box"> <?php if ($auJoueur == 1 && $grid[0]==1) echo '<img src="img/cross.png" alt="Croix" >';
                                        elseif ($auJoueur == 2 && $grid[0]==2) echo '<img src="img/circle.png" alt="Circle">';
                                        else echo " "; ?></a>
        <a class="box" href="?case=2#"> <?php if ($_SESSION['grille'][1] == 1) echo '<img src="img/cross.png" alt="Croix">';
                                        elseif ($_SESSION['grille'][1] == 2) echo '<img src="img/circle.png" alt="Circle">';
                                        else echo " "; ?></a>
        <a class="box" href="?case=3#"> <?php if ($_SESSION['grille'][2] == 1) echo '<img src="img/cross.png" alt="Croix">';
                                        elseif ($_SESSION['grille'][2] == 2) echo '<img src="img/circle.png" alt="Circle">';
                                        else echo " "; ?></a>
        <a class="box" href="?case=4#"><?php if ($_SESSION['grille'][3] == 1) echo '<img src="img/cross.png" alt="Croix">';
                                        elseif ($_SESSION['grille'][3] == 2) echo '<img src="img/circle.png" alt="Circle">';
                                        else echo " "; ?></a>
        <a class="box" href="?case=5#"><?php if ($_SESSION['grille'][4] == 1) echo '<img src="img/cross.png" alt="Croix">';
                                        elseif ($_SESSION['grille'][4] == 2) echo '<img src="img/circle.png" alt="Circle">';
                                        else echo " "; ?></a>
        <a class="box" href="?case=6#"><?php if ($_SESSION['grille'][5] == 1) echo '<img src="img/cross.png" alt="Croix">';
                                        elseif ($_SESSION['grille'][5] == 2) echo '<img src="img/circle.png" alt="Circle">';
                                        else echo " "; ?></a>
        <a class="box" href="?case=7#"><?php if ($_SESSION['grille'][6] == 1) echo '<img src="img/cross.png" alt="Croix">';
                                        elseif ($_SESSION['grille'][6] == 2) echo '<img src="img/circle.png" alt="Circle">';
                                        else echo " "; ?></a>
        <a class="box" href="?case=8#"><?php if ($_SESSION['grille'][7] == 1) echo '<img src="img/cross.png" alt="Croix">';
                                        elseif ($_SESSION['grille'][7] == 2) echo '<img src="img/circle.png" alt="Circle">';
                                        else echo " "; ?></a>
        <a class="box" href="?case=9#"><?php if ($_SESSION['grille'][8] == 1) echo '<img src="img/cross.png" alt="Croix">';
                                        elseif ($_SESSION['grille'][8] == 2) echo '<img src="img/circle.png" alt="Circle">';
                                        else echo " "; ?></a>
    </div>
 
    <div class=container>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <a class="reset btn btn-danger" href="?case=reset">Réinitialiser la partie</a>
            </div>
        </div>
    </div>
</body>

</html>