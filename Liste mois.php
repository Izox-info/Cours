<h1> Tableaux </h1>

<?php

$listemois =["Janvier", "Fevrier", "Mars", "Avril", "Mai","Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
// $listemois = array ("Janvier", "Fevrier", "Mars", "Avril", "Mai","Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre")
// var_dump ($listemois);
$i=0;
do{
    echo $listemois[$i];
    echo "<br>";
    $i++;
}while ($i<12);



