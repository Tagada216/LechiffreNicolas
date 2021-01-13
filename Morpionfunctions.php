<?php

    function getRandomLink($length=4){
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';
        for($i=0; $i<$length; $i++){
            $string .= $chars[rand(0, strlen($chars)-1)];
        }
        return $string;
    }
    function resetGame(){
        $_SESSION['grille'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        $_SESSION['auJoueur'] = 1;
    }
?>
