<?php 

function reverseString($data){

    // Minuiscule pour évité les Majuscule en dabut du mot
    strtolower($data)

    $res = strrev($data);
    if($data == $res )
        return  "$res est un palindrome"   ;
    else
        return  "$res n'est pas un palindrome" ;

}


?>