

<?php
class User
 {
    public string $nom;
    public string $prenom;
    public int $age;
    public string $email;
    public $role;

 function AfficheInfos()
{
echo "<br>nom : ".$this->nom;
echo "<br>prenom : ".$this->prenom;
echo "<br>age : ".$this->age;
echo "<br>email : ".$this->email;
echo "<br>role : ".$this->role;
}

 function infos()
 {
 echo '<br>Nom du fichier : '.__FILE__;
 echo '<br>Numéro de ligne : '.__LINE__;
 echo '<br>Nom de la classe : '.__CLASS__;
 echo '<br>Nom de la fonction : '.__FUNCTION__;
 echo '<br>Nom de la methode : '.__METHOD__;
 }
 }


 
    // Liste propriétés
//
// public string $nom='Fongaro';
// public string $prenom='Tristan';
// public int $age=29;
// public string $email='toto@ldnr.fr';
// public $role='admin';



    // public function __construct($nom,$prenom,$age,$email,$role){
    //     $this->nom = $nom;
    //     $this->prenom = $prenom;
    //     $this->age = $age;
    //     $this->email = $email;
    //     $this->admin = $admin;
    // }
