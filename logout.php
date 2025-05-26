<?php
session_start(); // Nodig om toegang te krijgen tot de sessie

// Verwijder alle sessiegegevens
session_unset();

// Beëindig de sessie
session_destroy();

echo "Je bent uitgelogd.";
?>