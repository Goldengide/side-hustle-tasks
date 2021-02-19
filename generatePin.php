<?php 

function generatePin($numberOfPins) {
    $pinCollectionArray = [];

    for ($i=1; $i <= $numberOfPins ; $i++) { 
        mt_srand($i);
        // echo mt_rand();
        $pin = mt_rand(100000000000,900000000000);
        $pinCollectionArray[$i] = $pin;
    }
    
    return $pinCollectionArray;
}

function printArray($array) {
    $line = "";

    foreach ($array as $index => $pin) {
        $line .= " Pin number ". $index . ". - ". $pin."<br>";
    }

    echo $line;
}

printArray(generatePin(200)) ;

?>