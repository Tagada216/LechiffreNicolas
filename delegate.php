<?php
require_once('person.php');

class Delegate extends Student{

    public function displayDelegate(){
        echo '<br>';
        echo "Je m'apelle " ;
        echo self::name ;
        echo '<br>';
        echo"et je suis délégué";
    }
}

?>