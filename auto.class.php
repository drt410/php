<?php
function chargeauto($class_name)
{
require_once 'class/'.$class_name.'.class.php';
}
spl_autoload_register('chargeauto');