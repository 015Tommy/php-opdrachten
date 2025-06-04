<?php

try {
$conn = new PDO("mysql:host=localhost;dbname=winkel", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Verbinding gelukt!";
} catch (PDOException $e) {
echo "Verbinding mislukt: " . $e->getMessage();
}


$stmt = $conn->query("SELECT * FROM producten");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "Product: " . $row['name'] . " - €" . $row['price'] . "<br>";
}
?>


<?php
 class Product {
     public int $id;
     public string $name;
     public float $price;
 
     public function toon() {
         echo "Product: {$this->name} - €{$this->price}<br>";
     }
 }
 
 $conn = new PDO("mysql:host=localhost;dbname=winkel", "root", "");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 $stmt = $conn->query("SELECT * FROM producten");
 $producten = $stmt->fetchAll(PDO::FETCH_CLASS, 'Product');
 
 foreach ($producten as $product) {
     $product->toon();
 }
?>
