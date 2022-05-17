<?php
Error_reporting(E_ALL|E_STRICT);
require_once "User.php";

$objet = new User();
$objet->nom='Fongaro';
$objet->prenom='Tristan';
$objet->age=39;
$objet->email='toto@ldnr.fr';
$objet->role='admin';
//$objet->infos(); 
$objet->AfficheInfos();

// $objet = new User();
// $objet->nom='Fongaro';
// $objet->prenom='Tristan';
// $objet->age=39;
// $objet->email='toto@ldnr.fr';
// $objet->role='admin';