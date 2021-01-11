<?php 

function reverseString($data){

    $result = "";
    $dataLength = strlen($data);

    for($i=$dataLength; $i>-1; $i--){
        $result .= $data{$i};
    }
    return $result;




//-------Avec la fonction strrev -----
    // $res = strrev($data);
    // if($data == $res )
    //     return  "$res est un palindrome"   ;
    // else
    //     return  "$res n'est pas un palindrome" ;
}

function isPalindrome($data){

    $reverse = reverseString($data);
    if($reverse == $data)
        return "$reverse est un palindrome";
    else
    return "$reverse n'est pas un palindrome";
    
}
?>