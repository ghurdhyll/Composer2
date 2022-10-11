<?php 
require '../vendor/autoload.php';
use App\Hello;
$bonjour = new Hello();

echo $bonjour->talk();
