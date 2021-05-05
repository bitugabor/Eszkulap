<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Galéria</title>
    <style type="text/css">
        div#galeria {margin: 0 auto; width: 620px;}
        div.kep { display: inline-block; }
        div.kep img { width: 200px; }
    </style>
    </head>
    <body>
    <div class="kepfeltoltes"><?php if(isset($_SESSION['login'])) { ?><strong>Kedves <?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><form action="upload.php" method="post" enctype="multipart/form-data">
  <br>Kérem válassza ki a képet a  feltöltéshez:<br>

  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Kép feltöltése" name="submit">
</form><?php } ?></div>
<?php
    // Alkalmazás logika:
    include('config.inc.php');
    
    // adatok összegyűjtése:    
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
    <h1>Galéria</h1>
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>">
            </a>            
            <p>Név:  <?php echo $fajl; ?></p>
            <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
        </div>
    <?php
    }
    ?>
    </div>


</body>
</html>
