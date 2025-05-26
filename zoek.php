<?php

if (isset($_GET['zoekwoord'])) {
    
    $zoekwoord = htmlspecialchars($_GET['zoekwoord']);
    echo "Je zoekt naar: " . $zoekwoord;
} else {
    echo "Geen zoekwoord opgegeven.";
}
?>