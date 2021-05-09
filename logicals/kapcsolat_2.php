<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<?php
	//szerver oldali ellenőrzés példa
	$rendben=0;
	if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
	{
		exit("Hibás név: ".$_POST['nev']);
	} else {
		$rendben++;
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Hibás email: ".$_POST['email']);
	} else {
		$rendben++;
	}

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		exit("Hibás szöveg: ".$_POST['szoveg']);
	} else {
		$rendben++;
	}

	


	if($rendben==3) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=uziregi', 'root', '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            $sqlInsert = "insert into emailek(id,nev,email,szoveg) values(0, :nev, :email, :szoveg)";
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'], ':szoveg' => $_POST['szoveg']));

        } catch
        (PDOException $e) {
            echo "Hiba történt: " . $e->getMessage();
        }
    	}
		if($rendben == 3) {
			
			
			header("Location: ../templates/pages/uzenetek.tpl.php");
			exit();
		  }
		  
		 
	  
	?>
	
	</body>
</html>