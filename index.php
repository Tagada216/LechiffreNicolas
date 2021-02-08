<?php

require_once('student.php');
require_once('delegate.php');

$student = new Student("Nicolas","Del",23,"CDA");

$student->displayStudent();

$student2 =new Delegate("Max","Président",22, "CDA");
     
$student2->displayDelegate();
?>