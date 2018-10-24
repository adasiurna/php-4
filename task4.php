<?php

$countries = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
"Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
"Poland"=>"Warsaw"];

echo "<br>---Unsorted list of countries and capitals:---<br><br>";

foreach ($countries as $key => $countrie) {
    echo "The capital of $key is $countrie";
    echo "<br>";
}

echo "<br>---Countries sorted in ascending order:---<br><br>";

//ksort/krsort sorts array by index
ksort($countries);

foreach ($countries as $key => $countrie) {
    echo "The capital of $key is $countrie";
    echo "<br>";
}

echo "<br>---Cities sorted in descending order:---<br><br>";

//asort/arsort sorts array by values
arsort($countries);

foreach ($countries as $key => $countrie) {
    echo "The capital of $key is $countrie";
    echo "<br>";
}

