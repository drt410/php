<?php
class Animal
{
 public $nom;
 function affiche()
 {
 echo '<br>Je suis un Animal je m\'appelle '.$this->nom;
 }
 }
 class Chien extends Animal
{
 public $type='Chien';
 function afficheChien()
 {
 echo '<br>Je suis un chien je m\'appelle '.$this->nom;
 }
 }
 $animal=new Animal();
 $animal->nom='Goliath';
 $animal->affiche();
 $chien=new Chien();
 $chien->nom='Nitro';
 $chien->afficheChien(); 
 echo "<br>";
 print_r($chien);
