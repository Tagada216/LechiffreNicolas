<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Découverte PHP</title>
    <meta charset="utf-8"> 
    <?php  require("functions.php")?>
    </head>
    <body>
        <h1>Le chiffre</h1>
        <a href="morpionHome.php">
            <button type="button" class="btn btn-success" > Jouer au Morpion</button>
        </a>
        <a href="login.php">
            <button type="button" class="btn btn-success" > Se connecter</button>
        </a>
        
        <?php 
        echo '<br>';
        $result =  reverseString("Bonjour");
        echo "Reverse: " , $result ,"<br/>";
        
        $palin = isPalindrome("kayak");
        echo $palin
        ?>
        <div id="board">
        
            <?php 
            $game = generateDamier(5);
            showDamier($game); 
            ?>
        </div>
        <?php 
            $tab = gRandomTab(10);
            echo "Le tableau :";
            print_r($tab);
            echo '<br>';
            echo "Le tableau ordre croissant:";
            echo '<br>';
            print_r(sortArray($tab, 1));
            echo '<br>';
            echo "Le tableau ordre décroissant:";
            echo '<br>';
            print_r(sortArray($tab, 2));
            echo '<br>';
            $Dtab = gDRandomTab();
            echo "Le tableau multidimensionnel: ";
            echo '<br>';
           // var_dump($Dtab);
            print_r(displayTab($Dtab))
        ?>

    <?php
        echo '<br>';
        echo "Le Scan dir: ";
        echo '<br>';
        $dir = "testDir/";
        listingDir($dir);
        file_put_contents($dir.'list.txt', ''); // on vide le fichier txt
        saveFile($dir);
    ?>
    </body>
</html>