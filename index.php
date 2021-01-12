<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <title>Découverte PHP</title>
    <meta charset="utf-8"> 
    <?php  require("functions.php")?>
    </head>
    <body>
        <h1>Le chiffre</h1>
        <?php 
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
        ?>
    </body>
</html>