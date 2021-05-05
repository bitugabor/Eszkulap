<!DOCTYPE html>
<html>
    <head>
<table>
    <caption>5. gyakorlat 1. feladat:<br>TÁBLÁZAT</caption>
    <tr>
        <th>Employee</th>
        <th>Salary</th>
        <th>Bonus</th>
        <th>Supervisor</th>
    </tr>
    <tr>
        <td>Stephen C. Cox</td>
        <td>$300</td>
        <td>$50</td>
        <td>Bob</td>
    </tr>
    <tr>
        <td>Josephin Tan</td>
        <td>$150</td>
        <td>-</td>
        <td>Annie</td>
    </tr>
    <tr>
        <td>Joyce Ming</td>
        <td>$200</td>
        <td>$35</td>
        <td>Andy</td>
    </tr>
    <tr>
        <td>James A. Pentel</td>
        <td>$175</td>
        <td>$25</td>
        <td>Annie</td>
    </tr>
</table>
    </head>
    <body>
    <h1>Szia Bitu ez egy h1-es címsor.</h1>
    </body>
</html>
<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <embed src="sample.mp4" autostart="false" height="300" width="500" />
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
    
    // Megjelenítés logika:
?><!DOCTYPE html>
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

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Válassza ki a képet a  feltöltéshez:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Kép feltöltése" name="submit">
</form>

</body>
</html>
