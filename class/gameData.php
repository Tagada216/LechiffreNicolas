<?php 
require_once('PDO.php');

class gameData{

    // Propriétés
    public $roomLink;
    public $grid;  // O = Vide, 1 = Croix, 2 = rond 
    public $auJoueur;

    //Méthodes
    public function __construct($roomLink, $grid =array(0, 0, 0, 0, 0, 0, 0, 0, 0), $auJoueur = 1 )
    {
        $this->roomLink = $roomLink;
        $this->grid = $grid;
        $this->auJoueur = $auJoueur;
    }

    public function startGame(){

        //Before Save test Numéro de room n'est présent que 2 Fois (Joeur 1 et 2 )
        //Serialized afin de sauvegarder le tableau en BDD
        $serializedGrid = serialize($this->grid);
        try{
            $PDO = new PDOPHP();
            $dbh = $PDO->getConnexion();
            $sth = $dbh -> prepare('INSERT INTO games (room_link, grid, wichplayer  ) VALUES (:room_link, :grid, :wichplayer)');
            $sth->bindValue(':room_link', $this->roomLink, PDO::PARAM_STR);
            $sth->bindValue(':grid', $serializedGrid, PDO::PARAM_STR);
            $sth->bindValue(':wichplayer', $this->auJoueur, PDO::PARAM_INT);
            $sth->execute();
            $PDO -> deleteConnexion();
        }
        catch(PDOException $e){
            echo "Erreur : ". $e->getMessage()." Line ".$e->getLine()." File  ".$e->getFile();
            die();
        }
    }
    public function saveGrid($grid){

        //Before Save test Numéro de room n'est présent que 2 Fois (Joeur 1 et 2 )
        //Serialized afin de sauvegarder le tableau en BDD
        $serializedGrid = serialize($this->grid = $grid);
        $room = $_SESSION['room_link'];
        try{
            $PDO = new PDOPHP();
            $dbh = $PDO->getConnexion();
            $sth = $dbh -> prepare("UPDATE games SET grid ='".$serializedGrid."' WHERE room_link='".$room."'");
            $sth->execute();
        }
        catch(PDOException $e){
            echo "Erreur : ". $e->getMessage()." Line ".$e->getLine()." File  ".$e->getFile();
            die();
        }
    }

    public function getauJoueur(){
        $room = $_SESSION['room_link'];
        try{
            $PDO = new PDOPHP();
            $dbh = $PDO->getConnexion();
            $sth = $dbh -> prepare("SELECT * FROM games WHERE room_link='".$room."'");
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result[0]['wichplayer'];
        }
        catch(PDOException $e){
            echo "Erreur : ". $e->getMessage()." Line ".$e->getLine()." File  ".$e->getFile();
            die();
        }
    }
    public function getGrid(){
        $room = $_SESSION['room_link'];
        try{
            $PDO = new PDOPHP();
            $dbh = $PDO->getConnexion();
            $sth = $dbh -> prepare("SELECT * FROM games WHERE room_link='".$room."'");
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            $unserializedGrid =unserialize( $result[0]['grid']);
            return $unserializedGrid;
        }
        catch(PDOException $e){
            echo "Erreur : ". $e->getMessage()." Line ".$e->getLine()." File  ".$e->getFile();
            die();
        }
    }

}


?>