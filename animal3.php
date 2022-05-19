<?php
class Animal
{
public $nom="toto";
function __construct()
{
echo '<br>Constructeur Animal';
}

public function affiche()
{
    echo '<br>Animal ->'.$this->nom;
}

}
class Chien extends Animal
{
public $type='Chien';
function __construct()
{
parent::__construct();
echo '<br>Constructeur Chien';
}
function afficheType()
{
echo '<br>type='.$this->type;
}
function affiche(){
    // echo "<br>Chien -> ".$nom;
    parent::affiche();
}
}
class Race extends Animal
{
    function affiche()
    {
        echo "<br>classe race ici";
        //parent::affiche();
    }
}
$animal=new Chien();
$animal->afficheType();
$animal->affiche();
$race = new Race();
$race -> affiche();
