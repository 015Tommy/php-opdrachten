<?php
session_start();


if (isset($_SESSION['naam'])) {
    $naam = htmlspecialchars($_SESSION['naam']);
    echo "Welkom terug, " . $naam . "!";
} else {
  
    echo "Je bent niet ingelogd. <a href='login.php'>Inloggen</a>";
}
?>


<?php
echo "Welkom op het dashboard!";
?>
