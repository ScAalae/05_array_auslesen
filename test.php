<?php
<?php
$passwort = '';
if (isset($_GET['q'])) {
    $passwort = $_GET['q'];
}

// Speichert die Anzahl der Srings im Passwort
$sicherheitsWert = strlen($passwort);

// Sucht nach EINEM Kleinbuchstaben in $passwort,
// NICHT nach allen Kleinbuchstaben
if (preg_match("/[a-z]/", $passwort)) {
    $sicherheitsWert = $sicherheitsWert + 3;
}

if (preg_match("/[A-Z]/", $passwort)) {
    $sicherheitsWert = $sicherheitsWert + 3;
}

if (preg_match("/[0-9]/", $passwort)) {
    $sicherheitsWert = $sicherheitsWert + 4;
}

if (preg_match("/[_,:]/", $passwort)) {
    $sicherheitsWert = $sicherheitsWert + 5;
}

// Hier bitte die Ausgaben für die ermittelten Werte erzeugen
?>