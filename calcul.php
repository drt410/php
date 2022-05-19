<?php
class Operations
{
    public int $nb1=0;
    public int $nb2=0;
    public int $res=0;

public function addition($nb1,$nb2)
{
    $this->nb1=$nb1;
    $this->nb2=$nb2;
    return $this->res=$nb1+$nb2;;
}

public function soustraction()
{
    return $this->res=$this->nb2-$this->nb1;
}

public function division()
{
    return $this->res=$this->nb1/$this->nb2;
}

public function multiplication($nb1,$nb2)
{
    return $this->res=$nb1*$nb2;
}
}

$calc1 = new Operations();
$calc1->addition(100,500);
echo '$calc1 résultat = '.$calc1->res;
$calc1->multiplication($calc1->res,9);
echo '<br>$calc1 résultat = '.$calc1->res;

$calc2 = new Operations();
$calc2->nb1=150;
$calc2->nb2=10;
$calc2->division();
echo '<br>$calc2 résultat = '.$calc2->res;
//$calc2->multiplication($calc2->res,9);
echo '<br>$calc2 résultat = '.$calc2->res+=33; 

