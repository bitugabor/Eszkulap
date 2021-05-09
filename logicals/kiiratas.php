<?php
try {
// Kapcsolódás
$pdo = new PDO('mysql:host=localhost;dbname=uziregi', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
$utasitas = "Select id, csaladi_nev, uto_nev, bejelentkezes";
$eredm = $pdo->query($utasitas);
foreach ($eredm as $sor)
print $sor['id'] . " " .$sor['csaladi_nev'] . "<br>";
}
catch (PDOException $e) {
echo "Hiba: ".$e->getMessage();
}
?>
