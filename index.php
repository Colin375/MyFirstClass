<?php
include "stoel.php";

$rodeStoel = new Stoel("rood", 60);

echo $rodeStoel->echoKleur() . "\n";
echo "Zithoogte rode stoel: " . $rodeStoel->echoZithoogte() . "\n";

$rodeStoel->verstelZithoogte(70);

echo "Zithoogte na verstelling: " . $rodeStoel->echoZithoogte() . "\n";
?>