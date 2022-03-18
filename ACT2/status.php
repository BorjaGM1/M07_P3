<?php
session_start();
if (!isset($_SESSION['pequeños'])) {
    $_SESSION['pequeños'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,);
}
if (!isset($_SESSION['grandes'])) {
    $_SESSION['grandes'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,);
}
echo "Parking pequeños: ";
foreach ($_SESSION['pequeños'] as $p){
    echo "P -> ".$p." ||";
}
echo "<br><br><br>";
echo "Parking grandes: ";
foreach ($_SESSION['grandes'] as $g){
    echo "P -> ".$g." ||";
}