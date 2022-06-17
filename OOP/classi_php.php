<?php

use Persona as GlobalPersona;

abstract class Persona{

    //Proprietà
    private $nome;
    public $cognome;
    public $eta;

    //Costruttore
    function __construct($nome, $cognome, $eta){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    //Metodi
    abstract function saluta();

    function compleanno(){
        echo $this->eta;
    }

    //Get & SET
    function set_nome($nome){
        $this->nome = $nome;
    }

    function get_nome(){
        return $this->nome;
    }
}

class Docente extends Persona{
    public $materia;

    function __construct($nome, $cognome,$eta ,$materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
        $this->eta =$eta;
    }

    function saluta()
    {
        echo "Buongiorno sono il docente $this->nome $this->cognome e insegno $this->materia";
    }

    function get_materia(){
        return $this->materia;
    }
}

class Alunno extends Persona{
    public $classe;

    function __construct($nome, $cognome,$eta ,$classe){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->classe = $classe;
        $this->eta =$eta;
    }

    function saluta()
    {
        echo "Buongiorno sono l'alunno $this->nome $this->cognome e sto nella $this->classe";
    }
}


$doc1 = new Docente("Paolo", "Prazzoli","09/06/1988","HTML");
//$doc1->compleanno();
$doc1->saluta();

echo "<BR>";    

$alu1 = new Alunno("Mario", "Rossi", "25/12/1987", "5 ITI C");
$alu1->saluta();
//$alu1->compleanno();
?>