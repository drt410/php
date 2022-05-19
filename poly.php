<?php
class forme
{
public string $nom='';
function __construct()
{
echo '<br>Instanciation d\'un nouvel objet de type forme';
}
} 

class cercle extends forme
 {
 public int $rayon=0;
 function calcul_aire()
 {
 return number_format(3.14159*($this->rayon*$this->rayon),2);
 }
 }
 class carre extends forme
 {
 public int $longueur=0;
 public int $largeur=0;
 function calcul_aire()
 {
 return number_format($this->longueur*$this->largeur,2);
 }
 }
 $mo1=new cercle();
 $mo1->nom='Objet1';
 $mo1->rayon=5;
 $mo2=new cercle();
 $mo2->nom='Objet2';
 $mo2->rayon=8;
 $mo3=new carre();
 $mo3->nom='Objet3';
 $mo3->longueur=8;
 $mo3->largeur=5;
 $liste=array($mo1, $mo2, $mo3); // Liste d'objets
 foreach($liste as $objet)
 {
 echo '<br>Aire de '.$objet->nom.' = '.$objet->calcul_aire();
 }