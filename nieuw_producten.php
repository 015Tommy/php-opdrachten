<?php try {
$conn = new PDO("mysql:host=localhost;dbname=winkel", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Verbinding gelukt!";
} catch (PDOException $e) {
echo "Verbinding mislukt: " . $e->getMessage();
}
?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'] ?? '';
    $prijs = $_POST['prijs'] ?? '';

    $stmt = $conn->prepare("INSERT INTO producten (name, price) VALUES (:naam, :prijs)");
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->execute();

    echo "Product toegevoegd!<br><br>";
}
?>

<form method="post">
    Naam: <input type="text" name="naam" required><br>
    Prijs: <input type="number" step="0.01" name="prijs" required><br>
    <input type="submit" value="Toevoegen">
</form>
