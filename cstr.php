<?php
class cstr
{
    public $dateCreation;
    public function __construct()
    {
    $this->dateCreation=date('d/m/Y H:i:s');
    }
    
    public function __destruct()
    {
    echo '<br>Objet crée le '.$this->dateCreation;
    echo '<br>Objet détruit le '.date(' d/m/Y H:i:s');
    }
    }
    $objet=new cstr();
    sleep(2);
    unset($objet);
