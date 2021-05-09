<!DOCTYPE html>
<html>
<head>
<title>Üzenetek</title>
<meta charset="utf-8">
<style>
table, td, tr {
border: 1px solid black;
}
body {
  background-image: url('./images/eszkulap_logo_nagy_1.jpg');
  
	background-repeat: no-repeat;
	background-size: cover;
    background-attachment: fixed;
}
</style>
</head>
<body>
<?php
try {
// Kapcsolódás
$pdo = new PDO('mysql:host=localhost;dbname=uziregi', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
$utasitas = "Select id, nev, email, szoveg from emailek order by id desc";
$eredm = $pdo->query($utasitas);
}
catch (PDOException $e) {
echo "Hiba: ".$e->getMessage();
}
?>


<h1>Bejövő Üzenetek</h1>
<table>
<?php foreach ($eredm as $sor)
print "<tr><td>" . $sor['id'] . "</td>" . "<td>" . $sor['nev'] . "</td>" . "<td>" .  $sor['email'] . "</td>" . "<td>" . $sor['szoveg'] . "</td></tr>";
?>
</table>
</body>
</html>