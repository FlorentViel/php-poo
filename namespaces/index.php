<?php

include "classes/A/MaClass.php";
include "classes/B/MaClass.php";
include "classes/C/D/E/F/MaClass.php";
include "classes/C/D/E/F/MaClass2.php";

// function myAutoload($class) {
//     $class = preg_replace("/\\\/", "/", $class);
//     include_once 'classes/'.$class . '.php';
// }
// spl_autoload_register('myAutoload');

use \A\MaClass AS MaClassA;
use \B\MaClass AS mcB;
use \C\D\E\F\MaClass AS MaClassF;
use \C\D\E\F\MaClass2;

$monObjet1 = new MaClassA;
$monObjet1->maMethode();

$monObjet2 = new mcB;
$monObjet2->maMethode();

$monObjet3 = new MaClassF;
$monObjet3->maMethode();

$monObjet4 = new MaClass2;
$monObjet4->maMethode();


try {
    $db = new \PDO();
} catch(\Exception $e) {

}