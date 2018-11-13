<?php

include "Voiture.php";

$ford = new Voiture("Ford", "Ranger", "Noire", "Michel");
$toyota = new Voiture("Toyota", "Hillux", "Blanc");
$dodge = new Voiture("Dodge", "RAM 1500", "Rouge", "Janine");

// Démarrer les voiture 1 et 3
echo "<div>Ford démarré ? ". ($ford->isStarted ? "oui":"non") ."</div>";
echo "<div>Toyota démarré ? ". ($toyota->isStarted ? "oui":"non") ."</div>";
echo "<div>Dodge démarré ? ". ($dodge->isStarted ? "oui":"non") ."</div>";
$ford->start();
// $toyota->start();
$dodge->start();
echo "<div>Ford démarré ? ". ($ford->isStarted ? "oui":"non") ."</div>";
echo "<div>Toyota démarré ? ". ($toyota->isStarted ? "oui":"non") ."</div>";
echo "<div>Dodge démarré ? ". ($dodge->isStarted ? "oui":"non") ."</div>";
echo "<hr>";

// On fait avancer les voitures
echo "<div>Vitesse de Ford : ". $ford->speed ."</div>";
echo "<div>Vitesse de Dodge : ". $dodge->speed ."</div>";
$ford->accelerate(50);
$dodge->accelerate(30);
echo "<div>Vitesse de Ford : ". $ford->speed ."</div>";
echo "<div>Vitesse de Dodge : ". $dodge->speed ."</div>";




// echo "<div>Vitesse de Ford : ". $ford->speed ."</div>";
// echo "<div>Model de Ford : ". $ford->model ."</div>";
