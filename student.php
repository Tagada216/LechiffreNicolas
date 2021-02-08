<?php

class Student {

    private $name;
    private $firstname;
    private $age;
    private $promo;

    public function __construct($name, $firstname, $age, $promo){
        $this->name = $name;
        $this->firstname =$firstname;
        $this->age =$age;
        $this->promo =$promo;
    }
    public function displayStudent(){
        echo $this->firstname;
        echo $this->name;
    }

}

?>