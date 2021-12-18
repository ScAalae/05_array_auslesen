<?php

$antwort1 = isset($_GET['a1']) ? (string) $_GET['a1'] : '';
$antwort2 = isset($_GET['a2']) ? (string) $_GET['a2'] : '';

echo $antwort1 . "<br>" . $antwort2;

?>