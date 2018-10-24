<?php

$numbers = [];
for ( $i=1; $i<=10; $i++ ) {

    do {
        $number = mt_rand(1, 20);
        echo("dabar skai2ius yra $number"."<br>");
    }
    
    while ( in_array($number, $numbers));

    echo('Pridedame skaičių '.$number.' į masyvą'. print_r($number, true).'<br>' );
    $numbers[] = $number;
}

print_r($numbers);