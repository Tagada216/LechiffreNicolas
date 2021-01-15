<?php

class PDOPHP{

    //Propriétés :

    public $dbh;

    //Méthodes : 

    public function getConnexion(){

        $this->dbh = new PDO('mysql:host=localhost; dbname=tictactoe', 'root');
        return $this->dbh;
    }

    public function deleteConnexion(){
        $this->dbh = null;
    }


}

?>