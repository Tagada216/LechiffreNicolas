<!DOCTYPE HTML>
<html>
    <head>
    <title>Découverte PHP</title>
    <meta charset="utf-8"> 
    <?php  require("functions.php")?>
    </head>
    <body>
        <h1>Le chiffre</h1>
        <?php 
        $result =  reverseString("Bonjour");
        echo $result;

        $palin = isPalindrome("kayak");
        echo $palin
        ?>

       
    </body>
</html>