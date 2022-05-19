<?php
class Articles
{
public string $nom;
public string $description; // Exemple : un canapé
private float $prixHt=0; // Exemple de prix

function __construct($nom,$description,$prixHt)
 {
    $this->nom=$nom;
    $this->description=$description;
    $this->prixHt=$prixHt;
 }

public function getPrixHt()
{
return $this->prixHt;
}

public function setPrixHt($prixHt)
{
return $this->prixHt= $prixHt;
}

public function affiche()
{
    echo "<p>nom = ".$this->nom;
    echo "<br>Description = ".$this->description;
    echo "<br>prix ttc =".$this->prixHt*1.2."</p>";
}
}

$art1=new Articles("Canapé","Canapé hyper luxe avec bar intégré",560);

$art2=new Articles("Frigo","Frigo Americain",850);

$art3=new Articles("TV","Ecran géant 2M",1600);

$arts = array($art1,$art2,$art3);

foreach($arts as $art)
{
    $art->affiche();
}
