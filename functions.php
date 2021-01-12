<?php 

function reverseString($data){

    $result = "";
    $dataLength = strlen($data);

    for($i=(($dataLength)-1); $i>=0; $i--){
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

function generateDamier($size) {
    $damier = [];

    for ($i=0; $i<$size; $i++) {

        for ($j=0; $j<$size; $j++) {
            $damier[$i][$j] = ($j%2 == 0);

            if ($i%2 !== 0) {
                $damier[$i][$j] = !$damier[$i][$j];
            }

        }

    }

    return $damier;
}


function showDamier($tab) {
    for ($i=0; $i<count($tab); $i++){
        echo '<div class="line">';
        foreach($tab[$i] as $k => $v){
            if ($v == false) {
                echo '<div class="white"></div>';
            } else {
                echo '<div class="black"></div>';
            }
        }
        echo '</div>';
    }
}

function gRandomTab($size){

    $randomTab = array();
    for($i=0; $i<$size; $i++){
        array_push($randomTab, rand(0,100));
    }
    return $randomTab;
}

function gDRandomTab(){

    $randomTab = array();
    $tab = array();

    for($i=0; $i<6; $i++){
        for($j=0; $j<6; $j++){
            array_push($tab, rand(0,100));
        }
        array_push($randomTab, $tab);
    }
    return $randomTab;
}

function displayTab($tab){

    for($i=0 ; $i<6; $i++) {  //for row 0 to 5 
        for($j=0;$j<6;$j++) {    //for column 0 to 5  
            echo $tab[$i][$j]," " ; 
        } 
            echo "<br>" ; 
   } 

}

function sortArray($tab, $choice){

    switch ($choice) {
        case 1:
            sort($tab);

            $arrlength = count($tab);
            for($x = 0; $x < $arrlength; $x++) {
                echo $tab[$x];
                echo "<br>";
            }
            break;
        case 2:
            rsort($tab);
            $arrlength = count($tab);
            for($x = 0; $x < $arrlength; $x++) {
                echo $tab[$x];
                echo "<br>";
            }
            break;

    }

}

?>