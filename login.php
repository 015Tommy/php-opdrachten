
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de naam op en sla op in de sessie
    $_SESSION['naam'] = htmlspecialchars($_POST['naam']);
    
    // Doorverwijzen naar dashboard.php
    header("Location: dashboard.php");
    exit;
}
?>

<!-- HTML-formulier -->
<form method="POST" action="login.php">
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam" required>
    <button type="submit">Inloggen</button>
</form>
