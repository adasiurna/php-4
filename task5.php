<?php

$colors = ['BlanchedAlmond', 'CadetBlue', 'BurlyWood','DarkOliveGreen', 'HotPink', 'PapayaWhip'];
//foreach paselektina po vieną elementą iš eilės
//galima rašyti ir taip jei reikia key
//foreach ( $colors as $key => $color )
?>

<table border=1>
    <tr>
        <th>Key</th>
        <th>Color</th>
    </tr>


    <?php foreach ($colors as $key => $color) {?>
    <tr>
        <td style="background-color: <?php  echo $color ?>"><?php echo $key; ?></td>
        <td style="background-color: <?php  echo $color ?>"><?php echo $color; ?></td>
    </tr>
    <?php }?>
</table>