<?php
require_once ("Jugador.php");
require_once ("Portero.php");

$futbolistas = array();
$futbolistas[0] = new Jugador("Paco",1,1,1,1);
$futbolistas[1] = new Jugador("Mariano",2,2,2,2,);
$futbolistas[2] = new Jugador("McAlister",3,3,3,3);
$futbolistas[3] = new Portero("Mandalorian",9,9,9);
$futbolistas[4] = new Portero("Larry",4,4,4);

foreach ($futbolistas as $futbolista){
    echo $futbolista."<br>";
}