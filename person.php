<?php

 class Person{
    protected $name;
    protected $firstname;
    protected $age;
    protected $promo;

    public function __construct($name, $firstname, $age, $promo){
        $this->name = $name;
        $this->firstname =$firstname;
        $this->age =$age;
        $this->promo =$promo;
    }
 }

?>