<?php
require_once('person.php');

class Student extends Person {


    public function displayStudent(){
        echo $this->firstname;
        echo '<br>';
        echo $this->name;
    }

}

?>