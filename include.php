<?php
include 'personne.php';

$pers = new Personne("Turing","Allan");
var_dump ($pers);
$pers->afficher();
