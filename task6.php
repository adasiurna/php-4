<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<p>Įveskite visas temperatūras jas atskirdami kableliu:</p>
<form method="POST">
    <input name="all_temperatures">
    <input type="submit" name="submit">
</form>
<br>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //get the input value
    $all_temps = $_POST['all_temperatures'];
    //explode input value to an array by commas
    $array_of_temps = explode(',', $all_temps);

    //count how many temperatures has user submited
    $array_of_temps_length = count($array_of_temps);

    $array_of_temps_sum = 0;

    //loop counts the medium temperature
    foreach ( $array_of_temps as $one_temp ) {
        $array_of_temps_sum += $one_temp;
        $medium_temp = round(($array_of_temps_sum / $array_of_temps_length), 1);
    }
    
    echo "Vidutinė temperatūra: $medium_temp <br>";
    echo "Viso nuoskaitų: $array_of_temps_length <br>";

    //sort the temperatures for getting 2 max values
    rsort($array_of_temps);
    echo "Dvi didžiausios temperatūros: $array_of_temps[0], $array_of_temps[1] <br>";

    //sort the temperatures for getting 2 min values
    sort($array_of_temps);
    echo "Dvi mažiausios temperatūros: $array_of_temps[0], $array_of_temps[1] <br>";
}
?>


</body>
</html>