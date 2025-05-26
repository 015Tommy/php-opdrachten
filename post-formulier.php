<?php
session_start(); // Nodig voor sessies als je die later wilt gebruiken

// Controleer of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de naam op en ontsnap deze voor veiligheid
    $naam = htmlspecialchars($_POST['naam']);
    echo "Welkom, " . $naam . "!";
} else {
    // Toon het formulier
    ?>

    <form method="POST" action="post-formulier.php">
        <label for="naam">Wat is je naam?</label>
        <input type="text" id="naam" name="naam" required>
        <button type="submit">Verzenden</button>
    </form>

    <?php
}