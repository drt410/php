<?php
class Animal
 {
 function __construct()
 {
 echo '<br>Constructeur père (Animal)';
 }

 }
 class Chien extends Animal
 {
 function __construct()
 {
 echo '<br>Constructeur fils (Chien)';
 }
 }
 $chien=new Chien(); 
