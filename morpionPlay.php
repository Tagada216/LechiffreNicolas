<?php
session_start();
if (empty($_SESSION['wichplayer'])) {
    $_SESSION['wichplayer'] = $_POST['player'];
    $_SESSION['roomLink'] = $_POST['roomlink'];
    $_SESSION['scoreJ1'] = 0;
    $_SESSION['scoreJ2'] = 0;
    $_SESSION['auJoueur'] = 1;
    $_SESSION['grille'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Découverte PHP</title>
    <meta charset="utf-8">
    <?php require("Morpionfunctions.php"); ?>
</head>

<body>
    <?php

    // On récupère la valeur de GET si ce n'est pas vide
    if ( (!empty($_GET['case']))  AND ($_GET['case']!= "reset") ){
        // On récupère la case jouée et on la décrémente pour que cela corresponde avec notre tableau (array). Il ne faut pas oublier que les array commencent leur valeur à 0.
        $leJoueurJoueLaCase = $_GET['case'] - 1;
        // On test si la case est égale à 0
        if ($_SESSION['grille'][$leJoueurJoueLaCase] == 0) {
            // la case est libre, on peut y placer le pion
            $_SESSION['grille'][$leJoueurJoueLaCase] = $_SESSION['auJoueur'];
        }

    }
    //Reset Part 
    if ((!empty($_GET['case']))  AND ($_GET['case'] == "reset")) {
        resetGame();
    }

    //Game Data 
    echo '<div class="container">';
        echo '<div class="d-flex justify-content-center">';
            echo '<div class="p-2">';
                echo "<br><h2> Vous êtes dans la salle : <b>" . $_SESSION['roomLink'] . "</b></h2> <br>";
                echo " <h3>Vous êtes le : <b>" . $_SESSION['wichplayer'] . "</b></h3> <br>";
                echo " <h4>C'est le tour du <b> Joueur " . $_SESSION['auJoueur'] . "</b></h4> <br>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    ?>

    <div class="game-board">
        <a href="?case=1#" class="box"> <?php if ($_SESSION['grille'][0] == 1) echo '<img src="img/cross.png" alt="Croix" >';
                                        elseif ($_SESSION['grille'][0] == 2) echo '<img src="img/circle.png" alt="Circle">';
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