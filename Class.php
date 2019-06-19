<?php
class Maclasse{
    public $propriete1;
    public $propriete2;
}

$monObjet = new Maclasse();
$monObjet -> propriete1 = "Hello";
$monObjet -> propriete2 = "World!";

echo $monObjet -> propriete1;
echo $monObjet -> propriete2;