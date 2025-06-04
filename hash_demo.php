<?php
$wachtwoord = 'test123';
$hash = password_hash($wachtwoord, PASSWORD_DEFAULT);
echo "Hash: $hash<br>";

$ingevoerd = 'test123';
if (password_verify($ingevoerd, $hash)) {
    echo "Wachtwoord klopt!";
} else {
    echo "Wachtwoord fout!";
}
?>
