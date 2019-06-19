<?php
class Personne{
    public $nom;
    public $prenom;

        function __construct($nom,$prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    function afficher(){
        echo $this->prenom . " " . $this->nom;
    }
}
