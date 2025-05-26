<?php
session_start();

// Controleer of de naam in de sessie staat
if (isset($_SESSION['naam'])) {
    $naam = htmlspecialchars($_SESSION['naam']);
    echo "Welkom terug, " . $naam . "!";
} else {
    // Geen naam gevonden in sessie: doorverwijzen naar login
    echo "Je bent niet ingelogd. <a href='login.php'>Inloggen</a>";
}
?>
