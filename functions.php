<?php
    require_once('./class/gameData.php');

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

    function saveSession($room, $player){

        $_SESSION['room_link'] = $room; 
        $_SESSION['player'] = $player;
        
        $game = new gameData($room);

        $game->startGame();
    }

    function getauJoueur(){

        $room =$_SESSION['room_link'];
        $currentGame = new gameData($room);

        $result = $currentGame ->getauJoueur();
        return $result;
    }
    function getGrid(){

        $room =$_SESSION['room_link'];
        $currentGame = new gameData($room);

        $result = $currentGame ->getGrid();
        return $result;
    }

    function SaveGrid($grid){

        $room =$_SESSION['room_link'];
        $currentGame = new gameData($room, $grid);

        $currentGame ->saveGrid($grid);

    }
?>
