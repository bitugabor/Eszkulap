<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Galéria</title>
    <style type="text/css">
        
        div.kep { display: inline-block; }
        div.kep img { width: 200px; }
    </style>
    <style>
body {


  background-image: url('./images/eszkulap_logo_nagy_1.jpg');
  
	background-repeat: no-repeat;
	background-size: cover;
    background-attachment: fixed;
}
</style>
    </head>
    <body>
    <div id="feltoltes">
    <?php if(isset($_SESSION['login'])) { ?><strong>Kedves <?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><form action="./upload.php" method="post" enctype="multipart/form-data">
  <br>Kérem válassza ki a képet a  feltöltéshez:<br> <br>

  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Kép feltöltése" name="submit">
</form><?php } ?></div>
<?php
    
    include('./includes/config.inc.php');
    
  
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);
?>
<div id="galeria">
    <h1 class="cim">Galéria</h1>
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img id="galeri" src="<?php echo $MAPPA.$fajl ?>">
            </a>            
            
            <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
        </div>
    <?php
    }
    ?>
</div>


</body>
</html>
