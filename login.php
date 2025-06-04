
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $_SESSION['naam'] = htmlspecialchars($_POST['naam']);
    

    header("Location: dashboard.php");
    exit;
}
?>

<form method="POST" action="login.php">
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam" required>
    <button type="submit">Inloggen</button>
</form>



<?php
 if (isset($_POST['login'])) {
     header("Location: dashboard.php");
     exit;
 }
?>
 
 <form method="post">
     <button type="submit" name="login">Inloggen</button>
 </form>