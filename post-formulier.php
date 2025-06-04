<?php
session_start(); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $naam = htmlspecialchars($_POST['naam']);
    echo "Welkom, " . $naam . "!";
} else {
   
    ?>

    <form method="POST" action="post-formulier.php">
        <label for="naam">Wat is je naam?</label>
        <input type="text" id="naam" name="naam" required>
        <button type="submit">Verzenden</button>
    </form>

    <?php
}